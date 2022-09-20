<?php 
include 'db.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}?>
<?php include 'head.php' ;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $course_name = $_POST["course_name"];
    $detail = $_POST["detail"];
    $pic_url = $_POST["pic_url"];
    $lang_doc = $_POST["lang_doc"];

    $sql = "INSERT INTO `courses` ( `course_name`, `detail`, `pic_url`,`lang_doc`, `date_time`) VALUES ('$course_name', '$detail','$pic_url','$lang_doc', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }
}
?>
<title>Add courses</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container my-4" >
     <h1 class="text-center" style="margin-top:200px;">Add courses here</h1>
     <form action="addcourses.php" method="post">
        <div class="form-group">
            <label for="course_name">Course name</label>
            <input type="text" onkeyup="checkButton()" class="form-control" id="course_name" name="course_name" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="detail">Course detail</label>
            <input type="text"  onkeyup="checkButton()" class="form-control" id="details" name="detail" >
            
        </div>
        <div class="form-group">
            <label for="pic_url">Picture url</label>
            <input type="text" onkeyup="checkButton()" class="form-control" id="pic_url" name="pic_url" >
            
        </div>
        <div class="form-group">
            <label for="lang_doc">Documentation url</label>
            <input type="text" onkeyup="checkButton()" class="form-control" id="lang_doc" name="lang_doc" >
            
        </div>
         <br>
        <button type="submit"  class="btn btn-primary" id="addcourse" disabled>Add Course</button>
     </form>
    </div>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Course added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
    </div> ';
    }
    ?>
    <script>
        function checkButton(){
            let courseName = document.getElementById('course_name').value;
            let details = document.getElementById('details').value;
            let pic_url = document.getElementById('pic_url').value;
            let lang_doc = document.getElementById('lang_doc').value;
            let addcourse = document.getElementById('addcourse');

            if((courseName ==="") || (details==="") || (pic_url==="") || (lang_doc==="")){
                addcourse.disabled = true;
            }else{
                addcourse.disabled = false;
            }
        }
    </script>
    <?php require 'footer.php' ?>