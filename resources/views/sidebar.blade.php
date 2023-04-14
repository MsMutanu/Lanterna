<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
  <style>
  .openbtn {
  background-color: white;
  color: black;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  font-size: 20px;
}

   
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
  </style>
</head>
<body>
<button class="openbtn" onclick="openNav()">&#9776;</button>
<div id="mySidenav" class="sidenav">
    <ul>
        <li><a href="{{ route('users.index') }}">Dashboard</a></li>
        <li><a href="{{ route('patients.index') }}">Patients</a></li>
        <li><a href="{{ route('products.index') }}">Products</a></li>
        <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
        <li><a href="{{ route('orders.index') }}">Orders</a></li>
        <li><a href="{{ route('deliveries.index') }}">Deliveries</a></li>
        <li><a href="{{ route('employees.index') }}">Employees</a></li>
        <?php // <li><a href="{{ route('reports.index') }}">Reports</a></li> ?>
       
       
    </ul>
</div>
<script>
      function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.addEventListener("click", closeNavOnClickOutside);
  }

  

  /* Close the sidebar if the user clicks outside of it */
  function closeNavOnClickOutside(event) {
    if (!event.target.closest(".sidenav")) {
      closeNav();
    }
  }
    </script>
</body>
</html>