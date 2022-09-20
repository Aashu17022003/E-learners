<?php 
include 'db.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}?>
<?php include 'head.php'; 
include 'navbar.php';
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $name = $_POST["name"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $problem = $_POST["problem"];
    

    $sql = "INSERT INTO `contact` ( `name`,`course`, `email`,`problem`, `dt`) VALUES ('$name', '$course','$email','$problem', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }
}
?>
<title>Contact</title>
</head>
<body>
<!-- contact us start  -->
<div class="container cont-c" id="Contact" style="margin-top:150px;">
    <h2 class="text-center mb-4">Contact us</h2><hr>
    <div class="row">
        <div class="col-sm-6">
            <form action="contact.php" method="post">
                <input type="text" id="name" onkeyup="checkButton()" name="name" class="form-control" placeholder="Name"><br>
                <input type="text" id="course" onkeyup="checkButton()" name="course" class="form-control" placeholder="Course"><br>
                <input type="email" id="email" onkeyup="checkButton()" name="email" class="form-control" placeholder="Email"><br>
                <textarea name="problem"  class="form-control" placeholder="How can we help you ?" style="height: 150px;"></textarea><br>
                <button type="submit"class="btn btn-primary" id="send" disabled>Send</button><br><br>
            </form>
        </div>
        <div class="col-md-4 stripe text-white text-center " style="margin-left:30px;">
            <h4>Future Learners</h4>
            <p>Future Learners,Meerut cantt,Meerut - 250001 <br>
                Phone: +919410600011 <br>
                www.futurelearners.com
            </p>
        </div>
    </div>
</div>
<script>
        function checkButton(){
            let name = document.getElementById('name').value;
            let course = document.getElementById('course').value;
            let email = document.getElementById('email').value;
            if((name ==="") || (course==="") || (email==="")){
                send.disabled = true;
            }else{
                send.disabled = false;
            }
        }
    </script>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your query has been submited
    </div> ';
    }
    ?>
<!-- contact us end  -->
<?php include 'footer.php';
?>