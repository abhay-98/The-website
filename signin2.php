<?php
  $fname = $lname = $eMail = $userName = $password = $Cpassword = $Birthday = "";
  $fnameErr = $lnameErr = $eMailErr = $userNameErr = $passwordErr = $CpasswordErr = $BirthdayErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["fname"])) {
      $fnameErr = "Name is required";
    }
    else {
      $name = test($_POST["fname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-z, A-Z ]*$/",$fname)) {
        $fnameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["lname"])) {
      $lnameErr = "Name is required";
    }
    else {
      $name = test($_POST["lname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-z, A-Z ]*$/",$lname)) {
        $lnameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $eMailErr = "Email is required";
    }
    else {
      $eMail = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
        $eMailErr = "Invalid email format";
    }
   }

   if (empty($_POST["txtPassword"])) {
     $eMailErr = "Password is required";
   }

   if(hash($password)==hash($Cpassword)){
     echo "Password match";
   }

   else {
     echo "Passwords do not match";
   }

   if (empty($_POST["bday"])) {
     $BirthdayErr = "Birthday is required";
   }

  function hash($pass){
    $p=md5($pass);
    return $pass;
  }
 }

 function test($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

?>

<html>
    <head>
      <style>
      .error {color: #FF0000;}
      #fb{
      position: absolute;
      left: 850px;
      top: 100px;
      }
      #google{
      position: absolute;
      left: 350px;
      top: 100px;
      }
      .img-circle {
    border-radius: 50%;
}
      #form {
      width:40%;
      height:450px;
      margin:auto;
      position:absolute;
      top: 180px;
      left:350;
      font-weight: bold;
      }
       input {
      width:100%;
      height: 25px;
      font-weight: bold;

       }
      [type=text]:focus {
        background-color:rgba(246, 250, 56, 1);
         width: 100%;
      }
      input[type=text] {
      border: 2px solid grey;
      border-radius: 10px;

      }
      input[type=Password] {
      border: 2px solid grey;
      border-radius: 10px;
    }
    input[type=text] {
        width: 90px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 10%;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.5s ease-in-out;
        transition: width 0.5s ease-in-out;
    }

    input[type=text]:focus {
        width: 90%;
         background-color: rgb(213, 238, 184);
    }
    input[type=password] {
        width: 90px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 10%;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.5s ease-in-out;
        transition: width 0.5s ease-in-out;
    }

    input[type=password]:focus {
        width: 90%;
         background-color:rgb(213, 238, 184);
    }
    .first_row{
      height: 40px;
      width: 100%;
      color: white;
    }
    #Signup{
      color: red;
    }
      </style>
    </head>

    <body>


      <body bgcolor=rgb(209, 209, 217)>
        <div class="first_row">
          <h2><center>Already a user
          <a class="first_row" id="Signup" href="signup.html">Sign in</a></h2>
        </div>
        <div id="fb">
          <a href="https://www.facebook.com/" target="_self">
          <img class="img-circle" ismap src="E:\PROG\cine_images\facebook.png" height="60" width="60">
        </a>
        </div>
        <div id="google">
          <a href="https://mail.google.com" target="_self">
          <img class="img-circle" ismap src="E:\PROG\cine_images\google.png" height="60" width="60">
        </a>
        </div>
      <form id="form" name="myForm" method="post"><font color="white">
        <font color="#FF0000">
          * Required Fileds
        </font>
        <font size="5">
          <p>  First name:<br >
          <input type="text" name="fname"><span class="error">* <?php echo $fnameErr;?><p>
          Last name:<br>
          <input type="text" name="lname"><span class="error">* <?php echo $lnameErr;?><p>
          Email:<br>
            <input id="e-mail" type="text" name="e-mail"><span class="error">* <?php echo $eMailErr;?>
          <p>
          Username:<br>
          <input id="User_n"type="text" name="Username">
          <p>
          Password: <input id="txtPassword" type="password" name="LengthCheck">
          <span class="error">* <?php echo $passwordErr;?>
          <p>
          Confirm  Password: <input id="txtConfirmPassword" type="password" name="password">
          <span class="error">* <?php echo $CpasswordErr;?>
          <p>
            Birthday:<input id=" bday"type="date" name="bday">
            <span class="error">* <?php echo $BirthdayErr;?>
              <p>
            <input type="button" id="btnSubmit" value="Submit"/>
        </font>
      </font>
      </form>
    </body>
  </html>
