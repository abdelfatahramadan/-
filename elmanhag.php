<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="منهج شعبة حاسبات">
        <title> المنهج </title>
        <link rel="stylesheet" href="css/css.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@800&family=Lalezar&family=Lemonada:wght@300&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
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
            <button> <a href="user/login.php">Logout</a> </button>
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
        <!-- start المناهج -->
        <div class="table1">
            <table>
                <caption> قسم حاسبات </caption>
                <tr>
                    <th> الترم </th>
                    <th> المواد </th>
                    <th> الدرجات </th>
                </tr>
                <tr>
                    <th rowspan="8"> الاول </th>
                    <td> <a href="#"> فيزياء </a> </td>
                    <td> - </td>
                </tr>
                <tr>
                    <td> <a href="#"> رياضيات </a> </td>
                    <td> - </td>
                </tr>
                <tr>
                <td> <a href="#"> سلامة مهنيه </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> رسم هندسى </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> اساسيات شبكات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> تك ورش </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> تك معلومات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> انجليزي </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <th rowspan="7"> الثانى </th>
                <td> <a href="subject/Logic%20circuits.php"> دوائر منطق </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/C++.php"> برمجة C++ </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/Systems%20analysis.php"> تحليل نظم </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/Electrical.php"> هندسة كهربية </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/english2.php"> انجليزي 2 </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/electronics.php"> تك إلكترونيات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/Connect%20networks.php"> ربط شبكات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <th rowspan="7"> الثالث </th>
                <td> <a href="subject/VB.php"> برمجة مرئية </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/Technical%20reports.php"> تقارير فنية </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/switch.php"> سويتش </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/win.server.php"> نظم تشغيل ويندوز سيرفر </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/Maintenance.php"> صيانة الحاسب الآلى </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/processors.php"> معالجات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="subject/database1.php"> قواعد بيانات </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <th rowspan="7"> الرابع </th>
                <td> <a href="#"> شبكات WAN </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> مشروع كاب </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> قواعد بيانات متقدمة </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> نظم تشغيل لينكس </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> تطبيقات مكتبية </a> </td>
                <td> - </td>
            </tr>
            <tr>
                <td> <a href="#"> متحكمات </a> </td>
                <td> - </td>
            </tr>
        </table>
        </div>
        
        <!-- end المناهج -->
    </body>
</html>