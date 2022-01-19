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
            <th>Item Name</th>
            <th>Item quantity</th>
            <th>Item Amount</th>
            <th>Created on</th>
            <th>Actions</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php $item_id=0;
            if (!empty($tasks)) {
            foreach ($tasks as $task) {
              $item_id++;
            ?>
            <tr class="tbody_1">
              <td><?php echo $item_id ?></td>
              <td><?php echo $task['item_name']?></td>
              <td><?php echo $task['item_quantity']?></td>
              <td><?php echo $task['item_amount']?></td>
              <td><?php echo $task['created_on']?></td>
              <td><button class="edit"><a href="<?php echo base_url().'index.php/Newlogin/managecart/'.$task['item_id']?>">AddCart</button></a></td>

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
