
<?php
$username="";
$password="";
if(isset($_POST["submit"])){
    $username=$_POST["Username"];
}

if(isset($_POST["submit"])){
    $password=$_POST["password"];
}
$encryptpass=md5($password);
$db_host="localhost";
$db_username="root";
$db_pass="rat";
$db_name="project";
$var=0;

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
        if($row["username"]==$username && $row["enpass"]==$encryptpass){
            
            $message="login successful.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
      
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><style>
  .boxed {
    position: absolute;
    right: 400px;
    top: 100px;
    height: 500px;
    width: 600px;
    border: 1px solid green ;
    background-color: #5fe0ed;
  }
  .first_row{
    height: 70px;
    width: 600px;
      background-color: rgb(240, 113, 208);
      font-size: 150%;
      font-weight: bold;
      font-style: sans-serif;
  }
  #center{
    font-size: 130%;
  }
  .text{
    position: relative;
    left: 230px;
    top: 20px;
    font-size: 120%;
    font-weight: bold;
    font-style: sans-serif;
  }
  #exp{
    color: #e22323;
    left: 180px;
  }
  #instant{
    margin-top: 15px;
  }
  .img-circle {
border-radius: 50%;
}
#fb{
  top: 45px;
left: 120px;
}
#google{
  top: -10px;
  left: 350px;
}
hr {
    border: none;
    height: 6px;
    background-color:#b5b0b0 ;
}
.form{
position: relative;
left: 20px;
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
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

  </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="boxed">
<div class="first_row">
<div id="center" class="text">Sign In</div>
</div>
<div class="Second_row">
  <div class="text" id="exp">For an unforgettable experience </div>
</div>
<div class="text" id="instant">
  Instant Sign In with
</div>
<div class="text" id="fb">
  <a href="https://www.facebook.com/" target="_self">
  <img class="img-circle" ismap src="E:\PROG\cine_images\facebook.png" height="60" width="60">
</a>
</div>
<div class="text"id="google">
  <a href="https://mail.google.com" target="_self">
  <img class="img-circle" ismap src="E:\PROG\cine_images\google.png" height="60" width="60">
</a>
</div>
<hr>
<form id="form" action="signin1st.php" method="post">
  <br>
  <input  class="form"type="text" name="Username" placeholder="UserName"><br>
  <br>
<input class="form" type="password" name="password" placeholder="password"><br>
    <button class="text" type="submit" value="Submit" name="submit">LOGIN</button>
</form>


    </div>
  </body>
</html>