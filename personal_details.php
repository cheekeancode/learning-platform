<?php 

    include("connection.php");

    if(!isset($_SESSION["tutor_name"])){
        header("location: tutorlogin.html");
    }

    // $sql = "SELECT * FROM tutor";

    // $result = mysqli_query($con, $sql);

    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);
    // echo($_SESSION["tutor_name"]);

    
?>

<style>
    /* .wrapper{
        background-color: violet;
        padding: 2px;
        padding-top: 30px;
        margin-left:50px;
    } */

    .row{
        background-color: lightgrey;
        padding: 100px;
        margin-left: 50px;
        margin-right: 50px;
        min-height: 470px;
        padding-top: 20px;
    }

    .col{
        float: left;
        width: 45%;
        padding: 35px;
        padding-left: 0px;
        padding-top: 60px;
        margin-right: 20px;
    }

    .col p{
        font-size: 18pt;
        margin-bottom: 20px;
    }

    form input[type="submit"]{
        float:right;
        border: solid green 1px;
        background-color: lightgreen;
        padding: 10px 30px;
        border-radius: 10px;

    }

    form input[type="submit"]:hover{
        background-color: green;
        
    }

</style>


<div id='wrapper' class="wrapper" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    
    <div class="row">
        <h1 style="padding-top: 30px; padding-bottom:10px;">Personal Details</h1>
        <hr style="border: 1px solid black">
        <div class=col>
        <img src="data:image/jpg;base64, <?php base64_encode($my_user)?>" width="380px" height="380px">
        </div>
        <div class=col>
            <p>Name: <?php echo($_SESSION['tutor_name'])?></p>
            <p>Email: <?php echo($_SESSION['tutor_email'])?></p>
            <p style="white-space:pre-wrap;">Education:<br><?php echo($_SESSION['tutor_education'])?></p>
            <p style="margin-bottom: 50px;">Motto: <?php echo($_SESSION['tutor_motto'])?></p>
                <form action="tutor_upd.php" method="post" >            
                    <input type="hidden" name="id" value="<?php echo ($_SESSION['tutor_id']) ?>" class="btn btn-info btn-xs edit_data" />
                    <input type="submit" name="edit" class="btn btn-success" value="EDIT">
                </form>
        </div>
    </div>
</div>

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

</script> -->