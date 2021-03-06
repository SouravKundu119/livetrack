<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links.php';?>
    <?php include 'style.php';?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style bg-light navbar-light p-3">
  <a class="navbar-brand pl-5" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.sourav1.cf/#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.sourav1.cf/index1.html">Websites</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://landbot.io/u/H-502690-RABQEPE3V7LQ8DO5/index.html">Chatbot</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.sourav1.cf/index3.html">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.sourav1.cf/food.html">Food Blog</a>
      </li>
    </ul>

  </div>
  </nav>
  <!-- ---------------------------MAIN PART THE TABLE----------------------- -->
<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase">covid-19 live updates of india</h3>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
    <tr style="background-color:#101820FF;color:#FEE715FF" >
      <th>Last Updated Time</th>
      <th>State</th>
      <th>Confirmed Cases</th>
      <th>Active Cases</th>
      <th>Recovered Cases</th>
      <th>Total Deaths</th>
    </tr>

    <?php
    
    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive = json_decode($data, true);

    // echo "<pre>";

    // print_r($coronalive);

    // echo "</pre>";

    $statescount = count($coronalive['statewise']);
    
    $i = 1;

    while($i <= $statescount) {

        ?>

         <tr>
           <td style="background-color:#FC766AFF"><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
           <td style="background-color:#5B84B1FF  ;color:#fff"><?php echo $coronalive['statewise'][$i]['state'] ?></td>
           <td style="background-color:#42EADDFF "><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
           <td style="background-color:#ADEFD1FF "><?php echo $coronalive['statewise'][$i]['active'] ?></td>
           <td style="background-color:#755139FF ;color:#F2EDD7FF"><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
           <td style="background-color:#343148FF ;color:#D7C49EFF"><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

         </tr>

        <!-- // echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>"; 
        // echo $coronalive['statewise'][$i]['state'] . "<br>";
        // echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
        // echo $coronalive['statewise'][$i]['active'] . "<br>";
        // echo $coronalive['statewise'][$i]['recovered'] . "<br>";
        // echo $coronalive['statewise'][$i]['deaths'] . "<br>"; -->
       <?php
        $i++;

    }


    ?>
    </table>
    </div>
</section>
  <div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" aria-hidden="true" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- ------------------------------------------Footer----------------------------- -->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
      <p>copyright by www.sourav1.cf</p>
  </div>

</footer>
<!-- -------------------------------------Top Cursor-------------------------------- -->

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
</script>
</body>
</html>