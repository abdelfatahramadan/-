<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="وسائل التواصل">
        <title> معلومات الاتصال </title>
        <link rel="stylesheet" href="css/css.css" type="text/css">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@800&family=Lalezar&family=Lemonada:wght@300&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
        
        
        <script src="/path/to/cdn/jquery.slim.min.js"></script>
        

         
        
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $('.sidebarbtn').click(function(){
                        $('.sidebar').toggleClass('active');
                        $('.sidebarbtn').toggleClass('toggle');
                })
        }) 
        </script>
        
        
        
    </head>
    <body>
        
        <!-- start nav -->
        <nav>
            <button> <a href="user/login.php">Login</a> </button> |
            <button> <a href="user/signup.php">Sign up</a> </button>
        </nav>
        <!-- end nav -->
        <!-- start sidebar -->
        <div class="sidebar"> 
            <ul>
                <li><a href="elmahad.php"> الصفحة الرئيسية </a> </li>
                <li><a href="user/login.php"> المناهج </a> </li>
                <li><a href="table.php"> الجدول </a> </li>
                <li><a href="elt3ref.php"> تعريف </a> </li>
                <li><a href="call.php"> الاتصال </a> </li>
                <li><a href="note.php"> الملاحظات </a> </li>
            </ul>
            <button class="sidebarbtn"> 
                <span>  </span>
            </button>
        </div>
        <!-- end sidebar -->
        <!-- start call -->
        <div class="circle"> 
            <ul>
                <li> <i class="fa fa-facebook-square" style="color: #3b4dde"> </i> </li>
                <li> <i class="fa fa-phone-square" style="color: lightgreen"> </i> </li>
                <li> <i class="fa fa-youtube-play" style="color: red"> </i> </li>
                <li> <i class="fa fa-whatsapp" style="color: darkgreen"> </i> </li>
            </ul>
        </div>
        <!-- end call -->
    </body>
</html>