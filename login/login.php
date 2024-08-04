<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="https://marketplace.canva.com/EAFLU7Mm3FI/1/0/1600w/canva-brown-and-beige-simple-minimalist-coffee-shop-circle-logo-ww1u6OsW_3o.jpg"/>
  <title>Coffeedot</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $connection=mysqli_connect("localhost","root","","coffeedot");
   if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $error=array();
    $q="SELECT * FROM users WHERE email='$email'AND password='$password'";
    $qq=mysqli_query($connection,$q);
    $row=mysqli_fetch_array($qq);
if(count($error)==0){
    $query="SELECT * FROM users WHERE email='$email'AND password='$password'";
    $res=mysqli_query($connection,$query);
    if (mysqli_num_rows($qq) > 0) {
        header("Location:../index/index.php");
        exit();
    } else {
        echo "<script>alert('Invalid account');</script>";
    }
}
}
?>

  <div class="wrapper">
    <form method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" required name="email">
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required name="pass">
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember" name="remember">
          <p>Remember me</p>
        </label>
      </div>
<button name="login">Login</button>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>