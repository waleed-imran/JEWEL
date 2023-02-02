<?php
include "connect.php";


if(isset($_POST['register'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $number = $_REQUEST['number'];

   

    $user_insert ="INSERT INTO `user`(`name`, `email`, `password`,`number`) VALUES ('$name','$email','$password','$number')";
    $res = mysqli_query($con,$user_insert);

    if($res)
    {
        echo "<script>
        window.location.href='login.php'</script>";
        
    }
    else{
        echo "<script> alert('Acc Reg Failed')</script>";
    }
}
?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);


  

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 1px solid blue;
  background: transparent;
  width: 100%;
  border: 0;
  padding: 15px;
  color: blue;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: blue;
  color: white;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: blue;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
.h{
  color:blue;
}

 </style>
</head>
<body>
<div class="login-page">
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->


    <form class="login-form" method="POST" action="" >
      <h1 class="h">USER REGISTRATION</h1>
    <input required type="name" name="name" class="form-control" id="floatingInput" placeholder=" Enter Your name">
    <input required type="email" name="email" class="form-control" id="floatingInput" placeholder=" Enter Your Email">
    <input required type="password" name="password" class="form-control" id="floatingInput" placeholder="Enter Your Password">
    <input required type="number" name="number" class="form-control" id="floatingInput" placeholder="Enter Your number">

   
      <button input type="submit" value="register" name="register"class="btn btn-outline-primary py-3 w-100 mb-4">Submit</button>
      <p class="message">already registered? <a href="login.php">Login here</a></p>
 
   
    </form>
  </div>
</div>
  
<script></script>
</body>
</html>