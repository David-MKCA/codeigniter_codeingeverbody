<?php
  class Topic_model extends CI_Model {
    function __construct(){
      parent::__construct();
    }

    public function gets(){
      return $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($topic_id){
      $this->db->select('id');
      $this->db->select('title');
      $this->db->select('description');
      $this->db->select('UNIX_TIMESTAMP(created) AS created');
      return $this->db->get_where('topic', array('id'=>$topic_id))->row(); // ACTIVE RECORD
      //return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);
    }

    function add($title, $description){
      $this->db->set('created', 'NOW()', false);
      $inputdata = array(
        'title'=>$title,
        'description'=>$description,
        'author'=>8,
      );
      $this->db->insert('topic',$inputdata);
      return $this->db->insert_id();
    }

    function del(){
  //  $this->db->query('DELETE FROM topic WHERE id>9');
      $this->db->where('id >',9);
      $this->db->delete('topic');
    }
  }
?>
