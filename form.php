<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/new.css';?>">

    </script>
  </head>
  <body>
    <section>
      <div class="background">
        <div class="group"><div class="">
          <div class="form">
            <caption> Create Tasks </caption>
          </div>
        </div>
        
        <form class="" action="" method="post" onSubmit="return validateForms();">

          <?php echo form_open('form'); ?>
          <div class="group">
            <div class="label">
              <label for="">Date <span class="imp"> * </span> </label>
            </div>
            <div class="input">
              <input type="date" name="t_date" value="<?php echo set_value('t_date');?>" class="custom-width">
              <?php echo form_error('t_date'); ?>
              </div>
              <div id=date_1 class="error">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Assignee <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <select class="" name="assignee" value="<?php echo set_value('assignee');?>">
                <option value="" disabled selected hidden placeholder="select">select</option>
                <option value="Kaveri">Kaveri</option>
                <option value="Namrata">Namrata</option>
                <option value="Sanjana">Sanjana</option>
                <option value="Akshata">Akshata</option>
                <option value="Nikita">Nikita</option>
                <option value="Maheshwari">Maheshwari</option>
                <option value="Shams">Shams</option>
                <option value="Pramod">Pramod</option>
              </select>
              <?php echo form_error('assignee'); ?>
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Title <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <input type="text"  name="title" value="<?php echo set_value('title');?>" class="custom-width">
              <?php echo form_error('title'); ?>
              </div>
            <div id="name_1" class="error_1">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Description <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <textarea name="description" id="description"  class="area-width" value="<?php echo set_value('description');?>"></textarea>
              <?php echo form_error('description'); ?>
            </div>
            <div class="error">
              <span id=description_1></span>
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label>Priority <span class="imp"> * </span></label>
            </div>
            <div class="input">
                <select class="" name="priority" value="<?php echo set_value('priority');?>">
                <option value="" disabled selected hidden placeholder="select">select</option>
                <option value="3">High</option>
                <option value="2">Medium</option>
                <option value="1">Low</option>
                </select>
                <?php echo form_error('priority'); ?>
            </div>
          </div>
          <div class="group">
            <div class="label"><label>Type <span class="imp"> * </span></label></div>
            <div class="input">
              <input type="radio" name="t_id" id="checkbox" value="1 <?php echo set_value('t_id');?>"><label for="">Task</label>
              <input type="radio" name="t_id" id="checkbox" value="2 <?php echo set_value('t_id');?>"><label for="">Bug</label>
              <?php echo form_error('t_id'); ?>
            </div>
          </div>
          <div class="group">
            <div class="input"></div>
            <div class=button_1>
              <button  class="button_1" type="submit" name="submit" value="submit"> Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>



  </body>
  </html>
