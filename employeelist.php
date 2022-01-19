<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/style.css';?>">
  </head>
  <body class="body_1">
    <div class="message">
    <?php
    $success=$this->session->userdata('success');
    if($success!=""){
      ?>
      <div class="alert alert-success"><?php echo $success;?></div>
      <?php
    }
    ?>
  </div>
      <section>

        <div>
                <table class="list_table">
            <thead class="thead">
            <tr>
            <th>Sl.no</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Phone Number </th>
            <th>Password</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php $e_id=0;
            if (!empty($tasks)) {
            foreach ($tasks as $task) {
              $e_id++;
            ?>
            <tr class="tbody_1">
              <td><?php echo $e_id ?></td>
              <td><?php echo $task['employee_name']?></td>
              <td><?php echo $task['email']?></td>
              <td><?php echo $task['phone']?></td>
              <td><?php echo $task['password']?></td>
              <td><button class="edit"><a href="<?php echo base_url().'index.php/Newlogin/managecart/'.$task['e_id']?>" >View</button></a>
               <button class="delete"><a href="<?php echo base_url().'index.php/Newlogin/delete1/'.$task['e_id']?>">Delete</button></a></td>
            </tr>
          <?php
        }
        }
        else{
          ?>
          <tr>
            <td> </td>
            </tr>
          <?php } ?>

        </tbody>


    </table>
        </section>
          </body>

</html>
