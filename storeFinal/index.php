<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Tracer Store Registration</title>
   <!-- <script src="index.js"></script>-->
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg nav_class p-3">
  <a class="navbar-brand pl-5" href="#">Contact Tracer (Store)</a>
  <button style="background-color:white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
  <span class="navbar-toggler-icon">Opt </span>
  
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4 abc">
      <li class="nav-item active">
        <a class="nav-link" href="#store">Store Registration <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#updates">Stats</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#precautions">Prevention</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      

    </ul>
    
  </div>
</nav>
    
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="leftside">
                <img src="images/covid2.jpg" height="300" width="400" alt="">.
                </div>
            </div>
            <div class="rightside ml-5">
               <center> <h1>Store Registration for C<span class="covid"><img src="images/coronavirus.png" height="50" width="50"alt=""></span>ntact tracer </h1>
               </center></div>
            

        </div>

    </div>

  <div class="container-fluid pt-5 pb-5 mb-5" id="updates">
        <div class="section_header text-center mb-5 mt-4">
          <h1>CoVid-19 Updates</h1>
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <h1 class="count">52,14,677</h1>
            <p>Total Cases</p>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <h1 class="count">10,17,754</h1>
            <p>Active Cases</p>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <h1 class="count">84,372</h1>
            <p>Death</p>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <h1 class="count">41,12,551</h1>
            <p>Cured</p>
          </div>
        
        </div>

        <a href="data.php"><button class="btn btn-success btn-block btn-lg mb-5" >Click here for CoVid-19 Worldwide updates</button></a>

    </div>



  <!-- About        -->
    <div class="container-fluid sub_section pt-5 pb-5 mb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4 ">
          <h1>About CoVid-19</h1>
            
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12 ml-5 pr-3 ">
              <img src="images/aboutcovid19.jpg" alt="" class="img-fluid" height="350" width="525">
            </div>
            <div class="col-lg-6 col-md-6 col-12 pl-2 mr-2">
               <h2> What is CoVid-19</h2>
               <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
               <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p> 
            </div>
        </div>
    
    </div>

     <!-- Store Registration -->
     <div class="container-fluid pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4" id="store">
          <h1 id="symptoms">Store Registration</h1>
            <?php include "signup.php"; ?>
        </div>
      </div>
      <!-- Symptoms -->
      <div class="container-fluid pt-5 pb-5 sub_section" >
        <div class="section_header text-center mb-5 mt-4">
          <h1 id="symptoms">Coronavirus Symptoms</h1>
            
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/cough.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Coughing </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/nose.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Runny Nose </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/sick.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Fever</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/flu.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Cold </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/tiredness.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Tiredness </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <figure class=text-center>
                <img src="images/lungs.png" alt="" class="img-fluid" width="120" height="120">
                <figcaption>Breathing Problem </figcaption>
                </figure>
            </div>
          </div>
        </div>

      </div>


      <!-- Precautions -->
      <div class="container-fluid pt-5 pb-5" id="precautions">
        <div class="section_header text-center mb-5 mt-4">
          <h1 id="symptoms">6 Preventions against Coronavirus</h1>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/hand-wash.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>Wash your hands for atleast 20 seconds with soap and water or sanitize them with alcohol based sanitizer.</p>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/patient.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>Wear a mask and always keep a cloth when you sneez or cough to avoid spreading the infection.</p>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/social-distancing.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>Maintain social distancing whenever travelling or going at a public place to avoid the spread of disease.</p>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/home.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>Stay at home and stay safe during the lockdown. This is the only way to avoid the disease.</p>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/news-report.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>Always stay updated with the latest guidelines provided by the government and ensure that you follow them.</p>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col12">
                    <figure class=text-center>
                      <img src="images/insurance.png" alt="" class="img-fluid" width="90" height="90">
                      
                    </figure>
                    </div>
                  
                    <div class="col-lg-8 col-md-8 col12">
                      <p>If you find yourself having any symptoms visit the nearest hospital and test for Covid-19 and take the necassary precautions.</p>
                    </div>
                  </div>
              </div>

                 
            </div>
        </div>

      </div>

      <div class="container-fluid pt-5 " id="contact">
        <div class="section_header text-center ">
          <h1 id="symptoms">Contact us at</h1>
        </div>
      </div>
      <center><p>nandish5920@gmail.com </p></center>
      <center><p>nisarg.bakhai@gmail.com </p></center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>