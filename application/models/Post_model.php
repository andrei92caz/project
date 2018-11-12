<?php 
class Post_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){

        if($limit){
            $this->db->limit($limit,$offset);

        }

        if($slug === FALSE){
            
            $this->db->order_by('posts_db.id','DESC');
            $this->db->join('categories','categories.id = posts_db.category_id','left');
            $query= $this->db->get('posts_db');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts_db',array('slug'=> $slug));
        return $query->row_array();
    }
    public function create_post($post_image){
        //take url title and turn into a slug
        $slug = url_title($this->input->post('title'));
        
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'category_id'=>$this->input->post('category_id'),
            'user_id'=>$this->session->userdata('user_id'),
            'post_image'=>$post_image
        );
        return $this->db->insert('posts_db',$data);
    }
    public function delete_post($id){
        $this->db->where('ID',$id);
        $this->db->delete('posts_db');

    }
    public function update_post(){

        $slug = url_title($this->input->post('title'));
        
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'category_id'=>$this->input->post('category_id')
        );
        $this->db->where('ID',$this->input->post('ID'));
        return $this->db->update('posts_db',$data);
    }
    public function get_categories(){
        $this->db->order_by('name');
        $query=$this->db->get('categories');
        return $query->result_array(); 
        
    }
    public function get_posts_by_category($category_id){
        $this->db->order_by('posts_db.id','DESC');
        $this->db->join('categories','categories.id = posts_db.category_id','left');
            $query= $this->db->get_where('posts_db',array('category_id' => $category_id));
            return $query->result_array();


    }
   
}