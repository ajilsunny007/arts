<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
	}

	public function index()
	{
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$result['projects']=$this->MainModel->get_limit('tbl_projects',[],'p_id','DESC',0,12);
		$this->load->view('home',$result);
	}
	public function AboutUs()
	{
		$this->load->view('aboutus');
	}
	public function Projects()
	{
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$result['projects']=$this->MainModel->get_data_members('tbl_projects',[],'p_id');
		$this->load->view('projects',$result);
	}
	public function ContactUs()
	{
		$this->load->view('contactus');
	}
	public function Login()
	{
		$this->load->view('login');
	}
	public function Login_Check()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$condition=['username'=>$username,'password'=>md5($password)];
		$result=$this->MainModel->get_data('tbl_login',$condition);
		if($result)
		{
			foreach ($result as $value)
			{
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				$this->session->set_userdata('type',$value->type);
			}
			redirect('Dashboard','reload');
		}
		else
		{
			$this->session->set_userdata('logmsg','Username/Password invalid....!!');
			redirect('Login','reload');
		}
	}
	public function Dashboard()
	{
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$result['projects']=$this->MainModel->get_data_members('tbl_projects',[],'p_id');
		$this->load->view('admin/Dashboard',$result);
	}
	public function Category()
	{
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$this->load->view('admin/Category',$result);
	}
	public function Add_Category()
	{
		$cat=$this->input->post('cat');
		$data=['cat_name'=>$cat];
		$result=$this->MainModel->insertdate('tbl_categorys',$data);
		$result=$this->MainModel->get_data('tbl_categorys',[]);
		$html=$this->catview($result);
		echo $html;
	}
	public function Delete_Category()
	{
		$val=$this->input->post('val');
		$condition=['cat_id'=>$val];
		$this->MainModel->delete_data('tbl_categorys',$condition);
		$result=$this->MainModel->get_data('tbl_categorys',[]);
		$html=$this->catview($result);
		echo $html;
	}
	public function catview($result)
	{
		$html='';
		$i=1;
		foreach ($result as $value)
		{
			$html.='<tr>
				<th scope="row">'.$i.'</th>
				<td>'.$value->cat_name.'</td>
				<td><button type="button" onclick="deletecat('.$value->cat_id.')" class="btn-link"><i class="fa fa-times"></i></button></td>
			</tr>';
			$i++;
		}
		return $html;
	}
	public function session_check($type)
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$condition = array('username' => $username,'password' => md5($password),'type'=>$type);
		$result=$this->MainModel->get_data('tbl_login',$condition);
		if($result)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	public function Logout()
	{
		$this->session->unset_userdata('login_id');
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}
	public function Add_Project()
	{
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$this->load->view('admin/Add_Project',$result);
	}
	public function Upload_Project()
	{
		$name=$this->input->post('name');
		$caption=$this->input->post('caption');
		$category=$this->input->post('category');
		$data=['ca_id'=>$category,'p_name'=>$name,'p_caption'=>$caption];
		$lastid=$this->MainModel->insertdate('tbl_projects',$data);

		foreach($_FILES["images"]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=time().$_FILES["images"]["name"][$key];
			$file_name=str_replace(" ", "_", $file_name);
			$file_tmp=$_FILES["images"]["tmp_name"][$key];
			$folderPath = "../arts/assets/projects/";
			move_uploaded_file($file_tmp, $folderPath . $file_name);
			compress_image($folderPath, $folderPath . $file_name, 80);

			$data1=['image'=>$file_name,'pr_id'=>$lastid];
			$this->MainModel->insertdate('tbl_project_image',$data1);
		}
		redirect('Dashboard','reload');
	}
	public function get_image($value)
	{
		$condition=['pr_id'=>$value];
		$value='pi_id';
		$order='ASE';
		$start=0;
		$limit=1;
		$result=$this->MainModel->get_limit('tbl_project_image',$condition,$value,$order,$start,$limit);
		foreach ($result as $value)
		{
			$image=$value->image;
		}
		return $image;
	}
	public function Project_View($value)
	{
		$condition=['p_id'=>$value];
		$result['projects']=$this->MainModel->get_data('tbl_projects',$condition);
		$condition1=['pr_id'=>$value];
		$result['images']=$this->MainModel->get_data('tbl_project_image',$condition1);
		$this->load->view('admin/Project_View',$result);
	}
	public function Edit_Project($value)
	{
		$condition=['p_id'=>$value];
		$result['projects']=$this->MainModel->get_data('tbl_projects',$condition);
		$condition1=['pr_id'=>$value];
		$result['images']=$this->MainModel->get_data('tbl_project_image',$condition1);
		$result['category']=$this->MainModel->get_data('tbl_categorys',[]);
		$this->load->view('admin/Edit_Project',$result);
	}
	public function Delete_Image()
	{
		$val=$this->input->post('val');
		$condition=['pi_id'=>$val];
		$this->MainModel->delete_data('tbl_project_image',$condition);
	}
	public function Update_Project()
	{
		$proid=$this->input->post('proid');
		$name=$this->input->post('name');
		$caption=$this->input->post('caption');
		$category=$this->input->post('category');
		$data=['ca_id'=>$category,'p_name'=>$name,'p_caption'=>$caption];
		$condition=['p_id'=>$proid];
		$this->MainModel->update_data('tbl_projects',$data,$condition);

		if($_FILES["images"]["name"][0]!=='')
		{
			foreach($_FILES["images"]["tmp_name"] as $key=>$tmp_name)
			{
				$file_name=time().$_FILES["images"]["name"][$key];
				$file_name=str_replace(" ", "_", $file_name);
				$file_tmp=$_FILES["images"]["tmp_name"][$key];
				$folderPath = "../arts/assets/projects/";
				move_uploaded_file($file_tmp, $folderPath . $file_name);
				compress_image($folderPath, $folderPath . $file_name, 80);

				$data1=['image'=>$file_name,'pr_id'=>$proid];
				$this->MainModel->insertdate('tbl_project_image',$data1);
			}
		}
		redirect('Dashboard','reload');
	}
	public function Delete_Project()
	{
		$val=$this->input->post('val');
		$condition=['p_id'=>$val];
		$this->MainModel->delete_data('tbl_projects',$condition);
	}
	public function Category_View()
	{
		$val=$this->input->post('val');
		if($val=='')
		{
			$condition=[];
		}
		else {
			$condition=['ca_id'=>$val];
		}
		$result=$this->MainModel->get_data_members('tbl_projects',$condition,'p_id');
		$html='';
		$i=0;
		foreach ($result as $key)
		{
			$image=$this->get_image($key->p_id);
			if($i%3==0)
			{
				$html.='<div class="clearfix"> </div>';
			}
			$html.='<div class="col-sm-4 gallery-grids-left img'.$key->p_id.'">
				<div class="gallery-grid">
						<button type="button" title="Delete Project" class="closeimg" onclick="deleteproject('.$key->p_id.')">X</button>
						<img src="'.base_url('assets/projects/').$image.'" alt="" />
						<div class="captn">
							<h4>'.$key->p_name.'</h4>
							<p>'.$key->p_caption.'</p>
							<a href="'.site_url('Project-View/').$key->p_id.'" class="btn btn-info">View</a>
							<a href="'.site_url('Edit-Project/').$key->p_id.'" class="btn btn-danger">Edit</a>
						</div>
				</div>
			</div>';
			$i++;
		}
		if($html=='')
		{
			$html='<h3 class="text-danger">No Projects</h3>';
		}
		echo $html;
	}
	public function Project_Details($link,$value)
	{
		$prodect=openssl_decrypt(str_replace("~", "/",$value),"AES-128-ECB",'project-detailes');
		$condition=['p_id'=>$prodect];
		$result['projects']=$this->MainModel->get_data('tbl_projects',$condition);
		$condition1=['pr_id'=>$prodect];
		$result['images']=$this->MainModel->get_data('tbl_project_image',$condition1);
		$this->load->view('Project_Details',$result);
	}
	public function View_Category_Home()
	{
		$val=$this->input->post('val');
		if($val=='')
		{
			$condition=[];
		}
		else {
			$condition=['ca_id'=>$val];
		}
		$result=$this->MainModel->get_limit('tbl_projects',$condition,'p_id','DESC',0,3);
		$html='<ul  class=" masonry-outer mfp-gallery work-grid row clearfix list-unstyled m-b0">';
		$i=0;
		foreach ($result as $key)
		{
			$image=$this->get_image($key->p_id);
			$html.='<li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <a href="'.site_url('Project-Details/').str_replace(" ", "-",$key->p_name)."/".str_replace("/", "~",openssl_encrypt($key->p_id,"AES-128-ECB",'project-detailes')).'">
                                <div class="sx-box   image-hover-block">
                                    <div class="sx-thum-bx">
                                        <img src="'.base_url('assets/projects/').$image.'" alt="">
                                    </div>
                                    <div class="sx-info  p-t20 text-white">
                                        <h4 class="sx-tilte">'.$key->p_name.'</h4>
                                        <p class="m-b0">'.$key->p_caption.'</p>
                                    </div>
                               	</div>
                           	</a>
                        </li>';
		}
		echo $html."</ul>";
	}
	public function View_Category()
	{
		$val=$this->input->post('val');
		if($val=='')
		{
			$condition=[];
		}
		else {
			$condition=['ca_id'=>$val];
		}
		$result=$this->MainModel->get_data_members('tbl_projects',$condition,'p_id');
		$html='<ul  class="masonry-outer mfp-gallery row work-grid clearfix list-unstyled">';
		$i=0;
		foreach ($result as $key)
		{
			$image=$this->get_image($key->p_id);
			$html.='<li class="masonry-item cat-1 col-xl-3  col-lg-4 col-md-6 col-sm-12 m-b30">
                            <a href="'.site_url('Project-Details/').str_replace(" ", "-",$key->p_name)."/".str_replace("/", "~",openssl_encrypt($key->p_id,"AES-128-ECB",'project-detailes')).'">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="'.base_url('assets/projects/').$image.'" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0">'.$key->p_name.'</h4>
                                    <p class="m-b0">'.$key->p_caption.'</p>
                                </div>
                           </div>
                           </a>
                        </li>';
		}
		echo $html."</ul>";
	}
	public function Send_Mail()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('message');
		$this->load->library('email');

		 $message ="
		     <table>
	            <tr>
	                <td>Name:</td>
	                <td>$name</td>
	            </tr>
	            <tr>
	                <td>Email:</td>
	                <td>$email</td>
	            </tr>
	            <tr>
	                <td>Message:</td>
	                <td>$password</td>
	            </tr>
	        </table>";

		   $this->email->from('info@gravityarchstudio.com', 'Gravity');
		   $this->email->to('info@gravityarchstudio.com');
		   $this->email->subject('ContactUs Enquiry');
		   $this->email->message($message);
		   $this->email->send();
	}
	public function compress_image($source_url, $destination_url, $quality)
  {
      $info = getimagesize($source_url);
      if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
      elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
      elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
      imagejpeg($image, $destination_url, $quality);
  }
}
