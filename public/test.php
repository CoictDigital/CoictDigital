<!DOCTYPE html>
<html lang="en">
<head>
<title>Taest best</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!--===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">  -->
<!--===============================================================================================-->
<!-- <link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css"> -->
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table">
<div class="row header">
<div class="cell">
Full Name
</div>
<div class="cell">
Age
</div>
<div class="cell">
Job Title
</div>
<div class="cell">
Location
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Vincent Williamson
</div>
<div class="cell" data-title="Age">
31
</div>
<div class="cell" data-title="Job Title">
iOS Developer
</div>
<div class="cell" data-title="Location">
Washington
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Joseph Smith
</div>
<div class="cell" data-title="Age">
27
</div>
<div class="cell" data-title="Job Title">
Project Manager
</div>
<div class="cell" data-title="Location">
Somerville, MA
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Justin Black
</div>
<div class="cell" data-title="Age">
26
</div>
<div class="cell" data-title="Job Title">
Front-End Developer
</div>
<div class="cell" data-title="Location">
Los Angeles
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Sean Guzman
</div>
<div class="cell" data-title="Age">
25
</div>
<div class="cell" data-title="Job Title">
Web Designer
</div>
<div class="cell" data-title="Location">
San Francisco
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Keith Carter
</div>
<div class="cell" data-title="Age">
20
</div>
<div class="cell" data-title="Job Title">
Graphic Designer
</div>
<div class="cell" data-title="Location">
New York, NY
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Austin Medina
</div>
<div class="cell" data-title="Age">
32
</div>
<div class="cell" data-title="Job Title">
Photographer
</div>
<div class="cell" data-title="Location">
New York
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Vincent Williamson
</div>
<div class="cell" data-title="Age">
31
</div>
<div class="cell" data-title="Job Title">
iOS Developer
</div>
<div class="cell" data-title="Location">
Washington
</div>
</div>
<div class="row">
<div class="cell" data-title="Full Name">
Joseph Smith
</div>
<div class="cell" data-title="Age">
27
</div>
<div class="cell" data-title="Job Title">
Project Manager
</div>
<div class="cell" data-title="Location">
Somerville, MA
</div>
</div>
</div>
</div>
</div>
</div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</body>
</html> 

<!-- css  -->
<style>
    /*//////////////////////////////////////////////////////////////////
[ FONT ]*/
/* @font-face {
font-family: Poppins-Regular;
src: url('../fonts/poppins/Poppins-Regular.ttf');
}
@font-face {
font-family: Poppins-Bold;
src: url('../fonts/poppins/Poppins-Bold.ttf');
} */
/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
margin: 0px;
padding: 0px;
box-sizing: border-box;
}
body, html {
height: 60%;
font-family: sans-serif;
}
/* ------------------------------------ */
a {
margin: 0px;
transition: all 0.4s;
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
}
a:focus {
outline: none !important;
}
a:hover {
text-decoration: none;
}
/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}
p {margin: 0px;}
ul, li {
margin: 0px;
list-style-type: none;
}
/* ------------------------------------ */
input {
display: block;
outline: none;
border: none !important;
}
textarea {
display: block;
outline: none;
}
textarea:focus, input:focus {
border-color: transparent !important;
}
/* ------------------------------------ */
button {
outline: none !important;
border: none;
background: transparent;
}
button:hover {
cursor: pointer;
}
iframe {
border: none !important;
}
/*//////////////////////////////////////////////////////////////////
[ Table ]*/
.limiter {
width: 80%;
margin: 0 auto;
}
.container-table100 {
width: 80%;
min-height: 100vh;
background:white;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding: 33px 30px;
}
.wrap-table100 {
width: 960px;
border-radius: 10px;
overflow: hidden;
}
.table {
width: 100%;
display: table;
margin: 0;
}
@media screen and (max-width: 768px) {
.table {
display: block;
}
}
.row {
display: table-row;
background: #fff;
}
.row.header {
color: #ffffff;
background: #6c7ae0;
}
@media screen and (max-width: 768px) {
.row {
display: block;
}
.row.header {
padding: 0;
height: 0px;
}
.row.header .cell {
display: none;
}
.row .cell:before {
font-family: Poppins-Bold;
font-size: 12px;
color: #808080;
line-height: 1.2;
text-transform: uppercase;
font-weight: unset !important;
margin-bottom: 13px;
content: attr(data-title);
min-width: 98px;
display: block;
}
}
.cell {
display: table-cell;
}
@media screen and (max-width: 768px) {
.cell {
display: block;
}
}
.row .cell {
font-family: Poppins-Regular;
font-size: 15px;
color: #666666;
line-height: 1.2;
font-weight: unset !important;
padding-top: 20px;
padding-bottom: 20px;
border-bottom: 1px solid #f2f2f2;
}
.row.header .cell {
font-family: Poppins-Regular;
font-size: 18px;
color: #fff;
line-height: 1.2;
font-weight: unset !important;
padding-top: 19px;
padding-bottom: 19px;
}
.row .cell:nth-child(1) {
width: 360px;
padding-left: 40px;
}
.row .cell:nth-child(2) {
width: 160px;
}
.row .cell:nth-child(3) {
width: 250px;
}
.row .cell:nth-child(4) {
width: 190px;
}
.table, .row {
width: 100% !important;
}
.row:hover {
background-color: #ececff;
cursor: pointer;
}
@media (max-width: 768px) {
.row {
border-bottom: 1px solid #f2f2f2;
padding-bottom: 18px;
padding-top: 30px;
padding-right: 15px;
margin: 0;
}
.row .cell {
border: none;
padding-left: 30px;
padding-top: 16px;
padding-bottom: 16px;
}
.row .cell:nth-child(1) {
padding-left: 30px;
}
.row .cell {
font-family: Poppins-Regular;
font-size: 18px;
color: #555555;
line-height: 1.2;
font-weight: unset !important;
}
.table, .row, .cell {
width: 100% !important;
}
}
</style>
