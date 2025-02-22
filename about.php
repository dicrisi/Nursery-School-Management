<?php
include('header.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>

 <style>
        body {
            background-image: url('ff.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: white;
        }



    </style>




 <main id="main">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">About us</h1>
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
          <img src="img1.jpg" alt="Trulli" width="500" height="333">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4">About us</div>
              <h2 class="mb-4 display-4">School History</h2>

              <p>The Early Infant Schools and Kindergartens</p>
              <p>This was either a school organized for older children or an infant school, the first of which was opened by the utopian socialist reformer Robert Owen (1771 to1858) in Scotland in 1816. The infant schools that followed were promoted by infant school societies.</p>
            </div>
          </div>

         <div class="d-md-flex post-entry-2 half mt-5">
  <a href="#" class="me-4 thumbnail order-2">
    <img src="img2.jpg" alt="Trulli" width="500" height="333">
  </a>
  <div class="pe-md-5 mt-4 mt-md-0">
    <div class="post-meta mt-4">Mission & Vision</div>
    <h2 class="mb-4 display-4">Mission & Vision</h2>
    <p>We will adopt a holistic approach that enables each child to develop their social, physical, emotional and intellectual abilities. We know that each child is unique and special and positive early childhood experiences are instrumental for a child's overall development in later life.</p>
    <p>To provide quality education, incorporating a holistic programme that includes opportunities for social, emotional, physical and educational development.</p>
  </div>
</div>

      </div>
    </section>

    <section class="mb-5 bg-light py-5" >
      <div class="container" data-aos="fade-up" >
        <div class="row justify-content-between align-items-lg-center">
		<div ></div>
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4">Latest News</h2>
            <p>While the recommended range for nursery admission age typically falls between 2.5 to 3.5 years, it's essential to consider several key factors before making this crucial decision: Child's Developmental Readiness: Assess your child's readiness for structured learning.</p>
            <p>Nurseries will take children from ages one to three where as pre-schools generally take children from three to five. Pre-schools have a formal curriculum and trained teachers.</p>
           
          </div>
          <div class="col-lg-6">
            <div class="row" >
              <div class="col-6" >
                <img src="img3.jpg" alt="Trulli" width="500" height="333">
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>

   
  </main><!-- End #main -->


<?php 
include_once("footer.php");
?>
