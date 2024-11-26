<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>OMCC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    </head>
    <style>
  .b-image{
    position: relative; 
    z-index: 2; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    height: 100%; 
    padding: 20px 150px 50px 150px
  }
  @media (max-width: 632px) {
        .b-image {
          padding: 20px 100px 50px 100px !important;
        }
      }
  @media (max-width: 500px) {
    .b-image {
      padding: 20px 80px 50px 80px !important;
    }
  }
  @media (max-width: 400px) {
    .b-image {
      padding: 20px 70px 50px 70px !important;
    }
  }
  @media (max-width: 350px) {
    .b-image {
      padding: 10px 20px 40px 20px !important;
    }
  }
</style> 
    <body>
    <?= $this->include('assets'); ?>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
          <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
              <a href="" class="navbar-brand p-0">
                  <h1 class="text-primary"><img src="Images/cvmc_logo.png" height="50px"/></i>OMCC</h1>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                      <a href="/" class="nav-item nav-link">Home</a>
                      <a href="/ongoing" class="nav-item nav-link">Ongoing Projects</a>
                      <a href="/completed" class="nav-item nav-link active">Completed Projects</a>
                      <a href="/pgs_osm" class="nav-item nav-link">PGS/OSM</a>
                  </div>
              </div>
          </nav>

            <!-- Header Start -->
            <!-- <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Completed Projects</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown text-white" data-wow-delay="0.3s">
                      List Of Completed Projects
                    </ol>    
                </div>
            </div> -->
            <!-- Attractions Start -->
              <div class="container-fluid attractions py-5 ">
                  <div class="container attractions-section py-5">
                      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                          <h4 class="text-white">Completed Projects</h4>
                         
                      </div>
                      <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                      <?php foreach ($images as $index => $image): ?>
                          <?php $title = preg_replace('/_[^_]+$/', '', pathinfo($image, PATHINFO_FILENAME)); ?>
                          <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                              <img src="Images/CompletedProjects/<?php echo $image; ?>" class="img-fluid rounded w-100" alt="">
                              <a href="#" class="attractions-name"><?php echo $title; ?></a>
                          </div>
                          <?php endforeach; ?>
                      </div>
                  </div>
              </div>
              <!-- Attractions End -->
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->
        


        <!-- Services Start -->
        <div class="container-fluid gallery pb-5">
            <div class="container py-5">
                <div class="row g-4">
                <?php foreach ($images as $index => $image): ?>
                    <?php
                    $title = preg_replace('/_[^_]+$/', '', pathinfo($image, PATHINFO_FILENAME));
                    ?>
                    <div class="col-md-6 wow fadeInUp"  id="project-<?php echo $index; ?>" data-wow-delay="0.<?php echo $index; ?>s">
                        <div class="card" style="position: relative; margin: auto; overflow: hidden;">
                            <div style="background-image: url('Images/CompletedProjects/<?php echo $image; ?>'); filter: blur(20px); position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-size: cover; background-position: center; z-index: 1;"></div>
                            <div class="b-image">
                              <div class="gallery-item">
                                <img style="border-radius: 5%;" src="Images/CompletedProjects/<?php echo $image; ?>" class="card-img-top img-fluid rounded w-100 h-100" alt="Alternate Image" onerror="this.onerror=null; this.src='Images/no-image-available-icon-vector.jpg';">
                                <!-- <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt=""> -->
                                <div class="search-icon">
                                    <a href="Images/CompletedProjects/<?php echo $image; ?>" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                    </svg></a>
                                </div>
                              </div>
                            </div>
                            <div style="position: absolute; bottom: 20px; left: 0; right: 0; display: flex; justify-content: space-between; padding: 0 20px; color: white; z-index: 2;">
                                <div style="text-align: left;">
                                    <p><?php echo $title; ?></p>
                                </div>
                            </div>
                        </div> <!-- card -->
                    </div> <!-- col-md-12 -->
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Services End -->

        
       
        <!-- Template Javascript -->
        <script src="<?php echo base_url('js/main.js'); ?>"></script>
    </body>
</html>