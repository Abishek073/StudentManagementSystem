<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: absolute;
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
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;

    }

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
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
        <a href="#home">Home</a>
        <a href="{{ url('/students') }}">Student</a>
        <a href="{{ url('/teachers') }}">Teacher</a>
        <a href="{{ url('/courses') }}">Course</a>
        <a href="{{ url('/batches') }}">Batch</a>
        <a href="{{ url('/enrollments') }}">Enrollment</a>
        <a href="{{ url('/payments') }}">Payment</a>
      </div>
    </div>

    <!-- Page content -->
    <div class="col-md-12">

      <div class="content">

        @yield('content')


      </div>

    </div>

    ` <script>
      document.addEventListener("DOMContentLoaded", function() {
        var sidebarLinks = document.querySelectorAll(".sidebar a");

        sidebarLinks.forEach(function(link) {
          link.addEventListener("click", function(event) {
            // Remove active class from all links
            sidebarLinks.forEach(function(link) {
              link.classList.remove("active");
            });

            // Add active class to the clicked link
            link.classList.add("active");
          });
        });
      });
    </script>`
</body>

</html>