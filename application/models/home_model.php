<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_model extends CI_Model {
    
    var $table_random_en = "randomwordtable_en";
    var $table_random_de = "randomwordtable_de";
    var $table_bywords = "bywordstable";
    var $table_bysentences = "bysentencestable";

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function adminGetAll() {
        $query = $this->db->get($this->table);
        if ($query->num_rows()>0) return $query->result();
        else return array();
    }
    
    function getRandomWords($language)
    {
        if($language == "en")
        {
            $query = $this->db->get($this->table_random_en);
        }
        else 
            {
                $query = $this->db->get($this->table_random_de);
            }
        if ($query->num_rows()>0) return $query->result();
        else return array();
    }

    function getSentenceByWord()
    {
        $query = $this->db->get($this->table_bywords);
        if ($query->num_rows()>0) return $query->result();
        else return array();
    }

    function getBySentence()
    {
        $query = $this->db->get($this->table_bysentences);
        if ($query->num_rows()>0) return $query->result();
        else return array();
    }

    function saveOption2($data)
    {
        $text = $data[1];
        $id = $data[0];
        $sql = "UPDATE bywordstable SET text='$text' WHERE id='$id'";
        $this->db->query($sql);
        return;
    }

    function saveOption3($data)
    {
        $text = $data[1];
        $id = $data[0];
        $sql = "UPDATE bysentencestable SET text='$text' WHERE id='$id'";
        $this->db->query($sql);
        $query =  $this->db->query("SELECT MAX(id) as id FROM bysentencestable");
        return $query->result();
    }

    function removeOption3($data) 
    {
        $this->db->where('id', $data);
        $this->db->delete($this->table_bysentences);
    }

    function removeOption2($data) 
    {
        $this->db->where('id', $data);
        $this->db->delete($this->table_bywords);
    }
    
    function addOption2($data)
    {
        $data_title =$data[0];
        $data_text = $data[1];
           
            $this->db->query("INSERT INTO bywordstable (title, text) 
            values ('$data_title', '$data_text')");

        $query =  $this->db->query("SELECT MAX(id) as id FROM bywordstable");
        return $query->result();
    }

    function addOption3($data) 
    {
        $data_title =$data[0];
        $data_text = $data[1];
           
            $this->db->query("INSERT INTO bysentencestable (title, text) 
            values ('$data_title', '$data_text')");

        $query =  $this->db->query("SELECT MAX(id) as id FROM bysentencestable");
        return $query->result();
    }
}


