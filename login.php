<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/new.css';?>">

  </head>
  <body class="body_1">


  <div class="container">
      <form class="form_1" action="<?php echo base_url().'index.php/Form/index';?>" method="post" onSubmit="return validateTextbox();">

        <?php echo form_open('form'); ?>
      <div class="page">
        <div class="label_1">
          <label for="">Username <span class="imp"> * </span></label>
          </div>
          <div class="input_1">
            <input type="text" name="username" id="username" placeholder="Enter username" ><?php echo form_error('username'); ?></div>

            <div class="alert">
              <span id="uname"></span>

            </div>
      </div>


      <div class="page">
        <div class="label_1">
          <label for="">Password <span class="imp"> * </span></label>
          </div>
          <div class="input_1">
            <input type="password" name="password" id="password" placeholder="Enter password" ></div>
            <?php echo form_error('password'); ?>
            <div class="alert">
              <span id="pwd"></span>

            </div>
      </div>

      <div>
        <button  class="submit" type="submit" name="submit" value=""> Submit</button>

      </div>

    </form>

  </div>
</body>
</html>
