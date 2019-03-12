<?php
class User_model extends CI_Model {
 public function all_banner() {

        $query = $this->db->query('SELECT * FROM silder where status=1');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function all_Expertise() {

        $query = $this->db->query('SELECT * FROM expertise where status=1');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function all_video() {

        $query = $this->db->query('SELECT * FROM video where status=1 ORDER BY name DESC ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_image_desc() {

        $query = $this->db->query('SELECT * FROM image where status=1 and   Position=0 ORDER BY name DESC ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function all_image_asc() {

        $query = $this->db->query('SELECT * FROM image where status=1 and   Position=0  ORDER BY name asc ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
     
    
    public function methodlogy() {
        $name="The Approach";
        $query = $this->db->query('SELECT * FROM menumgr where menuName="'.$name.'"   ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function vision() {
        $id=5;
        $query = $this->db->query('SELECT * FROM menumgr where sub_menu="'.$id.'"   ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function about() {
        $name="About Us ";
        $query = $this->db->query('SELECT * FROM menumgr where menuName="'.$name.'"    ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function program() {
        $name="Training Programs ";
        $query = $this->db->query('SELECT * FROM menumgr where menuName="'.$name.'"    ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function program_list() {
        
        $query = $this->db->query('SELECT * FROM program where status=1  ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function all_image() {
        
        $query = $this->db->query('SELECT * FROM image where status=1 and Position=1  ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function expertise() {
        $name="The Skill";
        $query = $this->db->query('SELECT * FROM menumgr where menuName="'.$name.'" ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function Blog() {
       
        $query = $this->db->query('SELECT * FROM blog ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    
   /* public function get_slug($slug)
    {
        $query = $this->db->get_where('blog', array('slug' => $slug));

        if($query->num_rows() > 0)
            return $query->row();
        return false;
    }*/
    
    /*
    
    public function Blog($id = 0, $slug = FALSE)
    { 
    if ($id === 0 && $slug === FALSE)
    {
    $query = $this->db->get('blog');
    return $query->result_array();
    }
    
    $query = $this->db->get_where('blog', array('id' => $id, 'slug' => $slug));
    return $query->row_array();
    }
    
    */
    
     public function expertise_list() {
         
        $query = $this->db->query('SELECT * FROM expertise ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function expertise_info($id) {
         
        $query = $this->db->query('SELECT * FROM expertise where id="'.$id.'" ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    public function vision_info($id) {
         
        $query = $this->db->query('SELECT * FROM menumgr where id="'.$id.'" ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
     
    
    public function blog_info($id) {
         
        $query = $this->db->query('SELECT * FROM blog where id="'.$id.'" ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function program_info($id) {
         
        $query = $this->db->query('SELECT * FROM program where id="'.$id.'" ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
     public function blog_info_desc() {
         
        $query = $this->db->query('SELECT * FROM blog ORDER BY title DESC  ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function meta_details($menuName) {
         
         //$id='5';
        if($menuName){
            $query = $this->db->query('SELECT * FROM menumgr  where menuName="'.$menuName.'" ');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }
    }
    

}

?>

