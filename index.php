<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/icon.png" type="image/gif">
<style>
body{
  font-family: "Century Gothic", sans-serif;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a, .dropbtn {
     display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #fb5a01;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #fb5a01;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #fb8e01}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li class="dropdown" >
    <a href="#" class="dropbtn active">Time</a>
    <div class="dropdown-content">
      <a href="#">Timesheets</a>
      <a href="#">Attendance</a>
      <a href="#">Reports</a>
      <a href="#"></a>
    </div>
  </li>
</ul>

<h3></h3>
<p></p>

</body>
</html>
