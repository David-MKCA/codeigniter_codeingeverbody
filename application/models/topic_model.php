<?php
  class Topic_model extends CI_Model {
    function __construct(){
      parent::__construct();
    }

    public function gets(){
      return $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($topic_id){
       return $this->db->get_where('topic', array('id'=>$topic_id))->row(); // ACTIVE RECORD
       //return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);
    }
  }
?>
