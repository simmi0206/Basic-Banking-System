<!doctype html>
<html lang="en">
   <head>
    <!--meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"crossorigin="anonymous">
    <link  rel="stylesheet" href="css/newstyle.css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

     <title>Basic Banking System</title>

</head>
<body>
<header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
         <a class="navbar-brand" href="index.php"><span class="logo1">
             <img height="60" width ="70" src = "img/bank1.jpg" class ="img-fluid1">&nbsp;<span id = "lg"><h6 style="color:white">SPARKS BANK</h6></span></span>
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
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
          </ul>
       </div>
     </nav>
</header>

<div class="main-content">
<section class="content-banner">

  <div class="row intro py-1" style = "width: 100%;">
    <div class="col-sm-12 col-md">
      <div class="heading text-center1 my-5">
        <h2 style="color:white">Welcome to </h2>
          <h1 style="color:white">SPARKS BANK</h1>
          <h3 id = "text">Fastest and Secure way to transfer money</h3>
          <br>
          <div class="container">
            <button type="button" class="btn btn-1" data-toggle="collapse" data-target="#demo">Get Started</button>
               <div id="demo" class="collapse">
                <div class="row activity text-center">
                <div class="right">
                   
                  <div class = "box">
                   <center>
                    <a href="view_customer.php">
                     <img src = "img/girl2.jpg" class = "logo">
                     <button class = "b1">View Customers</button></a>
                   </center>
                  </div>

                   <div class = "box">
                    <center>
                      <a href="transfer_money.php">
                       <img src = "img/m_transfer.jpg" class = "logo">
                        <button style = "height:55px;"class = "b1"> Transfer Money </button>
                      </a>
                    </center>
                    </div>

                 <div class = "box">
                   <center>
                    <a href="transaction_history.php">
                     <img src = "img/m_history.jpg" class = "logo">
                     <button class = "b1">Transaction History</button></a>
                   </center>
                </div>

              </div>
            </div>
            </div>
          </div>
    </div>
      <a name = "about"></a>
       </div>
          <div class="col-sm-12 col-md img text-center">
           <img width = "382" height ="272" src="img/money.jpg" class="img-fluid pt-2">
       </div>
      </div>
 </div>

</section>

<section>
    <div class="container-fluid">
      <!-- About Us section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1 style="margin-bottom: 40px;margin-top: -90px;text-align: center;">About Us</h1>
                  <div class="right1">
                   <div class = "box1"><center>
                     <a href= "https://www.facebook.com/thesparksfoundation.info/">
                       <img src = "img/facebook.png" class = "logoA">
                          <h3 class = "ab">Facebook<h3></a></center>
                   </div>

                    <div class = "box1"><center>
                      <a href= "https://www.instagram.com/thesparksfoundation.info/?hl=en">
                       <img src = "img/insta.png" class = "logoA">
                       <h3 class = "ab">Instagram</h3></a></center>
                    </div>

                    <div class = "box1"><center>
                       <a href="https://www.linkedin.com/company/the-sparks-foundation/">
                        <img src = "img/linkedin.png" class = "logoA">
                        <h3 class = "ab">Linkedin</h3></a></center>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>
  </section>
  
  <section>

    <h1 style = "text-align: center;color:white; margin-top: -60px;" class="heading" ><a name = "contact">Contact Us</a></h1>
    <div class="container">

      <div class="row">

        <div style = "margin-left: 17%;"class="col-lg-8 col-lg-offset-2">

           <form id="contact-form" method="post" role="form">

               <div class="messages"></div>

                  <div class="controls">

                    <div class="row">

                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="form_name">Firstname *</label>
                               <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                               <div class="help-block with-errors"></div>
                           </div>
                         </div>

                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="form_lastname">Lastname *</label>
                               <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                               <div class="help-block with-errors"></div>
                            </div>
                        </div>
                       </div>

                       <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                             </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_phone">Phone</label>
                              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                              <div class="help-block with-errors"></div>
                           </div>
                          </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="form_message">Message *</label>
                               <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                               <div class="help-block with-errors"></div>
                            </div>
                         </div>
                        <div class="col-md-12">
                          <input type="submit" name="ok" style = "margin-left:40%;"class="btn btn-1 btn-send" value="Send message">
                        </div>
                      </div>
                    </div>
                </form>
            <?php 
            if(isset($_POST['ok'])){
               include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Details successfully Submitted.Thank you');</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>
                </div>

            </div>

        </div>

  </section>
 
  <footer class="text-center mt-4 py-2">
        <p>&copy 2021 All Rights are Reserved &nbsp;&nbsp;made by <b>SIMRAN KRISHNA</b> <br> The Sparks Foundation</p>
  </footer>

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

    $(document).ready(function(){
    $(".ab").hover(function(){
    $(this).css("color", "hotpink");
    }, function(){
    $(this).css("color", "#6f42c1");
    });
  });
  </script>
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
 
</body>
</html>