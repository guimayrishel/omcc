<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>OMCC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <style>
  .center .name{
    background-color: #F0F8FF;
    color: #318CE7;
    width: 40%;
  }
  .center .target{
    background-color: #7CB9E8;
    width: 10%;
  }
  .center .completed{
    background-color: #1CAC78;
    width: 10%;
  }
  .center .ongoing{
    background-color: #FFD700;
    width: 10%;
  }
  .center .notstarted{
    background-color: #E52B50;
    width: 10%;
  }
  .center .percent{
    background-color: #ACE1AF;
    width: 10%;
  }
  .center{
    text-align: center;
  }
  .size{
    font-size: 10px;
  }
</style>
        <meta content="" name="description">
    </head>
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
                        <a href="/completed" class="nav-item nav-link">Completed Projects</a>
                        <a href="/pgs_osm" class="nav-item nav-link active">PGS/OSM</a>
                    </div>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">PGS/OSM</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown text-white" data-wow-delay="0.3s">
                      <!-- List Of Completed Projects -->
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                            Add Ongoing Project
                        </button> -->
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->
        


        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
            <table class="table">
                <thead>
                  <tr class="center">
                      <th class="name"></th>
                      <th class="target">410</th>
                      <th class="completed">200</th>
                      <th class="ongoing">130</th>
                      <th class="notstarted">80</th>
                      <th class="percent">48.78%</th>
                  </tr>
                  <tr>
                      <th>Department/Section/Unit</th>
                      <th class="center size">TARGET</th>
                      <th class="center size">COMPLETED</th>
                      <th class="center size">ONGOING</th>
                      <th class="center size">NOT STARTED</th>
                      <th class="center">---</th>
                  </tr>
                  <!-- <tr id="showaddform">
                    
                  </tr> -->
                  
                </thead>  
                <tbody>
                  <tr>
                      <td class="name">Dep of Obstetrics and Gynecology</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center"></td>
                  </tr>
                  <tr>
                      <td class="name">Payward</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center"></td>
                  </tr>
                  <tr>
                      <td class="name">Public health Unit</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center"></td>
                  </tr>
                  <tr>
                      <td class="name">Nutrition and Dietetics</td>
                      <td class="center">5</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">100%</td>
                  </tr>
                  <tr>
                      <td class="name">Health Emergency Management Section</td>
                      <td class="center">5</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">0</td>
                      <td class="center">100%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Internal Medicine</td>
                      <td class="center">19</td>
                      <td class="center">18</td>
                      <td class="center">1</td>
                      <td class="center">0</td>
                      <td class="center">94.74%</td>
                  </tr>
                  <tr>
                      <td class="name">Patient Safety</td>
                      <td class="center">6</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">1</td>
                      <td class="center">83.33%</td>
                  </tr>
                  <tr>
                      <td class="name">Molecular Lab</td>
                      <td class="center">5</td>
                      <td class="center">4</td>
                      <td class="center">1</td>
                      <td class="center">0</td>
                      <td class="center">80.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Integrated Hospital Operations And Management Program unit</td>
                      <td class="center">35</td>
                      <td class="center">28</td>
                      <td class="center">7</td>
                      <td class="center">0</td>
                      <td class="center">80.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Pediatrics</td>
                      <td class="center">18</td>
                      <td class="center">13</td>
                      <td class="center">4</td>
                      <td class="center">1</td>
                      <td class="center">72.22%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Surgery</td>
                      <td class="center">15</td>
                      <td class="center">10</td>
                      <td class="center">1</td>
                      <td class="center">4</td>
                      <td class="center">66.67%</td>
                  </tr>
                  <tr>
                      <td class="name">Renal Care</td>
                      <td class="center">31</td>
                      <td class="center">20</td>
                      <td class="center">3</td>
                      <td class="center">8</td>
                      <td class="center">64.52%</td>
                  </tr>
                  <tr>
                      <td class="name">Professional Education Training and Research Unit</td>
                      <td class="center">11</td>
                      <td class="center">7</td>
                      <td class="center">3</td>
                      <td class="center">1</td>
                      <td class="center">63.64%</td>
                  </tr>
                  <tr>
                      <td class="name">Dental Medicine</td>
                      <td class="center">8</td>
                      <td class="center">5</td>
                      <td class="center">3</td>
                      <td class="center">0</td>
                      <td class="center">62.50%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Orthopedics</td>
                      <td class="center">10</td>
                      <td class="center">6</td>
                      <td class="center">1</td>
                      <td class="center">3</td>
                      <td class="center">60.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Otorhinolaryngology-Head and Neck Surgery</td>
                      <td class="center">10</td>
                      <td class="center">6</td>
                      <td class="center">2</td>
                      <td class="center">2</td>
                      <td class="center">60.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Family and Community Medicine</td>
                      <td class="center">7</td>
                      <td class="center">4</td>
                      <td class="center">1</td>
                      <td class="center">2</td>
                      <td class="center">57.14%</td>
                  </tr>
                  <tr>
                      <td class="name">Department of Behavioral Medicine</td>
                      <td class="center">7</td>
                      <td class="center">4</td>
                      <td class="center">0</td>
                      <td class="center">3</td>
                      <td class="center">57.14% </td>
                  </tr>
                  <tr>
                      <td class="name">Finance</td>
                      <td class="center">6</td>
                      <td class="center">3</td>
                      <td class="center">3</td>
                      <td class="center">0</td>
                      <td class="center">50.00% </td>
                  </tr>
                  <tr>
                      <td class="name">Deparrtment of Opthalmology</td>
                      <td class="center">13</td>
                      <td class="center">6</td>
                      <td class="center">5</td>
                      <td class="center">2</td>
                      <td class="center">46.15% </td>
                  </tr>
                  <tr>
                      <td class="name">Infectious Disease and Tropical Medicine</td>
                      <td class="center">7</td>
                      <td class="center">3</td>
                      <td class="center">4</td>
                      <td class="center">0</td>
                      <td class="center">42.86% </td>
                  </tr>
                  <tr>
                      <td class="name">Cancer Center</td>
                      <td class="center">12</td>
                      <td class="center">5</td>
                      <td class="center">4</td>
                      <td class="center">3</td>
                      <td class="center">41.67% </td>
                  </tr>
                  <tr>
                      <td class="name">Department of Pathology and Laboratories</td>
                      <td class="center">12</td>
                      <td class="center">5</td>
                      <td class="center">5</td>
                      <td class="center">2</td>
                      <td class="center">41.67% </td>
                  </tr>
                  <tr>
                      <td class="name">Rehabilitation Medicine</td>
                      <td class="center">12</td>
                      <td class="center">5</td>
                      <td class="center">7</td>
                      <td class="center">0</td>
                      <td class="center">41.67% </td>
                  </tr>
                  <tr>
                      <td class="name">Medical Social Service</td>
                      <td class="center">5</td>
                      <td class="center">2</td>
                      <td class="center">0</td>
                      <td class="center">3</td>
                      <td class="center">40,00% </td>
                  </tr>
                  <tr>
                      <td class="name">Acute Stroke Unit</td>
                      <td class="center">5</td>
                      <td class="center">2</td>
                      <td class="center">3</td>
                      <td class="center">0</td>
                      <td class="center">40.00% </td>
                  </tr>
                  <tr>
                      <td class="name">Department of Radiology</td>
                      <td class="center">10</td>
                      <td class="center">4</td>
                      <td class="center">1</td>
                      <td class="center">5</td>
                      <td class="center">50.00% </td>
                  </tr>
                  <tr>
                      <td class="name">Blood Bank</td>
                      <td class="center">8</td>
                      <td class="center">3</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">37.50% </td>
                  </tr>
                  <tr>
                      <td class="name">Department of Anesthesiology</td>
                      <td class="center">8</td>
                      <td class="center">3</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">37.50% </td>
                  </tr>
                  <tr>
                      <td class="name">Nuclear Medicine</td>
                      <td class="center">3</td>
                      <td class="center">1</td>
                      <td class="center">0</td>
                      <td class="center">2</td>
                      <td class="center">33.33% </td>
                  </tr>
                  <tr>
                      <td class="name">Emergency Department - Trauma</td>
                      <td class="center">11</td>
                      <td class="center">3</td>
                      <td class="center">3</td>
                      <td class="center">5</td>
                      <td class="center">27.27%</td>
                  </tr>
                  <tr>
                      <td class="name">Hospital Operations and Patient Support Service</td>
                      <td class="center">12</td>
                      <td class="center">3</td>
                      <td class="center">1</td>
                      <td class="center">8</td>
                      <td class="center">25.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Lung care / Pulmonary Unit</td>
                      <td class="center">4</td>
                      <td class="center">1</td>
                      <td class="center">2</td>
                      <td class="center">1</td>
                      <td class="center">25.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Hospital Custumer Service Comittee</td>
                      <td class="center">5</td>
                      <td class="center">2</td>
                      <td class="center">5</td>
                      <td class="center">1</td>
                      <td class="center">25.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Geriatric Care</td>
                      <td class="center">15</td>
                      <td class="center">3</td>
                      <td class="center">7</td>
                      <td class="center">5</td>
                      <td class="center">20.00%</td>
                  </tr>
                  <tr>
                      <td class="name">OPD</td>
                      <td class="center">6</td>
                      <td class="center">1</td>
                      <td class="center">5</td>
                      <td class="center">0</td>
                      <td class="center">16.67%</td>
                  </tr>
                  <tr>
                      <td class="name">Pharmacy</td>
                      <td class="center">13</td>
                      <td class="center">2</td>
                      <td class="center">7</td>
                      <td class="center">4</td>
                      <td class="center">15.38%</td>
                  </tr>
                  <tr>
                      <td class="name">Cardiovascular Care</td>
                      <td class="center">22</td>
                      <td class="center">3</td>
                      <td class="center">11</td>
                      <td class="center">8</td>
                      <td class="center">13.64%</td>
                  </tr>
                  <tr>
                      <td class="name">Health Information and Management Section</td>
                      <td class="center">3</td>
                      <td class="center">0</td>
                      <td class="center">3</td>
                      <td class="center">0</td>
                      <td class="center">0.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Human Resource and Management Section</td>
                      <td class="center">6</td>
                      <td class="center">0</td>
                      <td class="center">2</td>
                      <td class="center">4</td>
                      <td class="center">0.00%</td>
                  </tr>
                  <tr>
                      <td class="name">HACT</td>
                      <td class="center">2</td>
                      <td class="center">0</td>
                      <td class="center">1</td>
                      <td class="center">1</td>
                      <td class="center">0.00%</td>
                  </tr>
                  <tr>
                      <td class="name">Nursing Service</td>
                      <td class="center">13</td>
                      <td class="center">0</td>
                      <td class="center">13</td>
                      <td class="center">0</td>
                      <td class="center">0.00%</td>
                  </tr>
                </tbody>
              </table> 
            </div>
        </div>
        <!-- Services End -->

        
       
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>