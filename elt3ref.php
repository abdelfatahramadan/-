<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="تعريف بمطورو الموقع">
        <title> التعريف </title>
        
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $('.sidebarbtn').click(function(){
                        $('.sidebar').toggleClass('active');
                        $('.sidebarbtn').toggleClass('toggle');  
                })
                    $('.card1').click(function(){                               $('.card1').toggleClass('rotate');
                    })
                    $('.card2').click(function(){                     $('.card2').toggleClass('rotate');
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
        <!-- start card -->
        <div class="card1">
            <div class="front">
                <img src="images/moh.jpg" alt="mohamed nasr">
                <h3>ENG\ Mohamed Nasr</h3>
                <p> هندسة شبرا </p>
                <span> اضغط </span>
            </div>
            <div class="back">
                <p> ثانوية عامة علمى رياضة النتيجة %65 ثم معهد فنى صناعى الصحافة نتيجة اولى %76 نتيجة سنة تانية %95 وبالتالى كلية هندسة شبرا </p>
            </div>
        </div>
        <div class="card2">
            <div class="front">
                <img src="images/abdo.jpg" alt="abdelfatah">
                <h3>Tech\ Abdelfatah Ramadan</h3>
                <p> تربية حلوان </p>
                <span> اضغط </span>
            </div>
            <div class="back">
                <p> ثانوية عامة علمى رياضة النتيجة %75 ثم معهد فنى صناعى الصحافة نتيجة سنة اولى %85 نتيجة سنة تانية %92 وبالتالى كلية تربية </p>
            </div>
        </div>
        <!-- end card -->
    </body>
</html>