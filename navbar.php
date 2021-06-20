<!-- Navbar -->

<body>
<header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="index.php"><span class="logo1">
    <img height="60" width ="70" src = "img/bank1.jpg" class ="img-fluid1">&nbsp;<h6 style="color:white;">SPARKS BANK</h6></span>
  </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_customer.php">View Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer_money.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaction_history.php">Transaction History</a>
        </li>
    </ul>
  </div>

</nav>
</header>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
  <script type="text/javascript">
    $(function(){
      var navbar = $('.header-inner');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
 