<!DOCTYPE html>
<html>
<head>
<title></title>
<?php  include 'link/links.php'; ?>
<?php  include 'css/style.php'; ?>
<?php  include 'link/dbcon.php'; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID 19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
   aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="first.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symid">symptoms</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="indiacoronalive">indiacoronalive</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="indiadaywise">indiadaywise</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
      
      </li>
      
    </ul>
   
  </div>
</nav>

<section class="corona_update">
<div class="my-5">
<h3 class="text-uppercase text-center">covind-19 updates</h3>
</div>

  <div class="table-responsive">
  
  <table class="table text-center" id="tb1">

<?php
   
   $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronadata = json_decode($data,  true);

  $totalcount= count($coronadata['cases_time_series']);

  $i=0;
  while($i <$totalcount){
    ?>
    <tr>
        <th class="text-left">Date & Month</th>
        <th colspan="5"></th>
        </tr>
     <tr>
        <td colspan="6" class="text-left">  <?php echo $coronadata['cases_time_series']
        [$i]['date'] . "</br>"; ?> </td>
          </tr>
       <tr class="text-capitalize text-white">
        <th style="color: #fff; background:#2196f3;">total confirmed</th>
        <th style="color: #fff; background:#ffc107;">daily confirmed</th>   
        <th style="color: #fff; background:#008C76FF;">daily recovred</th>   
        <th style="color: #fff; background:#e91e7f;">daily deceased</th>   
        <th style="color: #fff; background:#4caf50;">total recovered</th>
        <th style="color: #fff; background:#EE2737FF;">total deceased</th>   
     </tr>
     
     <tr class="mb-5">
      <td style="background: #bed2f3;"> <?php echo $coronadata['cases_time_series']
      [$i]['totalconfirmed']  . "</br>"; ?> </td>
       <td style="background: #ffe493;"> <?php echo $coronadata['cases_time_series']
      [$i]['dailyconfirmed']  . "</br>"; ?> </td>
       <td style="background: #9ED9CCFF;"> <?php echo $coronadata['cases_time_series']
      [$i]['dailyrecovered']  . "</br>"; ?> </td>
       <td style="background: #fc95c6;"> <?php echo $coronadata['cases_time_series']
      [$i]['dailydeceased']  . "</br>"; ?> </td>
       <td style="background: #88d28b;"> <?php echo $coronadata['cases_time_series']
      [$i]['totalrecovered']  . "</br>"; ?> </td>
       <td style="background: #fb99a1;"> <?php echo $coronadata['cases_time_series']
      [$i]['totaldeceased']  . "</br>"; ?> </td>
</tr>

<?php
  
$i++;
}
  
?>


</table>
</div>


<div class="container scrolltop float-right pr-5">
  <i class=" fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
  </div>


   <!---------------footer part ----------->

<footer class="mt-5">
<div class="footer_style bg-dark text-white container-flued text-center">
<p> copyright  by coronaupdate</p>
</div>
</footer>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoint/4.0.1/jquery.waypoint.min.js"
    integrity="sha256
                -jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/counter-Up/1.0.0/jquery.counterup.min.js" 
 integrity="sha256
               -jtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuNSrik=" crossorigin="anonymous"></script>        
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>

  
<script>

//******************top  arrow  script************* */

mtbutton = document.getElementById(myBtn);
window.consol=function()  scrollFunction()};
Function scrollFunction(){
    if(document.body.scrollTop>  100  ||  document.documentElement.scrollTop>100){
        mybutton.style.display="block";
    } else{
        mybutton.style.display="none";
    }
}
function topFunction(){
    document.body.scroll=0;
    document.documentElement.scroll= 0;
}

  </body>
  </html>