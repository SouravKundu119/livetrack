<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'css/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style bg-dark navbar-dark p-3">
  <a class="navbar-brand pl-5" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="css/indiacoronalive.php">India Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="img/group.png" width="300" height="300">

          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"> <img src="img/corona.png">
          </span>navirus</h1>
          </div>
        </div>
    </div>
</div>

<!-- -----------------------Corona Latest Update--------------------- -->
<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">World Covid-19 Updates</h3>
  </div>
  

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
      <th>Country</th>
      <th>Total Confirmed</th>
      <th>Total Recovered</th>
      <th>Total Deaths</th>
      <th>Total Deaths</th>
      <th>New Recovered</th>
      <th>New Deaths</th>
      </tr>
    </table>   
  </div>
</section>

<!-- --------------------About Section--------------------- -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About Covid-19</h1>
  </div>

  <div class="row pt-5 ">
    <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
      <img src="img/aboutcorona.png" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is Covid-19 (Coronavirus) ?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
        Most people infected with the COVID-19 virus will experience
        mild to moderate respiratory illness and recover without 
        requiring special treatment.  Older people, and those with 
        underlying medical problems like cardiovascular disease, 
        diabetes, chronic respiratory disease, and cancer are more 
        likely to develop serious illness.</p><br>
        <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus,
         the disease it causes and how it spreads. Protect yourself and others from infection 
         by washing your hands or using an alcohol based rub frequently and 
         not touching your face. 
        The COVID-19 virus spreads primarily through droplets of saliva or 
        discharge from the nose when an infected person coughs or sneezes, 
        so it’s important that you also practice respiratory etiquette 
        (for example, by coughing into a flexed elbow).</p>

      </div>
    </div>
  </div>

  <!-- -------------------------------------Corona Symptoms------------------------------ -->
  <div class="container-fluid sub_section pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/cough.png" class="img-fluid" width="120" height="120">
        <figcaption>Cough</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/fever.png" class="img-fluid" width="120" height="120">
        <figcaption>Runny Nose</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/feverr.png" class="img-fluid" width="120" height="120">
        <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/sick.png" class="img-fluid" width="120" height="120">
        <figcaption>Cold</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/sleep.png" class="img-fluid" width="120" height="120">
        <figcaption>Tiredness</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="img/breathing.png" class="img-fluid" width="120" height="120">
        <figcaption>Difficulty Breathing (Severe Cases)</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
<!---------------------------------Prevention---------------------------- -->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="img/hand-wash.png" class="img-fluid" width="90" height="90">
            </figure>
            </div> 
            <div class="col-lg-8 col-md-8 col-12">            
            <p>Wash your hands regularly for 20 seconds, with soap and water
            or alcohol-based hand wash</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center" >
            <img src="img/face-mask.png" class="img-fluid" width="90" height="90">
            </figure>
            </div>  
            <div class="col-lg-8 col-md-8 col-12">
            <p>Cover your nose and mouth with a disposable tissue or flexed elbow
            when you cough or sneeze</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="img/cough2.png" class="img-fluid" width="90" height="90">
            </figure> 
            </div> 
            <div class="col-lg-8 col-md-8 col-12">
            <p>If you have fever, 
            cough or difficulty in breathing, seek medical care early</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="img/quarantine.png" class="img-fluid" width="90" height="90">
            </figure> 
            </div> 
            <div class="col-lg-8 col-md-8 col-12">
            <p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="img/home.png" class="img-fluid" width="90" height="90">
            </figure>
            </div>  
            <div class="col-lg-8 col-md-8 col-12">
            <p>Stay home and self-isolate from others in the household
            if you feel unwell</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="img/television.png" class="img-fluid" width="90" height="90">
            </figure> 
            </div> 
            <div class="col-lg-8 col-md-8 col-12">
            <p>Stay informed by watching news & follow the recommended
            practices</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!---------------------------------Contact Us ASAP---------------------------- -->
<div class="container-fluid sub_section pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us ASAP</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
      <form action=" " method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" autocomplete="off" required>
      </div>
    
      <div class="form-group">
        <label>Select Symptoms</label><br>

        <div class="custom-control custom-checkbox 
        custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" 
        id="customcheckbox1" name="coronasym[]" value="cold">
        <label class="custom-control-label" for="customcheckbox1">cold</label>
        </div>

        <div class="custom-control custom-checkbox 
        custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" 
        id="customcheckbox2" name="coronasym[]" value="fever">
        <label class="custom-control-label" for="customcheckbox2">fever</label>
        </div>

        <div class="custom-control custom-checkbox 
        custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" 
        id="customcheckbox3" name="coronasym[]" value="breath">
        <label class="custom-control-label" for="customcheckbox3">dificulty in breathing</label>
        </div>

        <div class="custom-control custom-checkbox 
        custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" 
        id="customcheckbox4" name="coronasym[]" value="tired">
        <label class="custom-control-label" for="customcheckbox4">felling weak</label>
        </div>
      </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1">Write About Your Health Condition</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
      </div>

    
      <button type="submit" class="btn btn-primary">Submit</button>
    

    </form>
          
      </div>
    </div>
  </div>
</div>
<!-- -------------------------------------Top Cursor-------------------------------- -->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" aria-hidden="true" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- ------------------------------------------Footer----------------------------- -->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
      <p>copyright by www.sourav1.cf</p>
  </div>

</footer>

<script type="text/javascript">
  mybutton = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};
  function scrollFunction(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
    {
      mybutton.style.display = "block";
    }
    else{
      mybutton.style.display = "none";
    }
  }

  function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

  }
  
  function fetch(){
    $.get("https://api.covid19api.com/summary",
       
       function (data)
       {
         var tbval = document.getElementById('tbval');

         for(var i=1; i<(data['Countries'].length); i++)
           {
             var x = tbval.insertRow();
             x.insertCell(0);

             tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
             tbval.rows[i].cells[0].style.background = '#36688D';
             tbval.rows[i].cells[0].style.color = '#fff';

             x.insertCell(1);
             tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
             tbval.rows[i].cells[1].style.background = '#F3CD05';
             
             x.insertCell(2);
             tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
             tbval.rows[i].cells[2].style.background = '#F49F05';

             x.insertCell(3);
             tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
             tbval.rows[i].cells[3].style.background = '#F18904';

             x.insertCell(4);
             tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
             tbval.rows[i].cells[4].style.background = '#BDA589';

             x.insertCell(5);
             tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
             tbval.rows[i].cells[5].style.background = '#0584F2';
             tbval.rows[i].cells[5].style.color = '#fff';


             x.insertCell(6);
             tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
             tbval.rows[i].cells[6].style.background = '#192E5B';
             tbval.rows[i].cells[6].style.color = '#fff';



           }
       }
    
    )
  }
  </script>






</body>
</html>



<?php

include 'css/dbcon.php';

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];
  
  $chk = " ";

  foreach($symp as $chk1){
    $chk .= $chk1."," ;
  }

  $insertquery = " insert into coronacase(	id, username,	email,	mobile,	symp,	message,
  ) values('$username', '$email', '$mobile', '$chk', '$msg') ";

  $query = mysqli_query($con, $insertquery);

  if($query){
    ?>
    <script>
    alert("Connection successful")
    </script>
    <?php
  }
}
?>