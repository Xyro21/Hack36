<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0fbb762279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard.css">

    <style>
         * {
              margin: 0;
         }
     </style>

    <title>Home, <?php echo $_SESSION['name']; ?> </title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid" >
    <img src="images/Group 332.svg" class = "img-fluid" alt="responsive" style="width: 70px; height: 70px;">
    <a class="navbar-brand" href="profile.php" style="margin-left: 45%;"> <i class="far fa-user-circle"></i> Hello, <?php echo $_SESSION['name']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-home" ></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Services.php"> <i class="fas fa-cog"></i> Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="far fa-id-badge"></i> About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="ourTeam.html"> <i class="fab fa-teamspeak"></i> Our Team</a></li>
            <li><a class="dropdown-item" href="#"> <i class="far fa-eye"></i> Vision</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"> <i class="far fa-question-circle"></i> FAQ's</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php" tabindex="-1"> <i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<sidebar>
      <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" id="logo"><img src="images/Group 332.svg" class="responsive img-fluid" id="zoom" style="width: 200px; height: 200px; margin-top: -77px; margin-left: 15px;"></a>  
  <div class="fonts">
  <a href="#"><i class="fas fa-house-user"></i><span>Home</span></a>
  <a href="#"><i class="fas fa-table" style="padding:1px;"></i><span>Explore</span></a>
  <a href="#"><i class="far fa-bookmark" style="padding: 4px;"></i><span>Saved</span></a>
  <a href="#"><i class="far fa-file-alt" style="padding: 3px;"></i><span>Subscription</span></a>
  <a href="#"><i class="fas fa-universal-access"></i><span>Sales</span></a>
  <a href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
  <a href="logout.php" style="margin-top: 17%;"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
  <hr>
</div>
<div class="card" style="width: 13rem; margin-left: 6%;">
  <img src="images/32px-icon-inside.svg" class="card-img-top" id="zoom" alt="..." style="height: 80px; width: 80px; align-self: center; margin-top: 12%;">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title">Track your pet <br>vaccinations</h5>
    <p class="card-text">It is a limited time offer that will expire soon.</p>
    </div>
    <a href="checkout.html"><button type="button" id="paymentclick" class="btn btn-primary" style="margin-left: 6%; width: 8rem; font-size: 2vh;">Book Now -></button>
    
  <a href="#"><button type="button" class="btn btn-outline-danger gap-2" style="margin-left: 6%; width: 8rem; font-size: 2vh;">More Info</button></a>
</a>
    
</div>
</div>


<div id="main" style="margin-top: -2%; margin-left: -4px;">
  <button class="openbtn" id="zoom" onclick="openNav()"><i class="fas fa-caret-right" style="align-self: center;"></i></button>
</div>
    </sidebar>
    <div class = "row">

    <div class="jzdbox1 jzdbasf jzdcal" style="margin-top: 4%; margin-left: 18%; height: 300px; margin-bottom: 40px;">

<div class="jzdcalt">June 2017</div>

<span>Su</span>
<span>Mo</span>
<span>Tu</span>
<span>We</span>
<span>Th</span>
<span>Fr</span>
<span>Sa</span>


<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span>1</span>
<span class="circle" data-title="My 25th birthday!">2</span>
<span>3</span>
<span>4</span>
<span>5</span>
<span>6</span>
<span>7</span>
<span>8</span>
<span>9</span>
<span>10</span>
<span>11</span>
<span class="circle" data-title="2 month anniversary!">12</span>
<span>13</span>
<span>14</span>
<span>15</span>
<span>16</span>
<span>17</span>
<span>18</span>
<span>19</span>
<span>20</span>
<span>21</span>
<span class="circle" data-title="#MusicMonday - share your favorite song!">22</span>
<span>23</span>
<span>24</span>
<span>25</span>
<span>26</span>
<span>27</span>
<span>28</span>
<span>29</span>
<span>30</span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
</div>

<div class="card" style="width: 20rem; margin-right: 6%; border-radius: 20px 0px 20px 0px; background: #F5F6FA; border:none">
  <div class="card-body">
    <h5 class="card-title">Family Member 1 <img src="images/Ellipse 12.svg" class = "img-fluid" alt="responsive" style="margin-left: 7%;"></h5>
    <h5 class="card-title" style="margin-top:11%;">Family Member 3 <img src="images/Ellipse 12.svg" class = "img-fluid" alt="responsive" style="margin-left: 6%;"></h5>
    <h5 class="card-title" style="margin-top:11%;">Family Member 3 <img src="images/Ellipse 12.svg" class = "img-fluid" alt="responsive" style="margin-left: 6%;"></h5>
    <h5 class="card-title" style="margin-top:11%;">Family Member 4 <img src="images/Ellipse 12.svg" class = "img-fluid" alt="responsive" style="margin-left: 6%;"></h5>
    <h5 class="card-title" style="margin-top:11%;">Family Member 5 <img src="images/Ellipse 12.svg" class = "img-fluid" alt="responsive" style="margin-left: 6%;"></h5>
    <button type="button" class="btn btn-outline-warning" style="width: 10rem;">Add Member +</button>
  </div>
</div>
    </div>
<div class = "row">

<div class="card row" id="cardss" style="width: 18rem; margin-top: 3%; margin-left:10%; border: none; background: #F5F6FA; border-radius: 20px 0px 20px 0px;">
  <img src="images/5.svg" class="card-img-top" alt="responsive" style="width: 200px; height: 200px; margin-left: 13%;">
  <div class="card-body">
    <p class="card-text" style='color: #384364;'>Institution name <br> Vaccine name <br> 20/11/10 <br> 2:00 pm</p>
  </div>
</div>

<div class="card row" id="cardss" style="width: 18rem; margin-top: 3%; margin-left:10%; border: none; background: #4F63FF; border-radius: 20px 0px 20px 0px;">
  <img src="images/6.svg" class="card-img-top" alt="responsive" style="width: 200px; height: 200px; margin-left: 13%;">
  <div class="card-body">
    <p class="card-text" style="color: white;">Institution name <br> Vaccine name <br> 20/11/10 <br> 2:00 pm</p>
  </div>
</div>
<div class='row'>

<div class="card" style="width: 25rem; margin-left: 70%; margin-top: -200px; border-radius: 20px 0px 20px 0px; background: #F5F6FA; border:none">
  <div class="card-body" style="color: #384364;">
    <h5 class="card-title">News 1 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 2 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 3 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 4 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 5 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 6 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 7 : headline ---------------- </h5>
    <h5 class="card-title" style="margin-top:11%;">News 8 : headline ---------------- </h5>
  </div>
</div>
</div>
</div>

        

<div class = "row" style="margin-top: -300px;">

<div class="card row" id="cardss" style="width: 18rem; margin-top: 3%; margin-left:10%; border: none; background: #4F63FF; border-radius: 20px 0px 20px 0px;">
  <img src="images/6.svg" class="card-img-top" alt="responsive" style="width: 200px; height: 200px; margin-left: 13%;">
  <div class="card-body">
    <p class="card-text" style="color: white;">Institution name <br> Vaccine name <br> 20/11/10 <br> 2:00 pm</p>
  </div>
</div>

<div class="card row" id="cardss" style="width: 18rem; margin-top: 3%; margin-left:10%; border: none; background: #F5F6FA; border-radius: 20px 0px 20px 0px;">
  <img src="images/5.svg" class="card-img-top" alt="responsive" style="width: 200px; height: 200px; margin-left: 13%;">
  <div class="card-body">
    <p class="card-text" style='color: #384364;'>Institution name <br> Vaccine name <br> 20/11/10 <br> 2:00 pm</p>
  </div>
</div>


</div>


 
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script>
      /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
    </script>
  </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

