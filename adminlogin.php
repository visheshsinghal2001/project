<?php
 
include_once('data.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $userid = test_input($_POST['userid']);
    $password = test_input($_POST['password']);
    $stmt = $conn->prepare("SELECT * FROM data");
    $stmt->execute();
    $users = $stmt->fetchAll();
     $temp=0;
    foreach($users as $user) {
         
        if(($user['userid'] == $userid) &&
            ($user['password'] == $password)) {
                header("Location: admin/admin.php");
                $temp=1;
              }
            }
            if($temp==0) {
              echo "<script language='javascript'>";
              echo "alert('WRONG INFORMATION')";
              echo "</script>";
              // header("Location: adminlogin.php");
              die();
      }
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/css/ionicons.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="resources/css/admin-login.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin login</title>
  </head>
  <body>
    <div class="login-box">


       <form class="Login" method="post">
            <h2>Login</h2>
          <label for="Username">User-ID : &nbsp &nbsp &nbsp &nbsp</label>
          <input class='input-field' type="text" id="Username" placeholder="user ID" required name="userid"></input>
          <label for="password">Password&nbsp :</label>
          <input class='input-field' type="password" id="Password" placeholder="Password" required name="password"></input>
        
          <button type='submit' onclick=move() class='butt' name="submit" >Login</button><br>
        </form>
    </div>
  </body>
</html>
