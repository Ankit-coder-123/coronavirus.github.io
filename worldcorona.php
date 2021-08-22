<!DOCTYPE html>
<html>
<hecd>
<title></title>
<?php  include 'link/links.php'; ?>
<?php  include 'css/style.php'; ?>
<?php  include 'link/dbcon.php'; ?>
</head>
</body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID 19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
   aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item">
        <a class="nav-link" href="indiadaywise">indiadaywise</a>
      </li>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
      
      </li>
      
    </ul>
   
  </div>
</nav>


<section class="corona_update container-fluid">
<div class="my-5">
<h3 class="text-uppercase text-center"> World covind-19 updates</h3>
</div>

  <div class="table-responsive">

  <table class="table table-bordered table-striped text-center">
  <tr>
     <th class="text-capitalize">Country</th>
     <th class="text-capitalize">TotalConfirmed</th>
     <th class="text-capitalize">TotalRecovered</th>
     <th class="text-capitalize">TotalDeaths</th>
     <th class="text-capitalize">NewConfirmed</th>
     <th class="text-capitalize">NewRecovered</th>
     <th class="text-capitalize">NewDeaths</th>
 </tr>
 </div>
 <script>
 function fetch() {
      $.get("https://api.covid19api.com/summary",

      fuction(data){
         //consol.log(data['Contries'].length);
         var tbval=document.getElementById('tbval');

         for(var i=1; i<(data['contries'].length); i++){
             var x=tbval.insertRow();
            
             x.insertCell(0);
             tbval.rows[i].cells[0].inlineHTML =data['contries'][i-1]['Country'];
         tbval.rows[i].cells[0].style.background='#7a4a91';
         tbval.rows[i].cells[0].style.color ='#fff';

         x.insertCell(1);
             tbval.rows[i].cells[1].inlineHTML =data['contries'][i-1]['TotalConfirmed'];
         tbval.rows[i].cells[1].style.background='#4bb7d8';

         x.insertCell(2);
             tbval.rows[i].cells[2].inlineHTML =data['contries'][i-1]['TotalRecovered'];
         tbval.rows[i].cells[2].style.background='#4bb7d8';

         x.insertCell(3);
             tbval.rows[i].cells[3].inlineHTML =data['contries'][i-1]['TotalDeaths'];
         tbval.rows[i].cells[3].style.background='#f36e23';

         x.insertCell(4);
             tbval.rows[i].cells[4].inlineHTML =data['contries'][i-1]['Newconfirmed'];
         tbval.rows[i].cells[4].style.background='#4bb7d8';

         x.insertCell(5);
             tbval.rows[i].cells[5].inlineHTML =data['contries'][i-1]['NewRecovered'];
         tbval.rows[i].cells[5].style.background='#9cc850';

         x.insertCell(6);
             tbval.rows[i].cells[6].inlineHTML =data['contries'][i-1]['NewDeaths'];
         tbval.rows[i].cells[6].style.background='#f36e23';
         }
         }
      }
  }
</script>

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




<!-----------*top  arrow  script************* ---->

<script type="text/javascript">

mybutton = document.getElementById(myBtn);
window.onscroll=function()  {scrollFunction()};
Function scrollFunction(){
  if(document.body.scrollTop>  100  ||  document.documentElement.scrollTop>100){
      mybutton.style.display="block";
  } else{
      mybutton.style.display="none";
  }
}
function topFunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop= 0;
}


?>


</script>
  </body>
  </html>