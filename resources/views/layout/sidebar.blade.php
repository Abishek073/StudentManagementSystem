<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  /* position: fixed; */
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: auto;
  padding: auto;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>

<div class="row">
    <div class="col-md-3">
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">Student</a>
  <a href="#contact">Teacher</a>
  <a href="#about">Course</a>
  <a href="#about">Enrollment</a>
  <a href="#about">Payment</a>
</div>
</div>

<!-- Page content -->
<div class="col-md-9">

<div class="content">

 @yield('content')


</div>
  
</div>
</body>
</html>
