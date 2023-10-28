<?php

session_start();
require_once("config.php");
?>
<?php

$query = "SELECT * FROM `users` WHERE id = '{$_SESSION['id']}'";
$running_query = mysqli_query($conn,$query);

if(mysqli_num_rows($running_query)==1){
    while($result = mysqli_fetch_assoc($running_query)){
         $user_email = $result['email'];
         $user_fullname = $result['fullname'];
         $user_phone = $result['phone'];
         $user_gender = $result['gender'];
         $user_city = $result['city'];
         $user_state = $result['state'];
         $user_age = $result['dob'];
         $user_address = $result['address'];
         $user_pin = $result['pin'];
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .styling{
                color: white;
                font-size: large;
            }
            body{
                /* background-color: #7dd1c2; */
                background-image: linear-gradient(to right bottom, #ff3535e3, #3a0096c9,#ff3535e3 );
            }
        </style>
        <title>User Profile</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="name.css" /> 
        <!-- Bootstrap CSS -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />  
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!--expand for resp collapsing and color schemes -->
  <a class="navbar-brand" href="#">User Login</a><!--for your company, product, or project name. -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown"><!--for grouping and hiding navbar contents by a parent breakpoint. -->
  <ul class="navbar-nav">
      
      
      
      <li class="nav-item">
        <a class="nav-link" href="viewpost2.php">View All Cars</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="result.php">Last Added Result</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="updateuserdetails.php">Update User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
        <div id="profile">
            <!-- <center> -->
            <h1><strong>User Information : </strong></h1><hr><br><br>
            <p class="name"><strong>Email: </strong><?php echo $user_email; ?></p><br><br>
            <p class="name"><strong>Name: </strong><?php echo $user_fullname; ?></p><br><br>
            <p class="name"><strong>Phone: </strong><?php echo $user_phone; ?></p><br><br>
            <p class="name"><strong>Date of Birth: </strong><?php echo $user_age; ?></p><br><br>
            <p class="name"><strong>Gender: </strong><?php echo $user_gender; ?></p><br><br>
            <p class="name"><strong>Address:</strong> <?php echo $user_address; ?></p><br><br>
            <p class="name"><strong>City: </strong><?php echo $user_city; ?></p><br><br>
            <p class="name"><strong>State: </strong><?php echo $user_state; ?></p><br><br>
            <p class="name"><strong>Pin Code: </strong><?php echo $user_pin; ?></p><br><br><br><br><br>
        
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>"><!--it means that the view profile has to be processed in the same page-->
                    <!-- <input type="submit" name="back_btn" value="Back" href="welcome.php"> -->
                <!-- <br><br> <a class="styling" href="Profile_update.php">Update Information</a><br><br> -->
                    <a class="styling" href="welcome2.php">back</a>
                    <a class="styling" href="updateuserdetails.php">Update User Details</a>
                    
                </form>
            </p>
<!-- </center> -->
        </div>
    </body>
</html>