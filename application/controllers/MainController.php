<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Mastering the login
*/

class MainController extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model('userModel','m');
  }

  public function index()
  {
    $this->load->view('header');
    $this->load->view('login');
    $this->load->view('footer');

  }

  //  MY MAIN PAGE WHEN I LOG IN

  public function admin()
  {
    if($this->session->userdata('username') == null)
        redirect('MainController');

        $data['user'] = $this->m->get_user();
        $data['username']=$this->session->userdata('username');
        $data['state'] = $this->m->mystate();

        $data['author'] = $this->m->author($data);

        $this->load->view('Admin',$data);

  }

  public function login()
    {
      
      $username = $this->input->post("username");
      $password = $this->input->post("password");



        $result = $this->m->checkLogin($username,$password);
        

        if($result == null)
        {
          $data["errorMessage"] = "The username/password are incorrect!";
          $this->load->view('header');
          $this->load->view('login_error',$data);
          $this->load->view('footer');

        }
        else
        {
          $this->session->set_userdata(array(
            'idUser' => $result[0]->idUser, 
            'username'=> $result[0]->username));

          redirect('MainController/admin');

        }


    }

     function logout()
    {
      $this->session->sess_destroy();
      redirect('MainController');
    }

  
  
  public function submit()
  {
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('textcontent', 'Content', 'required');
      $this->form_validation->set_rules('datePublication', 'Date', 'required');
      $this->form_validation->set_rules('idState', 'State', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('admin');
                }
                else
                {
                        $this->m->submit();
                }

  }

  function delete()
  {

    $data['delete'] = $this->UserModel->delete_row();
    $this->load->view('delete',$data);

  }

  
  function preview()
  {

    if($data = $this->UserModel->preview_record())
    {
      $preview_v['record'] = $data;
      
      $preview_v['user'] = $this->m->userID_model($preview_v);
    }
    
    $this->load->view('preview',$preview_v);

  }

  function edit(){
    
    if($data = $this->UserModel->edit_record())
    {
      $edit_v['record'] = $data;
    }
    
    $this->load->view('edit',$edit_v);
    

  }



  function update(){

    $data = array(
      'idNews' => $this->input->post('idNews'),
      'title' => $this->input->post('title'),
      'content'=> $this->input->post('content'));

    if (!empty($data['title'])&& !empty($data['content'])) {
      $this->UserModel->update_record($data);
    }
    else {
      echo "Please complete all fields";
    }
    redirect('MainController/admin','refresh');
  }


  function searchAjax()
  {
    $search_this = array(
                  'title'             => $this->input->post('title'),
                  'datePublication'   => $this->input->post('datePublication'),
                  'idState'           => $this->input->post('idState'));

      $search['news'] = $this->m->search_news($search_this);

      $this->load->view('search_results',$search);
  }

  function admin2()
  {
    $this->load->view('Admin2');
  }

  function userID()
  {

    $this->load->view('preview', $data);
  }
  


}
