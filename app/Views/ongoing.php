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
                        <a href="/ongoing" class="nav-item nav-link active">Ongoing Projects</a>
                        <a href="/completed" class="nav-item nav-link">Completed Projects</a>
                        <a href="/pgs_osm" class="nav-item nav-link">PGS/OSM</a>
                    </div>
                </div>
            </nav>
              <br>
             <!-- Attractions Start -->
              <div class="container-fluid attractions py-5 ">
                  <div class="container attractions-section py-5">
                      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                          <h4 class="text-white">Ongoing Projects</h4>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                            Add Ongoing Project
                          </button>
                      </div>
                      <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                      <?php foreach ($images as $index => $image): ?>
                          <?php $title = preg_replace('/_[^_]+$/', '', pathinfo($image, PATHINFO_FILENAME)); ?>
                          <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                              <img src="Images/OngoingProjects/<?php echo $image; ?>" class="img-fluid rounded w-100" alt="">
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
                    <?php $title = preg_replace('/_[^_]+$/', '', pathinfo($image, PATHINFO_FILENAME));?>
                    <div class="col-md-6 wow fadeInUp"  id="project-<?php echo $index; ?>" data-wow-delay="0.<?php echo $index; ?>s">
                        <div class="card" style="position: relative; margin: auto; overflow: hidden;">
                            <div style="background-image: url('Images/OngoingProjects/<?php echo $image; ?>'); filter: blur(20px); position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-size: cover; background-position: center; z-index: 1;"></div>
                            <div class="b-image">
                              <div class="gallery-item">
                                <img style="border-radius: 5%;" src="Images/OngoingProjects/<?php echo $image; ?>" class="card-img-top img-fluid rounded w-100 h-100" alt="Alternate Image" onerror="this.onerror=null; this.src='Images/no-image-available-icon-vector.jpg';">
                                <div class="search-icon">
                                    <a href="Images/OngoingProjects/<?php echo $image; ?>" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
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
                                <div style="text-align: right;">
                                    <a class="nav-link nav-icon-hover text-white" href="javascript:void(0)" id="drop<?php echo $index; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop<?php echo $index; ?>">
                                        <div class="message-body">
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item btnDelete" data-id="<?php echo $image; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                                <p class="mb-0 fs-3">Remove</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item btnUpdate" data-id="<?php echo $image; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                                                </svg>
                                                <p class="mb-0 fs-3">Complete</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card -->
                    </div> <!-- col-md-12 -->
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Services End -->
        <!-- add modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">New Ongoing Project</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form id="addOngoing" name="addOngoing" action="<?php echo base_url('/ongoing/store');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" id="image" />
                  </div>
                  <div id="selectedBanner"></div>
                  <div class="form-group">
                      <label for="title">Title:</label>
                      <textarea class="form-control" id="title" name="title" rows="10" placeholder="Enter Title"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- add modal end -->
        <!-- update modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateProject" name="updateProject" action="<?php echo base_url('/ongoing/update');?>" method="post" >
                <div class="modal-body">
                    <input type="hidden" name="id" id="id"/>
                    <p>Project Completed?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
                </div>
            </div>
        </div> 
        <!--update modal end-->
         <!-- update modal -->
         <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Remove</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteProject" name="deleteProject" action="<?php echo base_url('/completed/delete');?>" method="post" >
                <div class="modal-body">
                    <input type="hidden" name="id" id="id"/>
                    <p>Are You Sure You Want to Remove This Image?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
                </form>
                </div>
            </div>
        </div> 
        <!--update modal end-->
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    <script>
  var selDiv = "";
  var storedFiles = [];
  $(document).ready(function () {
    $("#image").on("change", handleFileSelect);
    selDiv = $("#selectedBanner");
    $('#ongoing_card');
 
    $("#addOngoing").validate({
        rules: {
            title: "required",
            image: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#addOngoing").attr("action");
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
                  $('#addOngoing')[0].reset(); 
                  $('#addModal').modal('hide'); 
                  location.reload();
                  selDiv.html("");
                },
                error: function (data) {
                    alert("There was an error processing the request.");
                }
            });
        }
    });
    $('body').on('click', '.btnUpdate', function () {
        var ongoing_id = $(this).attr('data-id');
        console.log('id', ongoing_id)
        $('#updateModal').modal('show');
        $('#updateProject #id').val(ongoing_id); 
    });
     
    $("#updateProject").validate({
      submitHandler: function(form) {
        var form_action = $("#updateProject").attr("action");
        console.log($('#updateProject').serialize()); 
        $.ajax({
          data: $('#updateProject').serialize(),
          url: form_action,
          type: "POST",
          dataType: 'json',
          success: function (res) {
              $('#updateProject')[0].reset();
              $('#updateModal').modal('hide');
              location.reload();
              selDiv.html("");
          },
          error: function (data) {
              console.log(data);
          }
        });
      }
    }); 
    $('body').on('click', '.btnDelete', function () {
        var ongoing_id = $(this).attr('data-id');
        console.log('id', ongoing_id)
        $('#deleteModal').modal('show');
        $('#deleteProject #id').val(ongoing_id); 
    });
    $("#deleteProject").validate({
      submitHandler: function(form) {
        var form_action = $("#deleteProject").attr("action");
        console.log($('#deleteProject').serialize()); 
        $.ajax({
          data: $('#deleteProject').serialize(),
          url: form_action,
          type: "POST",
          dataType: 'json',
          success: function (res) {
              $('#deleteProject')[0].reset();
              $('#deleteModal').modal('hide');
              location.reload();
              selDiv.html("");
          },
          error: function (data) {
              console.log(data);
          }
        });
      }
    }); 

  });
  
 
    $('body').on('click', '.btnDelete', function () {
        var product_id = $(this).attr('data-id');
        $.get('product/delete/'+product_id, function (data) {
            $('#productTable tbody #'+ product_id).remove();
        })
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
<script>
  var editselDiv = "";
  var editstoredFiles = [];
  $(document).ready(function () {
    $("#updateimage").on("change", handleFileSelectEdit);
    editselDiv = $("#selectedBannerEdit");
});
function handleFileSelectEdit(e) {
    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);
    filesArr.forEach(function (f) {
      if (!f.type.match("image.*")) {
        return;
      }
      editstoredFiles.push(f);

      var reader = new FileReader();
      reader.onload = function (e) {
        var html =
          '<img src="' +
          e.target.result +
          "\" data-file='" +
          f.name +
          "' alt='Category Image' height='50%' width='100%'>";
        editselDiv.html(html);
      };
      reader.readAsDataURL(f);
    });
  }
</script>
</html>