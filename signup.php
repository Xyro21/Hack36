<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet"  href="home.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Full Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Full Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Age</label>
          <input type="Age" 
                 name="age" 
                 placeholder="Write Your Age"><br>

                 <label>Blood Group</label>
          <input type="BG" 
                 name="bg" 
                 placeholder="Ex :- B+, AB- etc."><br>
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password </label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"
                 id="myInput"
                 >
                 <span style="margin-left: 60%;">Show Password</span>
                 <input type="checkbox" 
                 onclick="myFunction()"
                 style="margin-left: 45%; margin-top:-3%">
                 
          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"
                 id="ourInput">
                 
                 <span style="margin-left: 60%;">Show Password</span>
                 <input type="checkbox" 
                 onclick="ourFunction()"
                 style="margin-left: 45%; margin-top:-3%">

     	<button type="submit">Sign Up</button>
          <a href="index1.php" class="ca">Already have an account?</a>
     </form>

     <script>
          function myFunction() {
               var x = document.getElementById("myInput");
               if (x.type === "password") {
               x.type = "text";
               } else {
                x.type = "password";
               }
               }

               function ourFunction() {
               var x = document.getElementById("ourInput");
               if (x.type === "password") {
               x.type = "text";
               } else {
                x.type = "password";
               }
               }
     </script>
</body>
</html>