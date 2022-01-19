<?php
/**
 *
 */
class Project_model extends CI_Model
{

  function check($item_name){
    $this->db->where('item_name',$item_name);
    return $tasks=$this->db->get('products')->row_array();
  }
// insert p
  function insert($formArray)
  {
    $this->db->insert('products',$formArray);
  }

  // fetchingp
  function all(){
    return $tasks = $this->db->get('products')->result_array();
  }
  // editadp
  function getEmployee($item_id){
    $this->db->where('item_id',$item_id);
    return $tasks=$this->db->get('products')->row_array();
  }
  // update
  function updateUser($item_id,$formArray){
    $this->db->where('item_id',$item_id);
    $this->db->update('products',$formArray);
    }
    // deletepro
    function deleteUser($item_id){
      $this->db->where('item_id',$item_id);
      $this->db->delete('products');
    }
    // addemployee
    function add($formArray)
    {
      $this->db->insert('employee',$formArray);
    }

    // fetche
    function allEmployee(){
      return $tasks = $this->db->get('employee')->result_array();
    }


    // delete emp
    function delete($e_id){
      $this->db->where('e_id',$e_id);
      $this->db->delete('employee');
    }

    // added
    function addcart($data){
      $this->db->insert('manage_item',$data);
    }

}
 ?>
