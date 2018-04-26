<html>
    <head>
      <style>
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
      </style>
    </head>

    

      <body bgcolor=rgb(209, 209, 217)>
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
      <form action="signinForm.php" id="form" name="myForm" method="post"><font color="white">
        <font size="5">
          <p>  First name:<br >
          <input type="text" name="fname"><p>
          Last name:<br>
          <input type="text" name="lname"><p>
          Email:<br>
            <input id="e-mail" type="text" name="e_mail">
          <p>
          Username:<br>
          <input id="User_n"type="text" name="Username">
          <p>
          Password: <input id="txtPassword" type="password" name="LengthCheck">
          <p>
          Confirm  Password: <input id="txtConfirmPassword" type="password" name="password">
          <p>
            Birthday:
        <input id=" bday"type="date" name="bday">
        <p>
            <button type="submit" id="btnSubmit" value="submit" name="submit">submit</button>
        </font>
          </font>
      </form>
      
    </body>
    
  </html>
<?php 
    $firstname=" ";
    $lastname=" ";
    $e_mail="";
    $username=" ";
    $password=" ";
    
    $birthday=" ";

    if (isset($_POST["submit"])){
$firstname=$_POST["fname"];}   
    if (isset($_POST["submit"])){
$lastname=$_POST["lname"];}
    if (isset($_POST["submit"])){
$e_mail=$_POST["e_mail"];}
    if (isset($_POST["submit"])){
$username=$_POST["Username"];}
    if (isset($_POST["submit"])){
$password=$_POST["LengthCheck"];}
if (isset($_POST["submit"])){
$birthday=$_POST["bday"];}
        
$encrypt_pass=md5($password);
$db_host="localhost";
$db_username="root";
$db_pass="rat";
$db_name="project";

$con=mysql_connect ("$db_host","$db_username","$db_pass");
    mysql_select_db("project",$con);
    if(!$con){
        echo"not connected";
    }
    else{
        echo"connected";}
    $query="select * from signinn;";
    $res=mysql_query($query);
    while($row =mysql_fetch_assoc($res)){
        if($row["username"]==$username){
            $message = "the username already exists";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    $sql="insert into signinn values('$firstname','$lastname','$e_mail','$username','$encrypt_pass','$birthday')";
$result=mysql_query($sql);

    if($result){
        echo "record saved";
    }
    else{
        echo "try again";
    }

    
?>