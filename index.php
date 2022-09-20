<?php 
include 'db.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}?>
<?php
include 'head.php';
include 'navbar.php';
?>
<title>Future learner</title>
</head>
<body>
<!-- backgound -->
<div class="container-fluid video-mar">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/bac2.mp4" >
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Future Learners </h1>
        <small class="my-content">Learn more skills, be more competitive</small><br>
        <em  class="btn btn-danger m-1 "><?php echo $_SESSION['username']?></em>
    </div>
</div>
<!-- end backgound -->
 <!-- stat text banner -->
 <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5> <i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
        </div>        
        <div class="col-sm">
            <h5> <i class="fas fa-users mr-3"></i>Instructions</h5>
        </div>        
        <div class="col-sm">
            <h5> <i class="fas fa-keyboard mr-3"></i>Lifetime Gurantee</h5>
        </div>        
        <div class="col-sm">
            <h5> <i class="mr-3"></i>$Money back Gurantee</h5>
        </div>        
    </div>
 </div>
 <!-- end text banner  -->
 <!-- popular courses -->
 <div class="container my-4" id="ques">
        <h2 class="text-center mt-4">Popular Courses</h2>
        <hr>
<div class="row my-4">
          <div class="col-sm-4 my-2 card-item">
                  <div class="card" >
                      <img src="https://content.techgig.com/thumb/msid-80100245,width-860,resizemode-4/8-Steps-to-master-Python-programming-for-Data-Science.jpg?88712" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">Python</h5>
                          <p class="card-text">Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers</p>
                          <button type="button" class="btn btn-primary"><a href="https://docs.python.org/3/" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
          <div class="col-sm-4 my-2 card-item">
                  <div class="card" >
                      <img src="https://sparc.org.in/wp-content/uploads/2018/12/best-C-Programming-training-gtb-nagar-sparc-academy.jpg" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">C Language</h5>
                          <p class="card-text">C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.</p>
                          <button type="button" class="btn btn-primary"><a href="https://devdocs.io/c/" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
          <div class="col-sm-4 my-2 card-item">
                  <div class="card" >
                      <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210203170945/HTML-Tutorials.png" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">HTML</h5>
                          <p class="card-text">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript. </p>
                          <button type="button" class="btn btn-primary"><a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
          <div class="col-sm-4 my-2 card-item ">
                  <div class="card" >
                      <img src="https://dev.java/assets/images/java-logo-vert-blk.png" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">JAVA</h5>
                          <p class="card-text">Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
                          <button type="button" class="btn btn-primary"><a href="https://docs.oracle.com/en/java/" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
          <div class="col-sm-4 my-2 card-item">
                  <div class="card" >
                      <img src="https://www.iimtindia.net/Blog/wp-content/uploads/2021/06/Data-Science.jpg" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">Data Science</h5>
                          <p class="card-text"></p>
                          <p class="card-text">Data science is an interdisciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from noisy</p>
                          <button type="button" class="btn btn-primary"><a href="https://python-data-science.readthedocs.io/en/latest/" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
          <div class="col-sm-4 my-2 card-item ">
                  <div class="card" >
                      <img src="https://www.eurixgroup.com/wp-content/uploads/2021/01/ml-e1610553826718.jpg" class="card-img-top" height ="200px" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title">Machine Learning</h5>
                          <p class="card-text">Machine learning is the study of computer algorithms that can improve automatically through experience and by the use of data. It is seen as a part</p>
                          <button type="button" class="btn btn-primary"><a href="https://scikit-learn.org/stable/" target="_blank" style="text-decoration: none;color: white;">View Documentation</a></button>
                      </div>
                  </div>
                </div>
    </div>
    <div class="text-center">
        <a href="courses.php" class="btn btn-danger btn-sm">View Courses</a>
    </div>
    </div>
<!-- cources end -->
<?php include 'footer.php';?>