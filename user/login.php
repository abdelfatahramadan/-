<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="description" content="">
        <title> تسجيل الدخول </title>
        <link type="text/css" rel="stylesheet" href="../css/css.css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@800&family=Lalezar&family=Lemonada:wght@300&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css.css">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $('.sidebarbtn').click(function(){
                        $('.sidebar').toggleClass('active');
                        $('.sidebarbtn').toggleClass('toggle');
                })
        }) 
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <!-- start sidebar -->
        <div class="sidebar"> 
            <ul>
                <li><a href="../elmahad.php"> الصفحة الرئيسية </a> </li>
                <li><a href="../elt3ref.php"> تعريف </a> </li>
                <li><a href="../table.php"> الجدول </a> </li>
                <li><a href="../call.php"> الاتصال </a> </li>
                <li><a href="../note.php"> الملاحظات </a> </li>
            </ul>
            <button class="sidebarbtn"> 
                <span>  </span>
            </button>
        </div>
        <!-- end sidebar -->
    
	   <div class="container h-100">
           <div class="d-flex justify-content-center h-100">
               <div class="user_card">
                   <div class="d-flex justify-content-center form_container">
                       <form method="post">
                           <div class="input-group mb-3">
								<table>
                                    <tr>
                                        <td> <label for="username"><b>Username</b></label> </td>
                                        <td> <input type="text" name="username" class="form-control" id="username" value="<?php if(isset($_COOKIE['usernamecookie'])) {echo $_COOKIE['usernamecookie'];} ?>" placeholder="enter username" required> </td>  
                                    </tr>
                                    <tr>
                                        <td> <label for="password"><b>Password</b></label> </td>
                                        <td> <input class="form-control" id="password" type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie'];} ?>" placeholder="enter password" required>  </td>   
                                    </tr>
                                </table>
                           </div>
                            <input type="checkbox" id="remember-me" name="remember">
                            <label for="remember-me">Remember me</label>
                           <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" name="login" class="btn btn-primary" id="register">Sign in</button>
                           </div>
	                   </form>
                   </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                       <button> <a href="signup.php">Sign up</a></button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>

                
            
<?php

require 'db.php';


session_start();

if(isset($_POST['login'])){

	$user = $_POST['username'];
	$pass = $_POST['password'];


	$qu ="select * from users where username = '$user' && password = '$pass'";

	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		$_SESSION['username'] = $user;
			if(isset($_POST['remember'])) {
				setcookie('usernamecookie',$user,time()+86400);
				setcookie('passwordcookie',$pass,time()+86400);
				header("Location: login.php");
			}
			else{
				header("Location: ../elmanhag.php");
			}
		
	}else{
		echo 'username or password error';
	}
}

?>
