<?php

//connecting to the database
// $ab = mysqli_connect("localhost", "root", "", "car rental");
include("config.php");
?>
<?php

$msg="";//new empty variable

//if  upload button is pressed
if(isset($_POST['up'])){
    //get all the data from the form
    $urname = $_POST['writename'];
    $urimage = $_FILES["putimage"]["name"];
    $urdescription = $_POST['description'];
    $urcontact = $_POST['contact'];
    $urprice = $_POST['price'];
    $tempname = $_FILES["putimage"]["tmp_name"];

    //$tar = basename($urimage, "postimages/");
    $tar = "carsellimg/".basename($urimage);
     
    // if(($urimage == "NULL") && ($urname == "NULL") && ($urdescription = "NULL"))
    // {
    //   echo "you did not fill one of the required fields:";

    // }
    // else{
    $sql_post = "INSERT INTO user_sell (name , description , image ,contact, price ) VALUES ('$urname', '$urdescription', '$urimage','$urcontact', '$urprice')";
    
    // $urname = "NULL";
    // $urimage = "NULL";
    // $urdescription = "NULL";
    mysqli_query($conn, $sql_post);//stores the submitted data into the database table images
    // }
    //moving the image into the folder

    // if (!mysqli_query($conn, $sql_post)) {
    //     echo("Error description: " . mysqli_error($conn));
    //   }


    if(move_uploaded_file($tempname, $tar)){
      echo  $msg = "image uploaded successfully:";
      header('location: welcome2.php');
    }
    else{
      echo  $msg = "Task Failed Successfully";
    }

    //$result = mysqli_query($db, "SELECT * FROM posts");
}
mysqli_close($conn);

?>





<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link href="./style3.css" rel="stylesheet" />   
    
    <title>
            add post:
        </title>
    </head>
    <body>
    <div class="container mt-4">
      <h3>Add Your Post To Sell :</h3>
      <hr />
      <form action=""  enctype="multipart/form-data" method="post">
        <div class="form-row">
          <div class="form-group col-md-15">
            <label for="inputname">Name</label>
            <input
              type="text"
              class="form-control"
              name="writename"
              id="inputname"
              placeholder="Write your full name here:"
              required
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputimage">Image</label>
            <input
              type="file"
              class="form-control"
              id="inputimage"
              name="putimage"
              required
            />
          </div>
          <div class="form-group col-md-15 col-">
            <label for="inputdescription">Description:</label>
            <textarea name="description" 
            required class="form-control"
              id="inputdescription"
              rows="4"
              placeholder="Add your description here:"
              required
            ></textarea>
          </div>
          <div class="form-group col-md-15">
            <label for="inputcontact">Contact</label>
            <input
              type="text"
              class="form-control"
              name="contact"
              id="inputcontact"
              placeholder="Write your contact info here:"
              required
            />
          </div>
          <div class="form-group col-md-15">
            <label for="inputprice">Price</label>
            <input
              type="text"
              class="form-control"
              name="price"
              id="inputprice"
              placeholder="Write price here:"
              required
            />
          </div>
          
          <input type="submit" name="up" value = "up" class="btn btn-primary "/>
          <a class="styling" href="welcome2.php">back</a>
          <a class="styling" href="viewpost_user_sell.php">To View the Posts</a>
      </form>
</div>
    </body>
</html>
