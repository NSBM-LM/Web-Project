<?php
include('session.php');

?>

<html>
<head>
<title>lms-nsbm</title>
<link href="buttons.css" rel="stylesheet" type="text/css"/>
<link href="horizontal Rules.css" rel="stylesheet" type="text/css"/>
<link href="top-header.css" rel="stylesheet" type="text/css"/>
<link href="main-menu.css" rel="stylesheet" type="text/css"/>
<link href="login.css" rel="stylesheet" type="text/css"/>
<link href="lower-footer.css" rel="stylesheet" type="text/css"/>


<script src="change.js" type="text/javascript"></script>
<script src="nsbm-logo.js" type="text/javascript"></script>
<script src="hr.js" type="text/javascript"></script>
<script src="hr2.js" type="text/javascript"></script>
<script src="mouse-over.js" type="text/javascript"></script>
<script src="mouse-over-text.js" type="text/javascript"></script>


</head>

<body>
<hr id="col"/>
<div class="header-menu">
<a href="#"><img id="nsbm" height="200px" width="200px"></a>
<h1 align="center" style="margin-top:-150px;font-size:40px;color:rgba(2,38,181,.99);font-family:impact">National School Of Business Management</h1>
<br/>
<!--
<h1 style="color:blue;font-family:sans-serif,Times,serif;font-weight:bold;font-size:80px;">NSBM</h1>
<h2 style="color:blue;font-family:sans-serif,Times,serif;font-weight:normal;font-size:20px;float:left;margin:0 0 0 0;">Learning Management System</h2>
-->

<?php
echo '<p align="right" style="font-family:serif; margin-top:-50px; font-weight:bold;color:rgb(7,44,169);font-size: 13px;font-style: italic;">You are logged in as &nbsp'.$_SESSION['login_index'].'&nbsp'.$_SESSION['name_initials'].'<a class="logout" id="log" onmouseover="onmouse2()" onmouseout="mouseout2()" style="text-decoration:none;color:rgb(5,32,122):font-size: 20px;font-style:none;" href="logout.php">(Logout)</a></p>';
?>

</div>
<hr id="col2"/>
<div class="all-buttons">
<div class="home">
<a href="#" style="text-decoration: none;color: #ffffff;">Home</a>
</div>
<div class="course">
<button class="coursebtn">Courses</button>
 <div class="course-content">
    <a href="#">SCHOOL OF COMPUTING</a>
    <a href="#">SCHOOL OF MANAGEMENT</a>
    <a href="#">SCHOOL OF ENGINEERING</a>
 </div>
 </div>
<div class="facil"><a href="#" style="text-decoration: none;color: white;">Facilities</a></div>
<div class="student">
<button class="studentbtn">Student</button>
 <div class="student-content">
    <a href="#">SOCIETIES</a>
    <a href="#">CLUBS</a>
    <a href="#">ACTIVITIES</a>
 </div>
 </div>
<div class="about"><a href="#" style="text-decoration: none;color: white;">About Us</a></div>
<div class="sup"><a href="#" style="text-decoration: none;color: white;">Support</a><br/></div>
</div>

<img id="pic" src="old1.png" onmouseover="onmouse()" width="1024px" height="270px" style="position:absolute; left:280px; top:190px; opacity:0.9; z-index:0; border-style:inset; border-color:rgb(11,100,88); border-radius:4px;"/>



<!-- <p style="color:blue;float:right;margin-right:800;"> COURSE CATEGORIES </p>
<div class="body-cat" id="">
<a href="">SCHOOL OF COMPUTING</a><br/>
<a href="">SCHOOL OF MANAGEMENT</a><br/>
<a href="">SCHOOL OF ENGINEERING</a><br/>
</div>
-->
<br/>

<div class="main-menu">
<div class="menu">
<caption>MAIN MENU</caption>
</div>
<div class="menu-content">
<table class="menu" >

<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">NSBM Research Publications</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">NSBM Quarterly News</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Student Handbooks</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Award Handbooks</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Regulations</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Examination Time Tables</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Class Time Tables</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Library Catalog</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Plymouth DLE</a><br/>
</td></tr>
<tr><td>
<img src="book3.png" width="30px" height="30px"/><a href="" style=" text-decoration:none; color:rgb(9,45,217);">Academic Counselling and Pastoral Care</a><br/>
</td></tr>

</table>
</div>
</div>
<iframe style=" float:right;margin-top:-550px;" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ib0pa2go2te9psobii02jc18qk%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Asia%2FColombo" style="border-width:1" width="250" height="250" frameborder="0" scrolling="no"></iframe>


<div class="head">
<caption>LOGIN</caption>
</div>
<div class="up">
<table>
<form action="login.php" method="post" name="log">
<tr><td>Username<br/>
<input type="text" class="user" name="user"><br/>
</tr></td>

<tr><td>Password<br/>
<input type="password" class="pass" name="pass"><br/>
</tr></td>

<tr><td><input class="login-button" type="submit" value="Login" style="margin-left:200px;"/>
</tr></td>
</form>
</table>
</div>

<div class="new-account">
<a id="log1" onmouseover="onmouse3()" onmouseout="mouseout3()" style="color: rgba(52,108,239,.95);text-decoration: none" href="" style="text-decoration:none;">CREATE NEW ACCOUNT</a><br/>
<a id="log2" onmouseover="onmouse4()" onmouseout="mouseout4()" style="color: rgba(52,108,239,.95);text-decoration: none" href="" style="text-decoration:none;">LOST PASSWORD?</a>
</div>

<div class="footer">
<p align="center">National School Of Business Management No 309, High Level Rd, Colombo 05, Sri Lanka.
<br/>Telephone: +94(11)567 2545|5673535 - Email:info@nsbm.lk</p>
</div>
<a href="http://css-validator.org"><img src="validate1.png" alt="css3"></a> <a href="http://validator.w3.org"><img src="validate2.png" alt="html5"></a>
</body>

</html>