<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OMCC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    </head>
    <body>
    <?= $this->include('assets'); ?>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <?= $this->include('topbar'); ?>   
            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="Images/istockphoto-894125638-612x612.jpg" class="img-fluid w-100" alt="Image">
                    <!-- <img src="Images/340582451_477176837878099_4812502780024184717_n.jpg" class="img-fluid w-100" alt="Image"> -->
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-12 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <img src="Images/logo.png" class="img-fluid w-100" alt="Image" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="Images/340582451_477176837878099_4812502780024184717_n.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-white text-uppercase fw-bold mb-4">Department Of Health</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Cagayan Valley Medical Center</h1>
                                        <p class="mb-5 fs-5">Dalan na Pagayaya, Regional Government Center</p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a style="width: 200px; height: 200px;"><img src="Images/cvmc_logo.png" /></a>
                                            <a style="width: 200px; height: 200px;" href="#"><img src="Images/bagong pilipinas logo.png"/></a>
                                            <a style="width: 200px; height: 200px;" href="#"><img src="Images/DOH_Logo.png"/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->
        <!-- Services Start -->
        <div class="container-fluid service pb-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Images/vision.png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Vision</a>
                                <p class="mb-4">The Cagayan Valley Medical Center is a reputable regional apex multi-specialty center in Northeast Luzon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Images/mission.png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Mission</a>
                                <p class="mb-4">We provide people-centered care, advances training, and ethical research to the community we serve as our contribution to nation building.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Images/values.png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Core Values</a>
                                <p class="mb-4">Integrity, Compassion, Accountability, Resiliency, Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- FAQs Start -->
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="mb-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                            </svg>
                            Upload Image
                        </button>
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <div id="hero-carousel" class="carousel" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <?php foreach ($images as $index => $image): ?>
                                        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="<?= $index; ?>" class="<?= ($index == 0) ? 'active' : ''; ?>" aria-current="<?= ($index == 0) ? 'true' : 'false'; ?>" aria-label="Slide <?= $index + 1; ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php foreach ($images as $index => $image): ?>
                                        <div class="carousel-item <?= ($index == 0) ? 'active' : ''; ?> c-item">
                                            <img src="<?= base_url('Images/AboutUS/' . $image); ?>" class="w-100 c-img" alt="Slide <?= $index + 1; ?>"/>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon btn btn-primary" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon btn btn-primary" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->
 
        <!-- add modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Upload Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addPhoto" name="addPhoto" action="<?php echo base_url('/store');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" id="image" />
                    </div>
                    <div id="selectedBanner"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
            </div>
        </div> <!-- add modal end -->
<script>
  var selDiv = "";
  var storedFiles = [];
  $(document).ready(function () {
    $("#image").on("change", handleFileSelect);
    selDiv = $("#selectedBanner");
    $('#ongoing_card');
 
    $("#addPhoto").validate({
        rules: {
            image: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#addPhoto").attr("action");
            var formData = new FormData(form);
            $.ajax({
                data: formData,
                url: form_action,
                type: "POST",
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (res) {
                //   $('#ongoing_card').prepend(ongoing); 
                  $('#addPhoto')[0].reset(); 
                  $('#addModal').modal('hide'); 
                //   selDiv.html("");
                  location.reload();
                },
                error: function (data) {
                    alert("There was an error processing the request.");
                }
            });
        }
    });
});
function handleFileSelect(e) {
    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);
    filesArr.forEach(function (f) {
      if (!f.type.match("image.*")) {
        return;
      }
      storedFiles.push(f);

      var reader = new FileReader();
      reader.onload = function (e) {
        var html =
          '<img src="' +
          e.target.result +
          "\" data-file='" +
          f.name +
          "' alt='Category Image' height='50%' width='100%'>";
        selDiv.html(html);
      };
      reader.readAsDataURL(f);
    });
  }
</script>
        <script src="js/main.js"></script>
    </body>

</html>