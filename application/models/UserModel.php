<?php

class UserModel extends CI_Model
{
  
  function __construct()
  {
    parent::__construct();
  }

  public function checkLogin($username, $password)
  {
    $query = $this->db->get_where('fs_user', array(
      'username' => $username,
      'password' => $password));
    
    return $query->result();
  }
  public function get_user()
  {
    $query=$this->db->get('fs_news');
    return $query->result();
  }

    public function submit()
    {
      $arr= array(
        'idUser' => $this->input->post('idUser'),
        'title'=>$this->input->post('title'),
        'idState'=>$this->input->post('idState'),
        'datePublication' => $this->input->post('datePublication'),
        'content'=>$this->input->post('textcontent'));

      $this->db->insert('fs_news',$arr);
      if($this->db->affected_rows()> 0)
      {
        redirect('MainController/Admin');
      }
    }

    function add_record($feed)
    {

      $this->db->insert('fs_news',$feed);

    }

    
    function delete_row()
    {
      $this->db->where('idNews', $this->uri->segment(3)); //refers to /controller/function/(3rd) <--
      $this->db->delete('fs_news');
      $query = $this->db->get('fs_news');

      return $query->result();
    }


    function preview_record(){

      $this->db->where('idNews', $this->uri->segment(3));
      $query=$this->db->get('fs_news');
      return $query->result();
    }


    function edit_record(){

      $this->db->where('idNews', $this->uri->segment(3));
      $query=$this->db->get('fs_news');
      return $query->result();

    }


    function update_record($data)
    {
        
        $this->db->where('idNews',$data['idNews']);
        
        $this->db->update('fs_news', $data);
    }



    function search_news($search_this)
    {
        $this->db->select('idNews,title,datePublication,idState');
        $this->db->from('fs_news');

        if(isset($search_this['title']) and !empty($search_this['title']))
        {
            $this->db->like('title',$search_this['title']);
        }
        if(isset($search_this['datePublication']) and !empty($search_this['datePublication']))
        {
            $this->db->like('datePublication',$search_this['datePublication']);
        }
       
        if(isset($search_this['idState']) and !empty($search_this['idState']))
        {

            $this->db->where('idState',$search_this['idState']);
        }
        
        $query=$this->db->get();

        return $query->result();
    }

    function mystate()
    {
      $query = $this->db->get('fs_state');
      return $query->result();
    }

    function author($data)
    {
      $this->db->where('username', $data['username']);
      $query = $this->db->get('fs_user');

      return $query->result();
    }

    function userID_model()
    {
      
        $this->db->select( 'fs_news.idNews,fs_news.title, fs_news.datePublication, fs_state.description');
        $this->db->from('fs_news');
        $this->db->join('fs_state', 'fs_news.idState = fs_state.idState');

        return $this->db->get();
      
    }


}