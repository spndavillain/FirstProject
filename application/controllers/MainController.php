<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /*************************************************************
   **             USING 'M' INPLACE OF MODEL                  **
   *************************************************************/

class MainController extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model('userModel','m');
  }


  /*************************************************************
   **             DISPLAY THE DEFAULT PAGE [LOGIN]            **
   *************************************************************/

  public function index()
  {
    if($this->session->userdata('username') != null)
        redirect('MainController/admin');

    else 
    {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');  
    }
  }

  /*************************************************************
   **           CHECKING CREDENTIALS ON LOGIN                 **
   *************************************************************/

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

  /*************************************************************
   **           MY MAINPAGE AND START OF A SESSION            **
   *************************************************************/

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

  /*************************************************************
   **           DESTROY SESSION ON LOGOUT                     **
   *************************************************************/

     function logout()
    {
      $this->session->sess_destroy();
      redirect('MainController');
    }

  /*************************************************************
   **           WHEN ADDING A NEW NEWS [ARTICLE]              **
   *************************************************************/
  
  public function submit()
  {
       $this->m->submit();
       $this->load->view('admin');

  }

  /*************************************************************
   **               DELETING NEWS [ARTICLE]                   **
   *************************************************************/

  function delete()
  {

    $data['delete'] = $this->UserModel->delete_row();
    $this->load->view('delete',$data);

  }

  /*************************************************************
   **                   VIEW NEWS [ARTICLE]                   **
   *************************************************************/

  function preview()
  {
    $preview_v['record'] = $this->m->statedisplay();
    
    if($data = $this->UserModel->preview_record())
    {
      $preview_v['record'] = $data;
    }

    $this->load->view('preview',$preview_v);

  }

  /*************************************************************
   **       DISPLAY INFORMATION INSIDE <INPUT><TEXTAREA>      **
   *************************************************************/

  function edit(){
    
    if($data = $this->UserModel->edit_record())
    {
      $edit_v['record'] = $data;
    }
    
    $this->load->view('edit',$edit_v);
    

  }

  /*************************************************************
   **  TAKE INFORMATION FROM EDIT AND UPDATE IT TO DATABASE   **
   *************************************************************/


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

  /*************************************************************
   **           SEARCHING AND DISPLAYING VIA AJAX             **
   *************************************************************/

  function searchAjax()
  {
    $search_this = array(
                  'title'             => $this->input->post('title'),
                  'datePublication'   => $this->input->post('datePublication'),
                  'idState'           => $this->input->post('idState'));

      $search['news'] = $this->m->search_news($search_this);
      
      $this->load->view('search_results',$search);
  }




}
