<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/servicestyle.css">
    <title>Services</title>
</head>
<body>
    <!-- Navigation Bar  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index-final.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="login.html">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
    <div class="cards mt-5">
        <?php
            $sql = "Select * from `sell`";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
             
        ?>
            <div class="container mt-5 text-light">
                <div class="row justify-content-evenly">
                    <div class="col-md-3 serve p-3">
                        <p class="text-center text-capitalize paraHeading"></p>
                        <p class="my-5 text-center"><img src="../sell/upload/<?php echo $row['image'];?>" width="100" height="100" alt="" /></p>
                        <p class="text-center text-capitalize paraHeading"><?php echo $row['product_name'];?></p>
                        <button class="btn btn-success w-75">Buy Now</button>
                    </div>
                </div> 
        <?php
            }
        ?>
       
            </div>
    </div>
  
</body>
</html>