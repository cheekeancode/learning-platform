<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Admin Update User Information</title>
</head>

<style>
    body{
    background-color:skyblue;
}

</style>
<body>
    <?php

    session_start();
    require("connection.php");

    $id = $_POST['id'];

    $query = "SELECT * FROM tutor WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
    
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2>Tutor Update Personal Details</h2>
                            <hr>
                            <br>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for="">FULL NAME</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Tutor's Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">EMAIL</label>
                                    <input  type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="Tutor's Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">EDUCATION</label>
                                    <textarea id="post-text" name="education" class="form-control" cols="30" rows="10" placeholder="Edit here"><?php echo $row['education'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">MOTTO</label>
                                    <input style="margin-bottom:80px;" type="text" name="motto" class="form-control" value="<?php echo $row['motto'] ?>" placeholder="Tutor's Motto">
                                </div>
                                <button type="submit" name="update" class="btn btn-primary" id="update_post"> Update Data </button>

                                <a href="tutor.php?personal_details" class="btn btn-danger"> CANCEL </a>
                            </form>

                        </div>
                    </div>
                    
                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $education = $_POST['education'];
                        $motto = $_POST['motto'];

                        $query = "UPDATE tutor SET name='$name', email='$email', education='$education', motto='$motto' WHERE id='$id'  ";
                        $query_run = mysqli_query($con, $query);

                        if($query_run)
                        {   
                            $_SESSION['tutor_name'] = $name;
                            $_SESSION['tutor_email'] = $email;
                            $_SESSION['tutor_education'] = $education;
                            $_SESSION['tutor_motto'] = $motto;
                            echo '<script> alert("Data Updated"); window.location.href="tutor.php?personal_details"</script>';
                            // header("location: admin.php?user_information");
                        }
                        else
                        {
                            echo '<script> alert("Data Updated Unsuccessfullly"); </script>';
                        }
                    }
                    ?>

                </div>
            </div>
            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</body>
</html>

<!-- <script>
   document.getElementById('update_post').addEventListener('click', function () {
  var post = document.createElement('p');
  var postText = document.getElementById('post-text').value;
  post.textContent = postText;
  post.innerHTML = post.innerHTML.replace(/\n/g, '<br>\n');  // <-- THIS FIXES THE LINE BREAKS
  var card = document.createElement('div');
  card.appendChild(post);
  var cardStack = document.getElementById('card-stack');
  cardStack.insertBefore(card, cardStack.firstChild);
});
<script/> -->