<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body class="background">
    <section>
      <div class="form_1">
        <div class="group"><div class="">
          <div class="form">
            <caption> Add items </caption>
          </div>
        </div>
      </div>
        <form  action="" method="post" onSubmit="">

          <div class="group">
            <div class="label">
              <label for="">ItemName <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <input type="text"  name="item_name" value="<?php echo set_value('item_name');?>" class="custom-width">
              <?php echo form_error('item_name'); ?>
            </div>
            <div id="name_1" class="error_1">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">ItemQuantity <span class="imp"> * </span></label>
            </div>
            <div class="input">
              <input type="number"  name="item_quantity" min="1" max="1000" value="<?php echo set_value('item_quantity');?>" class="custom-width">
              <?php echo form_error('item_quantity'); ?>
            </div>
            <div id="name_1" class="error_1">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">ItemAmount <span class="imp"> * </span></label>
            </div>
            <div class="input">
            <input type="number" min="0" max="10000" step="1" name="item_amount" id="item_amount" required="required" value="<?php echo set_value('item_amount');?>" class="custom-width">
            <?php echo form_error('item_amount'); ?>
            </div>
            <div id="name_1" class="error_1">
            </div>
          </div>
          <div class="group">
            <div class="label">
              <label for="">Created on <span class="imp"> * </span> </label>
            </div>
            <div class="input">
              <input type="date" name="created_on" value="<?php echo set_value('created_on');?>" class="custom-width">
              <?php echo form_error('created_on'); ?>
              </div>
              <div id=date_1 class="error">
            </div>
          </div>
          <div class="group">
            <div class="input"></div>
            <div class=button_1>
              <button  type="submit" name="submit"  value="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
  </html>
