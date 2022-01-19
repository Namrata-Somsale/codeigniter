<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="<?php echo base_url().'assets/style.css';?>">
  </head>
  <body class="body_1">

    <?php echo form_open('Newlogin/employeedis'); ?>
  <div class="loginfull">
    <div class="log">
      <h1>Office Stationary Management System</h1>
    </div>
    <form class="form_1" action="<?php echo site_url("Newlogin/employeedis");?>" method="post" onSubmit="">
      <div class="image_1">
        <img src="<?php echo base_url().'assets/admin.jpeg';?>" alt="">
      </div>
      <div class="page">
        <div class="label_1">
          <label for="">Username <span class="imp"> * </span></label>
          </div>
          <div class="input_1">
            <input type="text" name="username" id="username" placeholder="Enter username" ></div>
            <?php echo form_error('username')?>
            <div class="alert">
              <span id="uname"></span>
              <?php echo form_error('username'); ?>

            </div>
      </div>
      <div class="page">
        <div class="label_1">
          <label for="">Password <span class="imp"> * </span></label>
          </div>
          <div class="input_1">
            <input type="password" name="password" id="password" placeholder="Enter password" ></div>
              <?php echo form_error('password')?>
            <div class="alert">
              <span id="pwd"></span>
              <?php echo form_error('password'); ?>
            </div>
      </div>
      <div class="submit">
        <button   type="submit" name="submit">Submit</button>

      </div>
    </form>
  </div>
</body>
</html>
