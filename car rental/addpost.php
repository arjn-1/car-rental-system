<?php

//connecting to the database
$db = mysqli_connect("localhost", "root", "", "car rental");

$msg="";//new empty variable

//if  upload button is pressed
if(isset($_POST['upload'])){
    //get all the data from the form
    $yourname = $_POST['writename'];
    $yourimage = $_FILES["putimage"]["name"];
    $yourdescription = $_POST['description'];
    $yourrent = $_POST['rent'];
    $tempname = $_FILES["putimage"]["tmp_name"];

    //$target = basename($yourimage, "postimages/");
    $target = "postimages/".basename($yourimage);
     
    // if(($yourimage == "NULL") && ($yourname == "NULL") && ($yourdescription = "NULL"))
    // {
    //   echo "you did not fill one of the required fields:";

    // }
    // else{
    $sql = "INSERT INTO posts (name , description , image , rent ) VALUES ('$yourname', '$yourdescription', '$yourimage', '$yourrent')";
    
    // $yourname = "NULL";
    // $yourimage = "NULL";
    // $yourdescription = "NULL";
    mysqli_query($db, $sql);//stores the submitted data into the database table images
    // }
    //moving the image into the folder
    if(move_uploaded_file($tempname, $target)){
      echo  $msg = "image uploaded successfully:";
      header('location: welcome.php');
    }
    else{
      echo  $msg = "Task Failed Successfully";
    }

    //$result = mysqli_query($db, "SELECT * FROM posts");
}
mysqli_close($db);

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
      <h3>Add Post:</h3>
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
            <label for="inputname">Rent</label>
            <input
              type="text"
              class="form-control"
              name="rent"
              id="inputrent"
              placeholder="Write your full name here:"
              required
            />
          </div>
          
          <input type="submit" name="upload" value = "UPLOAD" class="btn btn-primary "/>
          <a class="styling" href="welcome.php">back</a>
          <a class="styling" href="viewpostadmin.php">To View the Posts</a>
      </form>
</div>
    </body>
</html>
