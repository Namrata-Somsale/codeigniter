<?php
/**
 *
 */
class Newlogin extends CI_Controller
{
 // adminglogin
 // public function login() {
 //
 //    /* Load form validation library */
 //    $this->load->library('form_validation');
 //    $this->form_validation->set_rules('username', 'Name', 'required');
 //    $this->form_validation->set_rules('password', 'Password', 'required');
 //    if ($this->form_validation->run() == FALSE) {
 //    $this->load->view('admin');
 //    }
 //    else {
 //       $this->load->view('adminlog');
 //    }
 // }

  // adminadd
  function adminadd()
  {

    // fetch products
    $this->load->model('Project_model');
    $tasks=$this->Project_model->all();
    $data=array();
    $data['tasks']=$tasks;
    $this->load->view('project/newheader');
    $this->load->view('admincreate', $data);
    $this->load->view('project/newfooter');
  }
  // userlogin
  function user()
  {

    // insert employee
    $this->load->library('form_validation');
    $this->form_validation->set_rules('employee_name', 'EmployeeName', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('phone', 'Phone number', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run()==FALSE) {

      $this->load->view('userlogin');

    }
    else {
      $formArray=array();
      $formArray['employee_name']=$this->input->post('employee_name');
      $formArray['email']=$this->input->post('email');
      $formArray['phone']=$this->input->post('phone');
      $formArray['password']=$this->input->post('password');
      $this->load->model('Project_model');
      $this->Project_model->add($formArray);
      $this->session->set_flashdata('success','Record added successfully');
      redirect(base_url().'index.php/Newlogin/user');
    }
    }


  //  additems
  function additems()
  {

    // insert products
    $this->load->library('form_validation');
    $this->form_validation->set_rules('item_name', 'ItemName', 'required');
    $this->form_validation->set_rules('item_quantity', 'ItemQuantity', 'required');
    $this->form_validation->set_rules('item_amount', 'ItemAmount', 'required');
    $this->form_validation->set_rules('created_on', 'Created on', 'required');
    if ($this->form_validation->run()==FALSE) {
      $this->load->view('project/newheader');

      $this->load->view('additem');
      $this->load->view('project/newfooter');
    }
    else {
      $formArray=array();
      $formArray['item_name']=$this->input->post('item_name');
      $formArray['item_quantity']=$this->input->post('item_quantity');
      $formArray['item_amount']=$this->input->post('item_amount');
      $formArray['created_on']=date("Y-m-d");
      $this->load->model('Project_model');
      $this->Project_model->insert($formArray);
      $this->session->set_flashdata('success','Record added successfully');
      redirect(base_url().'index.php/Newlogin/adminadd');
    }
    }
    function edit($item_id){

      $this->load->model('Project_model');
      $tasks=$this->Project_model->getEmployee($item_id);
        $data['tasks']=$tasks;
        $this->load->view('project/newheader');
        $this->load->view('editad', $data);
        $this->load->view('project/newfooter');


    }
// edit
    function edit_save($item_id){

      $this->load->model('Project_model');
      $tasks=$this->Project_model->getEmployee($item_id);
      $data=array();
      $data['tasks']=$tasks;
      $this->form_validation->set_rules('item_name', 'ItemName', 'required');
      $this->form_validation->set_rules('item_quantity', 'ItemQuantity', 'required');
      $this->form_validation->set_rules('item_amount', 'ItemAmount', 'required');
      $this->form_validation->set_rules('created_on', 'Created on', 'required');
      // var_dump($item_id); die;
      if ($this->form_validation->run()==false) {
        $this->load->view('project/newheader');
        $this->load->view('editad', $data);
        $this->load->view('project/newfooter');
          // redirect(base_url().'index.php/Newlogin/editad');
      }
      else {
        $formArray=array();
        $formArray= [
"item_id" => $item_id,
"item_name" => $_POST['item_name'],
"item_quantity"=>$_POST['item_quantity'],
"item_amount"=>$_POST['item_amount'],
"created_on"=>$_POST['created_on'],
];
        $this->Project_model->updateUser($item_id,$formArray);

        $this->session->set_flashdata("success","Record updated");

        redirect(base_url().'index.php/Newlogin/adminadd');
      }

    }
    // delete product
    function delete($item_id){

      $this->load->model('Project_model');
      $tasks=$this->Project_model->getEmployee($item_id);
      if (empty($tasks)) {
        $this->session->set_flashdata("failure","Record not found");
        redirect(base_url().'index.php/Newlogin/adminadd');
      }
      $this->Project_model->deleteUser($item_id);
      $this->session->set_flashdata("success","Record deleted");
      redirect(base_url().'index.php/Newlogin/adminadd');
    }
     // adminlog
     function adminpage(){

       $this->load->view('adminlog');
     }

     // employeelist
     function employeeview(){

       // fetch employee
       $this->load->model('Project_model');
       $tasks=$this->Project_model->allEmployee();
       $data=array();
       $data['tasks']=$tasks;
       $this->load->view('project/newheader');
       $this->load->view('employeelist', $data);
       $this->load->view('project/newfooter');

     }

     // delete employee
     function delete1($e_id){
       $this->load->model('Project_model');
       $this->Project_model->delete($e_id);
     redirect(base_url().'index.php/Newlogin/employeeview');
     }

     function employeedis(){


       $this->load->model('Project_model');
       $tasks=$this->Project_model->all();
       $data=array();
       $data['tasks']=$tasks;
       $this->load->view('project/newheader');
       $this->load->view('employeedisplay', $data);
       $this->load->view('project/newfooter');
     }


     function managecart($item_id){

       $this->load->model('Project_model');
       $this->db->where('item_id',$item_id);
       $res= $this->db->get('products');
       $data=$res->result_array();
       // var_dump($data); die;
       $formArray= ["item_id" => $item_id,"item_name" =>$data[0]['item_name'],"item_quantity"=>$data[0]['item_quantity'],
        "item_amount"=>$data[0]['item_amount'],
       "e_id"=>1,
       "date"=>date("Y-m-d")];
       $this->Project_model->addcart($formArray);
       $this->db->where('item_id',$item_id);
       $this->db->update('products',array("item_quantity"=>$data[0]['item_quantity'] - 1));
       $this->session->set_flashdata("successfully","item added successfully");
       $data["values"]=$data;
       $this->load->view('project/newheader');
       $this->load->view('managecart', $data);
       $this->load->view('project/newfooter');

     }
     // employeelogin
     function employee(){
       $this->load->view('employeelogin');
     }



  }




 ?>
