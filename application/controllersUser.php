<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	

public function index()
{
                $id= '21'; 
                $this->load->model('User_model');
                $data['banner']= $this->User_model->all_banner();
                 $data['vision']= $this->User_model->vision();
                 $data['Expertise']= $this->User_model->all_Expertise();
                 $data['blog']= $this->User_model->Blog();
                 $data['details']= $this->User_model->meta_details($id);
                
                
                 $data['video']= $this->User_model->all_video();
                 $data['video_name']= $this->User_model->all_video();
                 $data['image_desc']= $this->User_model->all_image_desc();
                 $data['image_asc']= $this->User_model->all_image_asc();
                 $data['methodlogy']= $this->User_model->methodlogy();
                 $data['about']= $this->User_model->about();
                $this->load->view('front/templates/header',$data);
$this->load->view('front/index',$data);
                $this->load->view('front/templates/footer');
                
               
        }
        
        public  function about()
        {
 
                $this->load->model('User_model');
                $data['vision']= $this->User_model->vision();
                $data['about']= $this->User_model->about();
                $this->load->view('front/templates/header');
		$this->load->view('front/about',$data);
                $this->load->view('front/templates/footer');
        
        }
 
        
        public  function Methodology()
        {
                $this->load->model('User_model');
                $data['methodlogy']= $this->User_model->methodlogy();
                $this->load->view('front/templates/header');
		$this->load->view('front/Methodology',$data);
                $this->load->view('front/templates/footer');
        
        }
        
         public  function program()
        {
                $this->load->model('User_model');
                $data['program']= $this->User_model->program();
                $data['program_list']= $this->User_model->program_list();
                $this->load->view('front/templates/header');
		$this->load->view('front/program',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        public  function gallery()
        {
                $this->load->model('User_model');
                $data['image']= $this->User_model->all_image();
                $this->load->view('front/templates/header');
		        $this->load->view('front/Gallery',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        
         public  function video()
        {
                $this->load->model('User_model');
                $data['video']= $this->User_model->all_video();
                $this->load->view('front/templates/header');
		$this->load->view('front/video',$data);
                $this->load->view('front/templates/footer');
        
        }
        
         public  function Contact()
        {
                $this->load->model('User_model');
                $data['image']= $this->User_model->all_image();
                $this->load->view('front/templates/header');
		$this->load->view('front/Contact',$data);
                $this->load->view('front/templates/footer');
        
        }
         public function send_mail()
	{
            
                  
                $this->load->view('front/mail');  
           
        
        }
        
        
         public  function expertise()
        {
                $this->load->model('User_model');
                $data['expertise']= $this->User_model->expertise();
                $data['expertise_list']= $this->User_model->expertise_list();
                $this->load->view('front/templates/header');
		$this->load->view('front/expertise',$data);
                $this->load->view('front/templates/footer');
        
        }
        
         public  function Blog()
        {
                $this->load->model('User_model');
                $data['blog']= $this->User_model->Blog();
                $data['expertise_list']= $this->User_model->expertise_list();
                $this->load->view('front/templates/header');
		$this->load->view('front/Blog',$data);
                $this->load->view('front/templates/footer');
        
        }
         
         public  function expertise_info()
        {
               
                $this->load->model('User_model');
                
                 $id=$_GET['Expertise'];  
              
                $data['expertise_info']= $this->User_model->expertise_info($id);
                
                 
                $this->load->view('front/templates/header');
	        $this->load->view('front/expertise_info',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        public  function expertise_info_index()
        {
               
                $this->load->model('User_model');
                
                $id=$_GET['id'];   
               $data['expertise_info']= $this->User_model->expertise_info_expertise($id);
                
               $this->load->view('front/templates/header');
	       $this->load->view('front/expertise_info',$data);
               $this->load->view('front/templates/footer');
        
        }
        
         public  function blog_info()
        {
                $this->load->model('User_model');
                
                 $id=$_GET['id'];  
                $data['blog_info']= $this->User_model->blog_info($id);
                $data['blog_info_desc']= $this->User_model->blog_info_desc();
                $this->load->view('front/templates/header');
		$this->load->view('front/blog_info',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        public  function program_info()
        {
                $this->load->model('User_model');
                
                 $id=$_GET['id'];  
                 $data['program_info']= $this->User_model->program_info($id);
                  
                $this->load->view('front/templates/header');
		$this->load->view('front/program',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        public  function vision_info()
        {
               
                $this->load->model('User_model');
                
                $id=$_GET['id'];  
                $data['expertise_info']= $this->User_model->vision_info($id);
                $this->load->view('front/templates/header');
		$this->load->view('front/vision_info',$data);
                $this->load->view('front/templates/footer');
        
        }

        public  function testimonials()
        {
               
                $this->load->model('User_model');
                
                
                $this->load->view('front/templates/header');
		$this->load->view('front/testimonials');
                $this->load->view('front/templates/footer');
        
        }
        
        public  function sitemap()
        {
               
                  
                $this->load->view('front/templates/header');
                 $this->load->view('front/sitemap');
                $this->load->view('front/templates/footer');
        
        }
        
         public  function TrainingDelivery()
        {
               
                
               $this->load->model('User_model');
                
                $id=1;  
                $data['expertise_info']= $this->User_model->expertise_info($id);
                $this->load->view('front/templates/header');
                $this->load->view('front/TrainingDelivery',$data);
                $this->load->view('front/templates/footer');
        
        }
         public  function PerformanceImprovement()
        {
               
                
               $this->load->model('User_model');
                
                $id=2;  
                $data['expertise_info']= $this->User_model->expertise_info($id);
                $this->load->view('front/templates/header');
                $this->load->view('front/PerformanceImprovement',$data);
                $this->load->view('front/templates/footer');
        
        }
         public  function InstructionalDesign()
        {
               
                
               $this->load->model('User_model');
                
                $id=3;  
                $data['expertise_info']= $this->User_model->expertise_info($id);
                $this->load->view('front/templates/header');
                $this->load->view('front/InstructionalDesign',$data);
                $this->load->view('front/templates/footer');
        
        }
         public  function Coaching()
        {
               
                
               $this->load->model('User_model');
                
                $id=4;  
                $data['expertise_info']= $this->User_model->expertise_info($id);
                $this->load->view('front/templates/header');
                $this->load->view('front/Coaching',$data);
                $this->load->view('front/templates/footer');
        
        }
         
          public  function KnowledgeManagement()
        {
               
                
               $this->load->model('User_model');
                
                $id=5;  
                $data['expertise_info']= $this->User_model->expertise_info($id);
                $this->load->view('front/templates/header');
                $this->load->view('front/KnowledgeManagement',$data);
                $this->load->view('front/templates/footer');
        
        }
        
        
        
         
        
            
           
          }
          
          
        
        
        

?>