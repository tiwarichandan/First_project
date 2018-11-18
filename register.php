<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 15%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    
}

.imgcontainer {
    text-align: center;
    margin: 50px 0 12px 0;

}

img.login-icon {
    width: 10%;
    border-radius: 10%;
   
}

.container {
    padding: 10px;
    margin-left:550px
}

span.psw {
    
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */

</style>
</head>
<body>
    <header>
 <a href="index.html"><img src="icon.png" class="icon"></a>
<div class="header-nav">
    <a href="index.html" class="link">Home</a>
    <a href="index.html#about" class="link">About</a>
    <a href="login.php" class="button">Login</a>
    <a href="register.php" class="button">Registration</a>
</div>
</header>

<h2>Register </h2>

<form action = "" method = "post">
  <div class="imgcontainer">
    <img src="register.png" alt="login" class="login-icon">
  </div>

  <div class="container">
    <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="username" required>
    <br>
    <label for="mobile"><b>Mobile No.</b></label><br>
    <input type="text" placeholder="Enter Mobile_No." name="mobile" required>
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
        
    <button type="submit" name="register">Submit</button>
    
  </div>

  
</form>
<footer>
 <div id="services">
    <h3>Our Services</h3>
    <ul>
     <li>Web Development</li>
     <li>Software Development</li>
     <li>E-Commerace Development</li>
     <li>Mobile App Development</li>
     <li>CMS Development</li>
     <li>iOS Development</li>
     <li>Bulk SMS</li>
    </ul>
 </div>
 
 <div id="address">
  <h2>Address</h2>
    #369, jagajoythi, 3rd Floor, 2nd Main Road,
    <br/>Jnanabharathi, Mariyappanapalya Main Rd, 
    <br/>Jnana Jyothi Nagar, Gnana Bharathi, Bengaluru,
   <br/>Karnataka 560056
    <br/>Phone:+91 7979099710
   <br/>info@kreativedigitalsolution.com
 </div>
 <div id="copyright">
  <h5 align="center">&copy Copyright | <a href="index.html#" id="copyright_link">Kreative Digital Solution</a> 2015-18</h5>
 </div>
</footer>

</body>
</html>

<?php
if(isset($_POST["register"]))
{
 $name = $_POST["name"];
 $username = $_POST["username"];
 $mobile= $_POST["mobile"];
 $pass =$_POST["password"];
 $register="INSERT INTO login(name, username, Mobile_No, password) VALUES('$name', '$username', '$mobile', '$pass')";
 $result = $conn->query($register);

if($result)
      {
   
        
        echo'<script>alert("Success!");</script>';
       }
     
  else
      {
        echo'<script>alert("Failed!");</script>';
      }
    }
?>