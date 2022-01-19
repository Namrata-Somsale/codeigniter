<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/new.css';?>">
  </head>
  <body>
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
        <button class="add_2"> <a href="<?php echo site_url("Form/create");?>" >Add New</a></button>
        <form method="post" action="<?php echo base_url().'index.php/Form/searchBox';?>">
        <input type="text" id='search' name="search" placeholder="search.." >
        <button type="submit" name="submit" >Search</button>
      </form>

        </div>
        <div>
          <table class="list_table">
            <thead class="thead">
            <tr>
            <th>Sl.no</th>
            <th>Date</th>
            <th>Assignee</th>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php $id=0;
            if (!empty($tasks)) {
            foreach ($tasks as $task) {
              $id++;
            ?>
            <tr class="tbody_1">
              <td><?php echo $id ?></td>
              <td><?php echo $task['t_date']?></td>
              <td><?php echo $task['assignee']?></td>
              <td><?php echo $task['title']?></td>
              <td><?php echo $task['description']?></td>
              <td><?php echo $task['priority']?></td>
              <td><?php echo $task['t_id']?></td>
              <td><button class="edit"><a href="<?php echo base_url().'index.php/Form/edit/'.$task['id']?>" >Edit</button></a>
               <button class="delete"><a href="<?php echo base_url().'index.php/Form/delete/'.$task['id']?>">Delete</button></a></td>
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
