<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- logo -->
    <link rel="icon" href="./images/logo.png" type="image/x-icon" />
    <!-- boost 5 -->
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <script src="./fontawesome-free-6.3.0-web/js/all.min.js"></script>
    <!-- mind -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Welcome To My WebPage</title>
</head>
<style>
  .container1{
    margin-top: -440px;
  }

  #mers1:hover{
      margin-top: -10px;
      margin-bottom: 10px;
      transition:0.5s;
      cursor:pointer;
      box-shadow: inset;
      border: 2px solid white;
  }
  
  #mers2:hover{
      margin-top: -10px;
      margin-bottom: 10px;
      transition:0.5s;
      cursor:pointer;
      box-shadow: inset;
      border: 2px solid white;
  }
  
  #mers1{
      box-shadow: inset;
      border: 2px solid white;
  }

  .dropdown-menu a:hover{
      background-color: #5061da;
  }

  .gapss{
    margin-top: -130px;
  }

  #card1, #card2, #card3 {
  transform-style: preserve-3d;
  transition: all .8s linear;
  
  }

  #card1:hover {

    transform: rotateY(180deg);
    box-shadow: -5px 5px 15px rgba(255,255,255,255);
    position: relative;
  }

  .face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  
  .back {
    display: block;
    transform: rotateY(180deg);
    box-sizing: border-box;
    padding-bottom: 170px;
    text-align: center;
    opacity: 0.9;
    background-color: #5061da;
    color: white;
    border: 2px solid #99051e;
    box-shadow: -5px 5px 15px rgba(255,255,255,255);
  }

  #card-container {
    position: relative;
    margin-top: 30px;
    width: 200px;
    height: 200px;
    z-index: 1;
    float: left;
    perspective: 1000px;
}

.conts3{
  /* background-image: url('./images/mtrix2.jpg'); */
  background-color: black;
}

.mers4{
  margin-top: 5%;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 2px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: #5061da;
  padding: 5px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #99051e;
}

.btn.active {
  background-color: #5061da;
  color: white;
}


</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-expand-xxl fixed-top border-bottom bg-opacity-25 bg-danger" id="headerNav">
      <div class="container-fluid">
        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="./images/logo.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2" aria-current="page" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#about">About</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2" href="#">
                <img src="./images/logo.png" height="80" />
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#projects">Projects</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Other
              </a>
              <ul class="dropdown-menu bg-opacity-25 bg-danger" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#Blog">Blog</a></li>
                <li><a class="dropdown-item" href="#Contactus">Contact us</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    <img src="./images/home-bg.gif" class="img-fluid" alt="home-bg">

    <div class="container container1">
      <div class="row">
        
        <div class="col mt-2">
          <!--  -->
          <div class="card" id="mers2">
            <div class="card-header">
              <strong>Profile </strong>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hi, my name is Eldrine, I am a Graduated on Bachelor of Science Information Technology.</p>
                <footer class="blockquote-footer"> <cite title="Source Title"> I focused on crafting clean and user friendly programs, I specialized also on the following: </cite> <cite title="Source Title">Network Configuration, </cite> <cite title="Source Title">CCTV Configuration, </cite> <cite title="Source Title">Computer and System Troubleshooting, </cite> <cite title="Source Title">Data Analysis, </cite> <cite title="Source Title">and other IT related problems</cite></footer>
              </blockquote>
            </div>
          </div>

        </div>

        <div class="col-lg mt-2">
          <!--  -->
              <img src="./images/me1.jpg" class="rounded float-end" id="mers1" alt="me1" height="50%" width="100%">
        </div>

      </div>
    </div>

    <div class="container bg-dark mb-3 p-3 shadow rounded text-center fs-1 gapss" style="color: white;"><strong>Portfolio</strong></div>


<div class="container-fluid conts3">
  <div class="row">
<!-- about -->
      <!-- 1 -->
      <div class="container-fluid mb-4 p-2" id="about">
      <div class="row">

      <div class="container bg-opacity-25 bg-light mers4">
       <h3 class="text-center" style="color:white">Skills</h3>
       <hr>
      </div>

        <!--  -->
        <div class="col">
          <div class="box">
          <div id="card-container">
              <div id="card1">
                <div class="front face">
                  <img src="./images/vblogo1.jpg" alt="vblogo1" width = "100%"/>
                </div>
                <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                  
                <div class="container mt-2">
                    <p><b>VB.NET</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%; background-color: #39ff14; color: #ff14af;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                      </div>
                  </div>   

                </div>
              </div>
            </div>
          </div>
        </div>
          <!--  -->
          <div class="col">
            <div class="box">
              <div id="card-container">
                <div id="card1">
                  <div class="front face">
                    <img src="./images/htmllogo.jpg" alt="htmllogo" width = "100%"/>
                  </div>
                  <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                  
                  <div class="container mt-2">
                    <p><b>HTML</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%; background-color: #39ff14; color: #ff14af;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                      </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col">
            <div class="box">
              <div id="card-container">
                <div id="card1">
                  <div class="front face">
                    <img src="./images/csslogo.jpg" alt="csslogo" width = "100%"/>
                  </div>
                  <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                    
                  <div class="container mt-2">
                    <p><b>CSS</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%; background-color: #39ff14; color: #ff14af;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                      </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--  -->
          <div class="col">
            <div class="box">
              <div id="card-container">
                <div id="card1">
                  <div class="front face">
                    <img src="./images/phplogo.jpg" alt="phplogo" width = "100%"/>
                  </div>
                  <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                    
                  <div class="container mt-2">
                    <p><b>PHP</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%; background-color: #39ff14; color: #ff14af;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                      </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--  -->
          <div class="col">
            <div class="box">
              <div id="card-container">
                <div id="card1">
                  <div class="front face">
                    <img src="./images/boostraplogo.jpg" alt="boostraplogo" width = "100%"/>
                  </div>
                  <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                    
                  <div class="container mt-2">
                    <p><b>Bootstrap</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%; background-color: #39ff14; color: #ff14af;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                      </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--  -->
          <div class="col">
            <div class="box">
              <div id="card-container">
                <div id="card1">
                  <div class="front face">
                    <img src="./images/pythonlogo.jpg" alt="pythonlogo" width = "100%"/>
                  </div>
                  <div class="back face" style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.2em; padding-top: 15px;">
                    
                  <div class="container mt-2">
                    <p><b>PYTHON</b></p>
                      <div class="progress"> 
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%; background-color: #39ff14; color: #ff14af;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                      </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
    
    <!-- about -->
  </div>


      <!-- Working -->
        <!-- 2 -->
        <div class="container-fluid rounded mt-2" id="projects">
          
              <div class="row">

              <div class="container-fluid bg-opacity-25 bg-light mers4">
                <h3 class="text-center" style="color:white">Sample Works</h3>
                <hr>
              </div>

                <div class="col">
                  
                    <!-- MAIN (Center website) -->
                    <div class="main mt-2">
                             
                    <div class="text-center" id="myBtnContainer">
                      <button class="btn active" onclick="filterSelection('all')"> All</button>
                      <button class="btn" onclick="filterSelection('Queuing_System')"> System</button>
                      <button class="btn" onclick="filterSelection('LMS_System')"> Software</button>
                      <button class="btn" onclick="filterSelection('Websites_System')"> Hardware</button>             
                    </div>

                    <!-- Portfolio Gallery Grid -->
                    <div class="row text-center">
                      <div class="column Queuing_System">
                        <div class="content">
                          <img src="./projects/TMS.png" alt="TMS" style="width:50%;">
                          <p><b>Learning Management System (LMS) & Training Management System (TMS)</b></p>
                          <p>This System Build By Visual Studio 2019 and more conditions required base On Client desired Like Registration, Cashier, Scheduling, Releasing, Printing, Attendance, Grading System.</p>
                        </div>
                      </div>
                      <div class="column Queuing_System">
                        <div class="content">
                        <img src="./projects/pos.png" alt="pos" style="width:50%">
                        <p><b>Point of Sale System (POS)</b></p>
                          <p>This System Build By Visual Studio 2019 have multiple functions from managing account added and stocks items and also managing saling items inclucding transfering items from other branches, categories, suppliers.</p>
                        </div>
                      </div>
                      <div class="column Queuing_System">
                        <div class="content">
                        <img src="./projects/qeue.jpg" alt="qeue" style="width:50%">
                        <p><b>Qeueing System (QS)</b></p>
                          <p>This System Build By Visual Studio 2019 have 8 Registrations, 3 Cashiers, and 1 Releasing Access connecting to Server That is allowed to multi-functions base on Client Desired and Now Upgraded on Ticketing Number.</p>
                        </div>
                      </div>
                      <div class="column Queuing_System">
                        <div class="content">
                        <img src="./projects/librarypic.jpg" alt="librarypic" style="width:50%">
                        <p><b>Library System</b></p>
                          <p>Library System Website that admin manage account of users and books records then the users can allowed to read power point imported on adding books then users required to read rules and regulations and top books read.</p>
                        </div>
                      </div>
                      <div class="column Queuing_System">
                        <div class="content">
                        <img src="./projects/onlinereg.jpg" alt="onlinereg" style="width:50%">
                        <p><b>Online Registration System</b></p>
                          <p>Online Registration System Website this system is just like LMS System but there was only for serving schedule and apply for the course users needs they are see schedule documents uploaded, payment.</p>
                        </div>
                      </div>

                    
                      <div class="column LMS_System">
                        <div class="content">
                          <img src="./projects/oslogo.jpg" alt="oslogo" style="width:57%">
                          <p><b>Computer Info Tech.</b></p>
                          <p>Computer Trouble Shooting is the main problem who using this I have basic experience of changing Operating System(OS) Installing Software and Device Drivers.</p>
                        </div>
                      </div>
                      <div class="column LMS_System">
                        <div class="content">
                        <img src="./projects/cctvlogo.jpg" alt="cctvlogo" style="width:72%">
                        <p><b>CCTV Info Tech.</b></p>
                          <p>CCTV Configuation From Computer Display To Andriod Display and its connected on defferent branches.</p>
                        </div>
                      </div>
                      <!-- <div class="column LMS_System">
                        <div class="content">
                        <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                        <p><b>Driver's Installer</b></p>
                          <p>Lorem ipsum dolor..</p>
                        </div>
                      </div>
                      
                      <div class="column Websites_System">
                        <div class="content">
                          <img src="/w3images/cars1.jpg" alt="Car" style="width:100%">
                          <p><b>Computer Disassembly and Assembly</b></p>
                          <p>Lorem ipsum dolor..</p>
                        </div>
                      </div> -->
                      <div class="column Websites_System">
                        <div class="content">
                        <img src="./projects/computerfixing.jpg" alt="computerfixing" style="width:72%">
                        <p><b>Hardware Computer Info. Tech</b></p>
                          <p>I have been experience Computer Assimble and Dis-Assimble, hardware troubleshooting</p>
                        </div>
                      </div>
                      <!-- <div class="column Websites_System">
                        <div class="content">
                        <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
                        <p><b>Printer & Cctv Info. Tech</b></p>
                          <p>Lorem ipsum dolor..</p>
                        </div>
                      </div> -->
                    <!-- END GRID -->
                    </div>

                    <!-- END MAIN -->
                    </div>


                </div>
              </div>
            </div>
      <!-- Working -->     
</div>
      <!-- footer -->
        <?php include './footer.php'; ?>
      <!-- footer -->
</body>
</html>

<script>
  filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("column");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }

        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }

        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
</script>
