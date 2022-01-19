<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/new.css';?>">


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
              <input type="date" name="t_date" value="<?php echo set_value('t_date', $tasks['t_date']);?>" class="custom-width">
              </div>
              <div id=date_1 class="error">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Assignee <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <select class="" name="assignee" value="<?php echo set_value('assignee',$tasks['assignee']);?>">
                <?php
                $Kaveri = "";
                $Namrata = "";
                $Sanjana="";
                $Akshata="";
                $Nikita="";
                $Maheshwari="";
                $Shams="";
                $Pramod="";
                if ($tasks['assignee']==Kaveri) {
              $Kaveri="selected";
            }
            if ($tasks['assignee']==Namrata) {
              $Namrata="selected";
            }
          if ($tasks['assignee']==Sanjana) {
            $Sanjana="selected";
          }
          if ($tasks['assignee']==Akshata) {
            $Akshata="selected";
          }
          if ($tasks['assignee']==Nikita) {
            $Nikita="selected";
          }
          if ($tasks['assignee']==Maheshwari) {
            $Maheshwari="selected";
          }
          if ($tasks['assignee']==Shams) {
            $Shams="selected";
          }
          if ($tasks['assignee']==Pramod) {
            $Pramod="selected";
          }
          ?>
                <option value="" disabled selected hidden placeholder="select">select</option>
                <option value="Kaveri"<?php echo set_value('assignee',$Kaveri);?>>Kaveri</option>
                <option value="Namrata"<?php echo set_value('assignee',$Namrata);?>>Namrata</option>
                <option value="Sanjana"<?php echo set_value('assignee',$Sanjana);?>>Sanjana</option>
                <option value="Akshata"<?php echo set_value('assignee',$Akshata);?>>Akshata</option>
                <option value="Nikita"<?php echo set_value('assignee',$Nikita);?>>Nikita</option>
                <option value="Maheshwari"<?php echo set_value('assignee',$Maheshwari);?>>Maheshwari</option>
                <option value="Shams"<?php echo set_value('assignee',$Shams);?>>Shams</option>
                <option value="Pramod"<?php echo set_value('assignee',$Pramod);?>>Pramod</option>
              </select>
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Title <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <input type="text"  name="title" value="<?php echo set_value('title',$tasks['title']);?>" class="custom-width">
              </div>
            <div id="name_1" class="error_1">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Description <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <textarea name="description" id="description"  class="area-width" value=""><?php echo set_value('description',$tasks['description']);?></textarea>
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


                <select class="" name="priority" value="<?php echo set_value('priority', $tasks['priority']);?>">
                  <?php
                  $High = "";
                  $Medium = "";
                  $Low="";
                  if ($tasks['priority']==1) {
                $Low="selected";
              }
              elseif ($tasks['priority']==2){
                  $Medium="selected";
              } else {
                $High="selected";
              }
?>
                <option value="" disabled selected hidden placeholder="select">select</option>
                <option value="3"<?php echo set_value("priority",$High);?>>High</option>
                <option value="2"<?php echo set_value("priority",$Medium);?>>Medium</option>
                <option value="1"<?php echo set_value("priority",$Low);?>>Low</option>
                </select>
            </div>
          </div>
          <div class="group">
            <div class="label"><label>Type <span class="imp"> * </span></label></div>
            <div class="input">
              <?php
              $Task = "";
              $Bug = "";
              if ($tasks["t_id"]==1) {
                $Task = "checked";
              }
              if ($tasks["t_id"]==2) {
                $Bug = "checked";
              } ?>

              <input type="radio" name="t_id" id="checkbox" value="1"<?php echo set_value('t_id',$Task);?>><label for="">Task</label>
              <input type="radio" name="t_id" id="checkbox" value="2" <?php echo set_value('t_id',$Bug);?>><label for="">Bug</label>
            </div>
          </div>
          <div class="group">
            <div class="input"></div>
            <div class=button_1>
              <button  class="button_1" type="submit" name="submit" value="submit"> Update</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
  </html>
