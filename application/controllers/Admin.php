<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {



        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        } else {

            $this->load->view('Admin/template/header');
            $this->load->view('Admin/template/sidebar');
            $this->load->view('Admin/index');
            $this->load->view('Admin/template/footer');
        }
    }

    public function login() {
        if (!($this->session->userdata('admin_email'))) {
            if (isset($_POST['submit'])) {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database');
                if ($this->form_validation->run() == FALSE) {

                    redirect('admin/login?msg=1');
                } else {

                    redirect('admin/index');
                }
            } else {
                $this->load->view('Admin/users/login');
            }
        } else {

            redirect('admin/index');
        }
    }

    function check_database($email, $password) {
        //Field validation succeeded.  Validate against database
        //$this->load->library('encrypt');
		$this->load->library('encryption');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $encrypted_pass = md5($password);
        $this->load->model('Admin_model');
        $result = $this->Admin_model->login($email, $encrypted_pass);


        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'email' => $row->email,
                    'password' => $row->password
                );
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid Username or Password</div>');
            return false;
        }
    }

    public function logout() {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        } else {
            $this->session->unset_userdata('admin_user_id');
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('last_name');
            $this->session->unset_userdata('user_name');
            $this->session->unset_userdata('admin_email');
            $this->session->unset_userdata('logged_in');
            redirect('admin/login');
        }
    }

    public function admin_user() {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        } else {


            $this->load->Model('Admin_model');
            $data['users_data'] = $this->Admin_model->allusers();
            $this->load->view('Admin/template/header');
            $this->load->view('Admin/template/sidebar');
            $this->load->view('Admin/user', $data);
            $this->load->view('Admin/template/footer');
        }
    }

    public function admin_add_user() {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        } elseif (isset($_POST['submit'])) {

            if ($_FILES['file']['name'] != "") {
                //load library
                $this->load->library('upload');
                //Set the config
                $config['upload_path'] = 'images/admin/profile'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                //$config['max_size'] = '1000';
                //$config['max_width'] = '1024';
                //$config['max_height'] = '768';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
                //Initialize
                $this->upload->initialize($config);
                //Upload file
                if (!$this->upload->do_upload("file")) {
                    //echo the errors
                    echo $this->upload->display_errors();
                }
                //If the upload success
                  $photo = $this->upload->file_name;
                

                //Save the file name into the db
            } else {
                $photo = NULL;
            }

            date_default_timezone_set('Asia/Kolkata');
            $this->load->library('encrypt');
            $this->load->Model('Admin_model');
            $encrypted_pass = md5($this->input->post('password'));


            $data = array('first_name' => $this->input->post('name'), 'last_name' => $this->input->post('lname'), 'user_name' => $this->input->post('user_name'), 'email' => $this->input->post('email'), 'dob' => $this->input->post('dob'), 'gender' => $this->input->post('gender1'), 'number' => $this->input->post('number'), 'password' => $encrypted_pass, 'address' => $this->input->post('address'), 'role' => $this->input->post('role'), 'photo' => $photo, 'regi_date' => date('Y/m/d'), 'status' => 1);
 
            $this->Admin_model->insert_admin_user($data);


            redirect('Admin/admin_user');
        } elseif (isset($_GET['delete'])) {
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->delete_user($id);
            redirect('Admin/admin_user');
        } elseif (isset($_GET['status'])) {
            $id = $_GET['id'];
            $status = $_GET['status'];
            $data = array('status' => $status);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_user($id, $data);
            redirect('Admin/admin_user');
        } else {


            $this->load->Model('Admin_model');

            $this->load->view('Admin/template/header');
            $this->load->view('Admin/template/sidebar');
            $this->load->view('Admin/add_user');
            $this->load->view('Admin/template/footer');
        }
    }

    public function user_list() {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        } else {


            if (isset($_GET['edit'])) {

                if (isset($_POST['edit_banner'])) {


                    $id = $_GET['id'];
                    $user_id = $this->session->userdata('admin_user_id');
                    $data = array('point' => $this->input->post('point'));
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_user_list($id, $data);
                    redirect('admin/user_list');
                } else {
                    $id = $_GET['id'];
                    $this->load->Model('Admin_model');
                    $user_id = $this->session->userdata('admin_user_id');
                    $data['banner'] = $this->Admin_model->get_user_list($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/user_list', $data);
                    $this->load->view('Admin/template/footer');
                }
            } elseif (isset($_GET['delete'])) {
                $id = $_GET['id'];
                $this->load->Model('Admin_model');
                $this->Admin_model->delete_user_list($id);
                redirect('admin/user_list');
            } elseif (isset($_GET['status'])) {
                $id = $_GET['id'];
                $status = $_GET['status'];
                $data = array('status' => $status);
                $this->load->Model('Admin_model');
                $this->Admin_model->update_user_list($id, $data);
                redirect('admin/user_list');
            } elseif (isset($_GET['verify_status'])) {
                $id = $_GET['id'];
                $updata = array('status' => 1, 'verify_status' => 1);
                $this->load->Model('Admin_model');
                $data['register_user'] = $this->Admin_model->user_details($id);
                foreach ($data['register_user'] as $user_data)
                //Mail Sent User
                    $email = $user_data->email;
                date_default_timezone_set('GMT');
                $this->load->library('email');
                //$this->email->initialize($config);
                $this->email->from(' musiqkaraokes@gmail.com', $user_data->username);
                $message_body = 'Dear' . $user_data->username . '' . "\n";
                $message_body .='Confirm Your Account Please Click On Link to Countinue Your Account.' . "\n";
                $message_body .='<button><a href="http://www.musiqkaraokes.in/login">Continue Account</a></button>';
                $email = $user_data->email;
                $this->email->to($email);
                $this->email->message($message_body);
                $suc = $this->email->send();


                $this->Admin_model->update_user_list($id, $updata);
                redirect('admin/user_list');
            } else {

                $this->load->Model('Admin_model');
                $data['all_user'] = $this->Admin_model->all_user();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/user_list', $data);
                $this->load->view('Admin/template/footer');
            }
        }
    }

    public function forgotpassword() 
            {
                if (isset($_POST['forgotpassword'])) 
                    {
                    

                $this->load->library('form_validation');
                $this->load->helper('form');
                $this->form_validation->set_rules('email', 'Email', 'callback_forgetemail_check');
                if ($this->form_validation->run() == FALSE)
                    {
                         redirect('Admin/forgotpassword?msg=1');
                     }
         
           
                 
                }
            $this->load->view('Admin/users/forgot_password');
            }
             
            
         
         
     

    function forgetemail_check($email) {
        $this->load->Model('Admin_model');
        $data['user_data'] = $this->Admin_model->email_exist($email);
        $result = $this->Admin_model->email_exist($email);

        if (!($result)) {
            return false;
        } else {
            foreach ($data['user_data'] as $user_data)
                $user_id = $user_data->id;

            /* foreach($data['user_data'] as $user_data)

              $email=$this->input->post('email');
              date_default_timezone_set('GMT');
              $this->load->library('email');
              //$this->email->initialize($config);
              $this->email->from('info@wabodryms.com',$user_data->name);
              $message_body = 'Dear'.$user_data->name.''."\n";
              $message_body .='We received a request to reset the password for your account.'."\n";
              $message_body .='If you requested a reset for'.$user_data->email.', click the button below. If you didnt make this request,please ignore this email'."\n";
              $message_body .='<button><a href="https://wabodryms.com/demo/admin.sellerking.in/updatenewpassword?id='.$user_data->id.'">Reset Password</a></button>';
              $email = $this->input->post('email');
              $this->email->to($email);
              $this->email->message($message_body);
              $suc=$this->email->send();
              redirect('reset_email_sent?email='.$email.''); */

            redirect('Admin/newpassword?id=' . $user_id . '');
        }
    }

    public function newpassword() {

        if (isset($_POST['newpasword'])) {
            
            $password = $_POST['password'];
             $id = $_POST['user_id'];
             $encrypted_pass = md5($this->input->post('password')); 
            $data = array('password' => $encrypted_pass);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_user($id, $data);
            redirect('Admin/login');
        } else {
            // $this->load->view('front/templates/header');
            $this->load->view('Admin/users/newpassword');
            // $this->load->view('front/templates/footer'); 
        }
    }

    public function profile() {


        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
             
            $this->load->Model('Admin_model');
            $data = array('first_name' => $this->input->post('name'), 'last_name' => $this->input->post('lname'), 'user_name' => $this->input->post('user_name'), 'email' => $this->input->post('email'), 'dob' => $this->input->post('dob'), 'gender' => $this->input->post('gender1'), 'number' => $this->input->post('number'), 'address' => $this->input->post('address'));
         $id = $this->session->userdata('admin_user_id');
         $this->Admin_model->update_user($id, $data);
         redirect('Admin/profile');
         
            
        }
        elseif(isset($_POST['submit_image']))
        {
           
             if ($_FILES['file']['name'] != "") {
                //load library
                $this->load->library('upload');
                //Set the config
                $config['upload_path'] = 'images/admin/profile'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                //$config['max_size'] = '1000';
                //$config['max_width'] = '1024';
                //$config['max_height'] = '768';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
                //Initialize
                $this->upload->initialize($config);
                //Upload file
                if (!$this->upload->do_upload("file")) {
                    //echo the errors
                    echo $this->upload->display_errors();
                }
                //If the upload success
                  $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_file');
                  unlink('images/admin/profile/'.$old_photo.'');
                  
                

                //Save the file name into the db
            } 
            else {
                $photo = $this->input->post('old_file');
                 
            }
            $id = $this->session->userdata('admin_user_id');
            $this->load->Model('Admin_model');
            $data=array('photo'=>$photo);
                   $this->Admin_model->update_user($id,$data);
                   redirect('Admin/profile');
         
            
        }
        
        else
        {


        $user_id = $this->session->userdata('admin_user_id');

        $this->load->Model('Admin_model');

        $data['user_profile'] = $this->Admin_model->user_profile($user_id);
        $this->load->view('Admin/template/header');
       $this->load->view('Admin/template/sidebar');
        $this->load->view('Admin/profile', $data);
        $this->load->view('Admin/template/footer');
        }
    }

    public function change_password() {
        if (!($this->session->userdata('admin_email'))) {
            redirect('Admin/login');
        } else {
            if (isset($_POST['submit_password'])) {
                 
                $this->load->library('form_validation');
                $this->form_validation->set_rules('new_password', 'New Password', 'trim|callback_old_password');
                if ($this->form_validation->run() == FALSE) {
                    redirect('Admin/profile?msg=1');
                } else {
                    $user_id = $this->session->userdata('admin_user_id');
                     $encrypted_pass = md5($this->input->post('lname'));
                    $data = array('password' => $encrypted_pass);
                    $this->load->model('Admin_model');
                    $this->Admin_model->update_userdata($user_id, $data);

                    $this->session->unset_userdata('admin_user_id');
                    $this->session->unset_userdata('first_name');
                    $this->session->unset_userdata('last_name');
                    $this->session->unset_userdata('user_name');
                    $this->session->unset_userdata('admin_email');
                    $this->session->unset_userdata('logged_in');
                    redirect('Admin/login');
                }
            } else {
                $user_id = $this->session->userdata('admin_user_id');

                $this->load->view('Admin/template/header');
                $this->load->view('Admin/change_password');
                $this->load->view('Admin/template/footer');
            }
        }
    }

    function old_password($old_password) {

        $user_id = $this->session->userdata('admin_user_id');
          $encrypted_pass = md5($this->input->post('name'));
        $this->load->model('Admin_model');
        $result = $this->Admin_model->check_password($user_id, $encrypted_pass);


        if ($result) {
            return true;
        } else {

            return false;
        }
    }

 
    
    public function lock()
    {
       
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
    else {
           
            if(isset($_POST['submit']))
            {
                
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database');
                if ($this->form_validation->run() == FALSE) {

                    redirect('admin/lock?msg=1');
                } else {

                    redirect('admin/index');
                }
            }  
             
           $user_id = $this->session->userdata('admin_user_id');
           
           
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('last_name');
            $this->session->unset_userdata('user_name');
             
            $this->session->unset_userdata('logged_in');

            $this->load->Model('Admin_model');

             $data['user_profile'] = $this->Admin_model->user_profile($user_id);
             $this->load->view('Admin/users/lock',$data);
     
     
        }
           
             
    }
    
    public function settings()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        else {
                 $this->load->Model('Admin_model');

                 $data['logo'] = $this->Admin_model->logo();
            
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/settings',$data);
                $this->load->view('Admin/template/footer');
     
            }
    }
    
    public function  logo()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit_logo']))
        {
            if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/logo'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            }
            date_default_timezone_set('Asia/Kolkata');
            
            $this->load->Model('Admin_model');
           


            $data = array('image' => $photo, 'date' => date('Y/m/d'), 'status' => 1);
 
            $this->Admin_model->insert_logo($data);


            redirect('Admin/settings');
            
        }
        elseif (isset($_GET['delete'])) {
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $data['logo']=$this->Admin_model->select_logo($id);
            if($data['logo'])
            {
               foreach($data['logo'] as $logo)
                             $image=$logo->image;
                               
                             if(($image) != '')
                             {
                                 unlink('images/admin/logo/'.$image.'');  
                             }
                   
            }
            $this->Admin_model->delete_logo($id);
             
            redirect('Admin/settings');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    
                    $data['logo']=$this->Admin_model->select_logo($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/logo_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_logo($id,$data);
                    redirect('Admin/settings');
                }
         
        else {
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/logo');
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function edit_logo()
    {
         if(isset($_POST['edit_logo']))
         {
               if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/logo'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/logo/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
            
             $id=$this->input->post('id');
            
            $data = array('image' => $photo);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_logo($id,$data);


            redirect('Admin/settings');  
         }
    }
    public function  Image()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
             
            if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/image'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            }
            date_default_timezone_set('Asia/Kolkata');
            
            $this->load->Model('Admin_model');
            
            $data = array('name' => $this->input->post('name'),'Position' => $this->input->post('position'),'image_desc' => $this->input->post('editor'),'image' => $photo, 'date' => date('Y/m/d'), 'status' => 1);
             
  
            $this->Admin_model->insert_image($data);


            redirect('Admin/Image');
            
        }
        elseif (isset($_GET['delete'])) {
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $data['image']=$this->Admin_model->select_image($id);
            if($data['imge'])
            {
               foreach($data['image'] as $image)
                             $image=$image->image;
                               
                             if(($image) != '')
                             {
                                 unlink('images/admin/image/'.$image.'');  
                             }
                   
            }
            $this->Admin_model->delete_image($id);
             
            redirect('Admin/image');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['submit_image']))
            {
                 
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    
                    $data['image']=$this->Admin_model->select_image($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/image_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                     $id=$_GET['id'];
                    $status=$_GET['status']; 
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_image($id,$data);
                    redirect('Admin/Image');
                }
         
        else {
                 $this->load->Model('Admin_model');

                 $data['image'] = $this->Admin_model->image();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/image',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    public function  image_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/image_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    public function  video_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/video_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function edit_image()
    {
         if(isset($_POST['submit_image']))
         {
             
               if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/image'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/image/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
            
             $id=$this->input->post('id');
            
             
             $data = array('name' => $this->input->post('name'),'Position' => $this->input->post('position'),'image_desc' => $this->input->post('editor'),'image' => $photo);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_image($id,$data);


            redirect('Admin/Image');  
         }
    }
    public function edit_video()
    {
         if(isset($_POST['submit_image']))
         {
             
               if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/video'; //Use relative or absolute path
                $config['allowed_types'] = '*';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/video/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
            
             $id=$this->input->post('id');
            
             
             $data = array('name' => $this->input->post('name'),'video_desc' => $this->input->post('editor'),'video' => $photo);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_video($id,$data);


            redirect('Admin/video');  
         }
    }
    public function  video()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/video'; //Use relative or absolute path
                $config['allowed_types'] = '*';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            }
            date_default_timezone_set('Asia/Kolkata');
            
            $this->load->Model('Admin_model');
           


             $data = array('name' => $this->input->post('name'),'video_desc' => $this->input->post('editor'),'video' => $photo, 'date' => date('Y/m/d'), 'status' => 1);
             
  
            $this->Admin_model->insert_video($data);


            redirect('Admin/video');
            
        }
        elseif (isset($_GET['delete'])) {
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $data['logo']=$this->Admin_model->select_video($id);
            if($data['logo'])
            {
               foreach($data['logo'] as $logo)
                             $image=$logo->video;
                               
                             if(($image) != '')
                             {
                                 unlink('images/admin/video/'.$image.'');  
                             }
                   
            }
            $this->Admin_model->delete_video($id);
             
            redirect('Admin/video');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    
                    $data['video']=$this->Admin_model->select_video($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/video_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_video($id,$data);
                    redirect('Admin/video');
                }
         
        else {
                 $this->load->Model('Admin_model');

                 $data['video'] = $this->Admin_model->video();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/video',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  silder()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/slider'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            }
            date_default_timezone_set('Asia/Kolkata');
            
            $this->load->Model('Admin_model');
           


            $data = array('name' => $this->input->post('name'),'url' => $this->input->post('url'),'image_desc' => $this->input->post('editor'),'image' => $photo, 'date' => date('Y/m/d'), 'status' => 1);
             
 
            $this->Admin_model->insert_silder($data);


            redirect('Admin/silder');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $data['logo']=$this->Admin_model->select_silder($id);
            if($data['logo'])
            {
               foreach($data['logo'] as $logo)
                             $image=$logo->image;
                               
                             if(($image) != '')
                             {
                                 unlink('images/admin/silder/'.$image.'');  
                             }
                   
            }
            $this->Admin_model->delete_silder($id);
             
            redirect('Admin/silder');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    
                    $data['image']=$this->Admin_model->select_silder($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/silder_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_silder($id,$data);
                    redirect('Admin/silder');
                }
         
        else {
                     $this->load->Model('Admin_model');
                    
                    $data['logo']=$this->Admin_model->silder_image();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/silder',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  silder_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/silder_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function edit_silder()
    {
         if(isset($_POST['submit_image']))
         {
             
               if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/slider'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
               $photo = $this->upload->file_name;  
                 $old_photo=$this->input->post('old_image');
                  unlink('images/admin/slider/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
            
             $id=$this->input->post('id');
            
             
$data = array('name' => $this->input->post('name'),'image_desc' => $this->input->post('editor'),'image'=>$photo);
              
            $this->load->Model('Admin_model');
            $this->Admin_model->update_silder($id,$data);


            redirect('Admin/silder');  
         }
    }
    
    public function  menu()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            
           if ($_FILES['file1']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/menu'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file1")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            } 
             
             
            
            $this->load->Model('Admin_model');
             
   $data = array('menuName' => $this->input->post('name'),'menuPosition' => $this->input->post('position'),'menuDesc' => $this->input->post('editor'),'desc1' => $this->input->post('editor_1'),'desc2' => $this->input->post('editor_2'),'sub_menu' => $this->input->post('menu_level'),'menuUrl' => $this->input->post('url'),'menuType' => $this->input->post('type'),'menuTargetWindow' => $this->input->post('role'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
   
   
 
            $this->Admin_model->insert_menu($data);


            redirect('Admin/menu');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
             
            $this->Admin_model->delete_menu($id);
             
            redirect('Admin/menu');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    $this->load->Model('Admin_model');
                  
                    $data['all_menu']=$this->Admin_model-> allmenu();
                    $data['menu']=$this->Admin_model->select_menu($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/menu_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_menu($id,$data);
                    redirect('Admin/menu');
                }
         
        else {
                 $this->load->Model('Admin_model');
                    
                $data['menu']=$this->Admin_model->menu();   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/menu',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    public function  menu_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  $this->load->Model('Admin_model');
                  
                  $data['all_menu']=$this->Admin_model-> allmenu();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/menu_add',$data);
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function menu_edit()
    {
         if(isset($_POST['submit']))
         {
              if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/menu'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/menu/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
                
            
             $id=$this->input->post('id');
            
            $data = array('menuName' => $this->input->post('name'),'menuPosition' => $this->input->post('position'),'menuDesc' => $this->input->post('editor'),'desc1' => $this->input->post('editor-1'),'desc2' => $this->input->post('editor-2'),'sub_menu' => $this->input->post('menu_level'),'menuUrl' => $this->input->post('url'),'menuType' => $this->input->post('type'),'menuTargetWindow' => $this->input->post('role'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
            
             
            $this->load->Model('Admin_model');
            $this->Admin_model->update_menu($id,$data);


            redirect('Admin/menu');  
         }
    }
    
    public function  category()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
             
             
            
            $this->load->Model('Admin_model');
             
   $data = array('category_name' => $this->input->post('name'),'description' => $this->input->post('editor'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'status' => 1);
    
   
            $this->Admin_model->add_category($data);


            redirect('Admin/category');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
             
            $this->Admin_model->delete_category($id);
             
            redirect('Admin/category');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    $this->load->Model('Admin_model');
                  
                    
                    $data['menu']=$this->Admin_model->get_category($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/category_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_category($id,$data);
                    redirect('Admin/category');
                }
         
        else {
                 $this->load->Model('Admin_model');
                    
                $data['menu']=$this->Admin_model->get_allcategory();   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/category',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  category_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  $this->load->Model('Admin_model');
                  
                  $data['all_menu']=$this->Admin_model-> allmenu();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/category_add',$data);
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function category_edit()
    {
         if(isset($_POST['submit']))
         {
             
                
            
             $id=$this->input->post('id');
            
            $data = array('category_name' => $this->input->post('name'),'description' => $this->input->post('editor'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'status' => 1);
            
             
            $this->load->Model('Admin_model');
            $this->Admin_model->update_category($id,$data);


            redirect('Admin/category');  
         }
    }
    
    
   
   public function  news()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
             
            if ($_FILES['file']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/news'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file")) {
                    echo $this->upload->display_errors();
                }
                echo $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            }
            date_default_timezone_set('Asia/Kolkata');
            
            $this->load->Model('Admin_model');
            $data = array('name' => $this->input->post('name'),'description' => $this->input->post('editor'),'image'=>$photo, 'date' => date('Y/m/d'), 'status' => 1);
            $this->Admin_model->insert_news($data);
            redirect('Admin/news');
            
        }
        elseif (isset($_GET['delete'])) {
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
            $data['image']=$this->Admin_model->select_news($id);
            if($data['imge'])
            {
               foreach($data['image'] as $image)
                             $image=$image->image;
                               
                             if(($image) != '')
                             {
                                 unlink('images/admin/news/'.$image.'');  
                             }
                   
            }
            $this->Admin_model->delete_image($id);
             
            redirect('Admin/news');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['submit_image']))
            {
                 
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    
                    $data['news']=$this->Admin_model->select_news($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/news_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                     $id=$_GET['id'];
                    $status=$_GET['status']; 
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_news($id,$data);
                    redirect('Admin/news');
                }
         
        else {
                 $this->load->Model('Admin_model');

                 $data['image'] = $this->Admin_model->get_news();
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/news',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  news_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/news_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function edit_news()
    {
         if(isset($_POST['submit_image']))
         {
             
               if ($_FILES['file1']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/news'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file1")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/news/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
            
             $id=$this->input->post('id');
            
             
             $data = array('name' => $this->input->post('name'),'description' => $this->input->post('editor'),'image' => $photo);
            $this->load->Model('Admin_model');
            $this->Admin_model->update_news($id,$data);


            redirect('Admin/news');  
         }
    }
    
    
    public function  Expertise()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            
           if ($_FILES['file1']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/Expertise'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file1")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            } 
            
            if ($_FILES['image']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/Expertise'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("image")) {
                    echo $this->upload->display_errors();
                }
                 $photo_image = $this->upload->file_name;
            } else {
                $photo_image = NULL;
            } 
             
             
            
            $this->load->Model('Admin_model');
             
   $data = array('menuName' => $this->input->post('name'),'menuDesc' => $this->input->post('editor'),'menuUrl' => $this->input->post('url'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'menuTargetWindow' => $this->input->post('title_name'),'image'=>$photo,'image_2'=>$photo_image,'status' => 1);
   
 
            $this->Admin_model->insert_expertise($data);


            redirect('Admin/Expertise');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
             
            $this->Admin_model->delete_Expertise($id);
             
            redirect('Admin/Expertise');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    $this->load->Model('Admin_model');
                  
                     
                    $data['menu']=$this->Admin_model->select_Expertise($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/Expertise_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_Expertise($id,$data);
                    redirect('Admin/Expertise');
                }
         
        else {
                 $this->load->Model('Admin_model');
                    
                $data['menu']=$this->Admin_model->allExpertise();   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/Expertise',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  Expertise_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  $this->load->Model('Admin_model');
                  
                   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/Expertise_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function Expertise_edit()
    {
         if(isset($_POST['submit']))
         {
              if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/Expertise'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/Expertise/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
              
            
             if ($_FILES['image']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/Expertise'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("image")) {
                    echo $this->upload->display_errors();
                }
                 $photo_image = $this->upload->file_name;
                  $old_photo=$this->input->post('image_old');
                  unlink('images/admin/Expertise/'.$old_photo.'');
            } else {
                $photo_image = $this->input->post('image_old');
            }
            
             $id=$this->input->post('id');
            
            $data = array('menuName' => $this->input->post('name'),'menuDesc' => $this->input->post('editor'),'menuUrl' => $this->input->post('url'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'image_2'=>$photo_image,'menuTargetWindow' => $this->input->post('title_name'),'status' => 1);
            
             
            $this->load->Model('Admin_model');
            $this->Admin_model->update_Expertise($id,$data);


            redirect('Admin/Expertise');  
         }
    }
    
    
    
    public function  program()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            
           if ($_FILES['file1']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/program'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file1")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = NULL;
            } 
             
             
            
            $this->load->Model('Admin_model');
             
   $data = array('menuName' => $this->input->post('name'),'menuDesc' => $this->input->post('editor'),'menuUrl' => $this->input->post('url'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
   
 
            $this->Admin_model->insert_program($data);


            redirect('Admin/program');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
             
            $this->Admin_model->delete_program($id);
             
            redirect('Admin/program');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    $this->load->Model('Admin_model');
                  
                     
                    $data['menu']=$this->Admin_model->select_program($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/program_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_program($id,$data);
                    redirect('Admin/program');
                }
         
        else {
                 $this->load->Model('Admin_model');
                    
                $data['menu']=$this->Admin_model->allprogram();   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/program',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  program_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  $this->load->Model('Admin_model');
                  
                   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/program_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function program_edit()
    {
         if(isset($_POST['submit']))
         {
              if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/program'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/program/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
                
            
             $id=$this->input->post('id');
            
            $data = array('menuName' => $this->input->post('name'),'menuDesc' => $this->input->post('editor'),'menuUrl' => $this->input->post('url'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
            
             
            $this->load->Model('Admin_model');
            $this->Admin_model->update_program($id,$data);


            redirect('Admin/program');  
         }
    }
    
    
     public function  blog()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
        elseif(isset($_POST['submit']))
        {
            
           if ($_FILES['file1']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/blog'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file1")) {
                    echo $this->upload->display_errors();
                }
                 $photo = $this->upload->file_name;
            } else {
                $photo = 1;
            } 
             
             
            
            $this->load->Model('Admin_model');
             
   $data = array('name' => $this->input->post('name'),'title' => $this->input->post('title_demo'),'menuDesc' => $this->input->post('editor'),'blog_desc' => $this->input->post('editor-1'),'date' => $this->input->post('date'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
   
    
   
 
            $this->Admin_model->insert_blog($data);


            redirect('Admin/blog');
            
        }
        elseif (isset($_GET['delete'])) {
             
            $id = $_GET['id'];
            $this->load->Model('Admin_model');
             
            $this->Admin_model->delete_blog($id);
             
            redirect('Admin/blog');
        }
        elseif(isset($_GET['edit']))
        {
            if(isset($_POST['edit_logo']))
            {
                 
            }
            else
            {
                    $id=$_GET['id'];
                    $this->load->Model('Admin_model');
                    $this->load->Model('Admin_model');
                  
                     
                    $data['menu']=$this->Admin_model->select_blog($id);
                    $this->load->view('Admin/template/header');
                    $this->load->view('Admin/template/sidebar');
		    $this->load->view('Admin/blog_edit',$data);
                    $this->load->view('Admin/template/footer');
     
            }
            
        
        }
        elseif(isset($_GET['status']))
                {
                    $id=$_GET['id'];
                    $status=$_GET['status'];
                    $data=array('status' =>$status);
                    $this->load->Model('Admin_model');
                    $this->Admin_model->update_blog($id,$data);
                    redirect('Admin/blog');
                }
         
        else {
                 $this->load->Model('Admin_model');
                    
                $data['blog']=$this->Admin_model->allblog();   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/blog',$data);
                $this->load->view('Admin/template/footer');
     
            }
        
    }
    
    public function  blog_add()
    {
        if (!($this->session->userdata('admin_email'))) {
            redirect('admin/login');
        }
         elseif(isset($_POST['submit']))
         {
            
             
         }
        else
            {
                  $this->load->Model('Admin_model');
                  
                   
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/template/sidebar');
                $this->load->view('Admin/blog_add');
                $this->load->view('Admin/template/footer');
            
        }
    }
    
    public function blog_edit()
    {
         if(isset($_POST['submit']))
         {
              if ($_FILES['file_name']['name'] != "") {
                 
                $this->load->library('upload');
                $config['upload_path'] = 'images/admin/blog'; //Use relative or absolute path
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("file_name")) {
                    echo $this->upload->display_errors();
                }
                  $photo = $this->upload->file_name;
                  $old_photo=$this->input->post('old_image');
                  unlink('images/admin/program/'.$old_photo.'');
            } else {
                $photo = $this->input->post('old_image');
            }
                
            
             $id=$this->input->post('id');
            
            $data = array('name' => $this->input->post('name'),'title' => $this->input->post('title_demo'),'menuDesc' => $this->input->post('editor'),'blog_desc' => $this->input->post('editor-1'),'date' => $this->input->post('date'),'metaTitle' => $this->input->post('title'),'metaDescription' => $this->input->post('menu_desc'),'metaKeywords' => $this->input->post('keyword'),'image'=>$photo,'status' => 1);
            
             
            $this->load->Model('Admin_model');
            $this->Admin_model->update_blog($id,$data);


            redirect('Admin/blog');  
         }
    }
    
    

}
