<?php 
include 'db.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}?>
<?php include 'head.php' ;
include 'navbar.php';
include 'db.php';
?>
<title>Cources</title>
</head>

<body>
    <!-- c banner -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="img/banner.jpeg" alt="banner" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
        </div>
    </div>
    <!-- c banner end  -->
    <div class="container my-4" id="ques">
        <h2 class="text-center mt-4">Courses</h2>
        <hr>
        <div class="row my-4">
            <?php 
         $sql = "SELECT * FROM `courses`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          $id = $row['sno'];
          $cat = $row['course_name'];
          $desc = $row['detail'];
          $img = $row['pic_url'];
          $lang_doc = $row['lang_doc'];
          echo '<div class="col-sm-4 my-2">
                  <div class="card" >
                      <img height ="200px "src="'. $img .'" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">' . $cat . '</h5>
                          <p class="card-text">' . substr($desc, 0, 90). '... </p>
                          <button type="button" class="btn btn-primary"><a href="'. $lang_doc .'" target="_blank" style="text-decoration: none;color: white;">View Documentation</a> </button>
                      </div>
                  </div>
                </div>';
         } 
         ?>
        </div>
    </div>
    <!-- cources end -->
    <?php include 'footer.php';
?>