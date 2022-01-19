<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/style.css';?>">
  </head>
      <header>
      <h1> <img src="<?php echo base_url().'assets/newlogo.jpeg';?>" alt="">Office Stationary Management System</h1>
  </header>
      <body class='adminback' >
        <section>
          <div>
            <button class="logout" > <a href="">logout </a>  </button>
          </div>
          <div class="newpage">
            <div>
                <button class="additem"> <a href="<?php echo site_url("Newlogin/adminadd");?>"> Items </a></button>
                <button class="reports"> <a href="<?php echo site_url("Newlogin/managecart");?>">Reports</a> </button>
            </div>
            <div>
                <button class="create"> <a href="<?php echo site_url("Newlogin/user");?>">Create</a> </button>
                <button class="employee"> <a href="<?php echo site_url("Newlogin/employeeview");?>">Employee</a></button>
            </div>


          </div>
        </section>
        </body>
        <div>
    <footer>
      <p>Copyright@aissel.com</p>
    </footer>
  </div>

</html>
