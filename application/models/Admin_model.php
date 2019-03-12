<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function login($email, $encrypted_pass) {

        $this->db->select('id,email,password', 'user_name');
        $this->db->from('admin_user');
        $this->db->where('email', $email);
        $this->db->where('password', $encrypted_pass);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
           
             $sql = "select * from admin_user where email='" . $email . "' and password='" . $encrypted_pass. "'";
            
            $result1 = $this->db->query($sql);
            $row = $result1->row();
            $session_user = array(
                'admin_user_id' => $row->id,
                'first_name' => $row->first_name,
                'last_name' => $row->last_name,
                'user_name' => $row->user_name,
                'admin_email' => $row->email,
                'admin_photo' => $row->photo,
                'logged_in' => true
            );
            $this->session->set_userdata($session_user);
            $sess_data = $this->session->set_userdata($session_user);
            $this->session->userdata('user_email');
            return $query->result();
            //print_r($session_user); exit;
            return true;
        } else {
            return false;
        }
    }

    public function allusers() {
        $query = $this->db->query('select * from admin_user');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_user($id) {
        $query = $this->db->query('select * from admin_user where id="' . $id . '"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_banner($id) {
        $query = $this->db->query('select * from banner where id="' . $id . '"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_request() {
        $query = $this->db->query('select * from  request');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_review() {
        $query = $this->db->query('select * from  review');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_sale() {
         
        $query = $this->db->query('select * from  payments_music  ORDER BY date DESC');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_sale_total() {
         
        $query = $this->db->query('SELECT SUM(payment_gross) FROM payments_music');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_sale_date($daterange) 
            {
            $date = explode('-', $daterange); 
             $fromdate1 = $date[0];
             $fromdate=date("Y/m/d", strtotime($fromdate1)); 
              
              $todate1 = explode(' ', $date[1]);
             $todate2 = $todate1[1];
             
             
          $todate=date("d/m/y", strtotime($todate2)); 
           
          $query = $this->db->query('select * from  payments_music where date between "' . $fromdate1 . '" and  "' . $todate2 . '" ');
           
        if ($query->num_rows() > 0) {
            return $query->result();
        }
          
        }
    
    public function get_user_list($id) {
        $query = $this->db->query('select * from user_registration where id="' . $id . '"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_news() {
        $query = $this->db->query('select * from news');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_allcategory() {
        $query = $this->db->query('select * from categories');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function user_list() {
        $query = $this->db->query('select * from user_registration');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function get_allsubcategory($user_id) {
        $query = $this->db->query('select * from prosub_categories where user_id="'.$user_id .'"');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_allproducts($user_id) {

        $query = $this->db->query('select * from products where user_id="'.$user_id .'"');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_allbrand($user_id) {

        $query = $this->db->query('select * from brands where user_id="'.$user_id .'"');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_product($id,$user_id) {

        $query = $this->db->query('select * from products where id="'.$id.'" and user_id="'.$user_id .'"');
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_category($id) {

        $query = $this->db->query('select * from categories where id="'.$id.'"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function get_brand($id) {

        $query = $this->db->query('select * from brands where id="'.$id.'"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_sub2subcategory($id,$user_id) {

        $query = $this->db->query('select * from sub2sub_categories where id="'.$id.'" and user_id="'.$user_id.'"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function get_allsub2subcategory($user_id) {

        $query = $this->db->query('select * from sub2sub_categories where user_id="'.$user_id .'"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_allcountry() {
        $query = $this->db->query('select * from  country');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_allstate() {
        $query = $this->db->query('select * from  state');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_alldistrict() {
        $query = $this->db->query('select * from  district');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function get_alltaluka() {
        $query = $this->db->query('select * from  taluka');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function update_category($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('categories', $data);    
    }
    
    public function update_brand($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('brands', $data);    
    }
    public function update_subcategory($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('prosub_categories', $data);    
    }
    public function update_sub2subcategory($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('sub2sub_categories', $data);   
    }
    public function update_product($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('products', $data);   
    }
    public function update_banner($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('banner', $data);   
    }
    public function update_user_list($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('user_registration', $data);   
    }
     public function delete_category($id) {
       $this->db->where('id',$id);
        $this->db->delete('categories');     
     }
     public function delete_brand($id) {
       $this->db->where('id',$id);
        $this->db->delete('brands');     
     }
     public function delete_banner($id) {
       $this->db->where('id',$id);
        $this->db->delete('banner');     
     }
     public function delete_subcategory($id) {
       $this->db->where('id',$id);
        $this->db->delete('prosub_categories');     
     }
      public function delete_sub2subcategory($id) {
       $this->db->where('id',$id);
        $this->db->delete('sub2sub_categories');     
     }

    public function insert_admin_user($data) {
        $this->db->insert('admin_user', $data);
    }
    
    
   public function add_banner($data) {
        $this->db->insert('banner', $data);
    }
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('admin_user', $data);
    }

    public function allExpertise() {
        $query = $this->db->query('select * from expertise');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function allprogram() {
        $query = $this->db->query('select * from program');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function allblog() {
        $query = $this->db->query('select * from blog');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function logo() {
        $query = $this->db->query('select * from logo');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function image() {
        $query = $this->db->query('select * from image');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function silder_image() {
        $query = $this->db->query('select * from silder');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function menu() {
        $query = $this->db->query('select * from menumgr');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function video() {
        $query = $this->db->query('select * from video');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
     public function allmusic() {
        $query = $this->db->query('select * from music');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function allvideo() {
        $query = $this->db->query('select * from video');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function sub_menu() {
        $query = $this->db->query('select * from menumgr where sub_menu !=0');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function sub_music() {
        $query = $this->db->query('select * from menumgr where menuSubId !=0');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function sub_video() {
        $query = $this->db->query('select * from menumgr where menuSubId !=0');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_banner() {
        $query = $this->db->query('select * from banner');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_user() {
        $query = $this->db->query('select * from user_registration');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function delete_menu($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('menumgr');
    }
    public function delete_Expertise($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('expertise');
    }
    public function delete_program($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('program');
    }
    public function delete_blog($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('blog');
    }
    public function expertise_menu($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('expertise');
    }
     public function delete_music($id) {
       
        $this->db->where('music_id',$id);
        $this->db->delete('music');
    }
    public function delete_request($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('request');
    }
    public function delete_review($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('review');
    }
    public function delete_user_list($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('user_registration');
    }
     public function delete_video($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('video');
    }
    public function delete_product($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('products');
    }
    
    public function delete_user($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('admin_user');
    }
    public function delete_logo($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('logo');
    }
    public function delete_silder($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('silder');
    }
    public function delete_image($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('image');
    }
    public function delete_news($id) {
       
        $this->db->where('id',$id);
        $this->db->delete('news');
    }

    public function addmenu($data) {
        $this->db->insert('menumgr', $data);
    }
    public function add_category($data) {
        $this->db->insert('categories', $data);
    }
    public function add_brand($data) {
        $this->db->insert('brands', $data);
    }
    public function add_subcategory($data) {
        $this->db->insert('prosub_categories',$data);
    }
    public function add_product($data) {
        $this->db->insert('products',$data);
    }
    public function add_sub2subcategory($data) {
        $this->db->insert('sub2sub_categories',$data);
    }
    
    public function select_menu($id) {
        $query = $this->db->query('select * from menumgr where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function select_Expertise($id) {
        $query = $this->db->query('select * from expertise where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_program($id) {
        $query = $this->db->query('select * from program where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function select_blog($id) {
        $query = $this->db->query('select * from blog where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_music($id) {
        $query = $this->db->query('select * from music where music_id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function select_video($id) {
        $query = $this->db->query('select * from video where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_news($id) {
        $query = $this->db->query('select * from news where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_logo($id) {
        $query = $this->db->query('select * from logo where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_silder($id) {
        $query = $this->db->query('select * from silder where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function select_image($id) {
        $query = $this->db->query('select * from image where id='.$id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     

    public function update_menu($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('menumgr', $data);
    }
    public function update_Expertise($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('expertise', $data);
    }
    
    public function update_program($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('program', $data);
    }
    
     public function update_blog($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }
    
    
    public function addmusic($data)
    {
        $this->db->insert('music', $data);
    }
    public function addvideo($data)
    {
        $this->db->insert('video', $data);
    }
     public function update_music($id, $data) {
         $this->db->where('music_id', $id);
         $this->db->update('music', $data);
    }
    
     
    
    public function email_exist($email) {
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function user_profile($user_id) {
        $query = $this->db->query('select * from admin_user where id='.$user_id.'');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	function check_password($user_id,$encrypted_pass) {
        
        $this->db->select('id');
        $this->db->from('admin_user');
        $this->db->where('id',$user_id);
        $this->db->where('password',$encrypted_pass);
        $this->db->limit(1);
        $query = $this->db->get();
         if ($query->num_rows() == 1) {
            
            return true;
        } else {
             return false;
           }
        }
		public function update_userdata($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('admin_user', $data);

}
public function update_logo($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('logo', $data);

}
public function update_silder($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('silder', $data);

}
 
public function update_image($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('image', $data);

}
public function update_news($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('news', $data);

}
public function update_video($id, $data) {
         $this->db->where('id', $id);
        $this->db->update('video', $data);

}
public function all_music_list() {
         $user_id=$this->session->userdata('admin_id');
         $query = $this->db->query('select * from music');
           if ($query->num_rows() > 0) {
             return $query->result();
             
        }
        
    }
    public function all_request() {
         $user_id=$this->session->userdata('admin_id');
         $query = $this->db->query('select * from request');
           if ($query->num_rows() > 0) {
             return $query->result();
             
        }
        
    }
    public function all_user_list() {
         $user_id=$this->session->userdata('admin_id');
         $query = $this->db->query('select * from user_registration');
           if ($query->num_rows() > 0) {
             return $query->result();
             
        }
        
    }
    public function all_review() {
         $user_id=$this->session->userdata('admin_id');
         $query = $this->db->query('select * from review');
           if ($query->num_rows() > 0) {
             return $query->result();
             
        }
        
    }
    public function all_register_users() {
        $query = $this->db->query('select * from user_registration');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_music_user() {
        $query = $this->db->query('select * from music where ve_status=1');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_music() {
        $query = $this->db->query('select * from music where ve_status=1');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function sub_admin() {
        $query = $this->db->query('select * from admin_user');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     public function song_request() {
        $query = $this->db->query('select * from request');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function insert_coupon($data) {
        $this->db->insert('coupon', $data);
    }
    
    public function insert_menu($data) {
        $this->db->insert('menumgr', $data);
    }
    public function insert_expertise($data) {
        $this->db->insert('expertise', $data);
    }
    
    public function insert_program($data) {
        $this->db->insert('program', $data);
    }
    
    public function insert_blog($data) {
        $this->db->insert('blog', $data);
    }
    public function insert_silder($data) {
        $this->db->insert('silder', $data);
    }
     
    public function insert_image($data) {
        $this->db->insert('image', $data);
    }
    public function insert_news($data) {
        $this->db->insert('news', $data);
    }
     public function insert_video($data) {
        $this->db->insert('video', $data);
    }
    public function update_coupon($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('coupon', $data);   
    }
    public function delete_coupon($id) {
       $this->db->where('id',$id);
        $this->db->delete('coupon');     
     }
     
     public function allcoupon() {
        $query = $this->db->query('select * from coupon');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function couponn_details($id) {
        $query = $this->db->query('select * from coupon where id="'.$id.'"');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function user_details($id) {
        
         $query = $this->db->query('select * from user_registration where id="'.$id.'"');
           if ($query->num_rows() > 0) {
             return $query->result();
             
        }
        
    }
    public function allmenu() {
        $query = $this->db->query('select * from menumgr');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}


?>