<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="https://marketplace.canva.com/EAFLU7Mm3FI/1/0/1600w/canva-brown-and-beige-simple-minimalist-coffee-shop-circle-logo-ww1u6OsW_3o.jpg"/>
  <title>Coffeedot Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$connection=mysqli_connect("localhost","root","","coffeedot");
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $con_pass=$_POST['con_pass'];
if($password==$con_pass){
    $q="INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $qq=mysqli_query($connection,$q);
    header("Location:login.php");
}else{
    echo "<script> alert('Password doesn't match')</script>";
}
   }
?>

  <div class="wrapper">
    <form method="POST">
      <h2>Register</h2>
      <div class="input-field">
        <input type="text" required name="name">
        <label>Enter your Name</label>
      </div>
      <div class="input-field">
        <input type="email" required name="email">
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" required name="pass">
        <label>Enter Your Password</label>
      </div>
      <div class="input-field">
        <input type="password" required name="con_pass">
        <label>Confirm Your Password</label>
      </div>
      <br>
      <button type="submit" name="register">Register</button>
      <div class="register">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>
