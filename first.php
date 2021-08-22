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
   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
   aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="worldcorona.php">worldcorona</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">indiadaywise</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
      
      </li>
      
    </ul>
   
  </div>
</nav>
<div class="main_header">
<div class="row w-100 h-100">
  <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
    <div class="leftside w-100 h-100 d-flex justify-content-center
    align-items-center">
    <img src="images/eksath.png" width="300" height="300">
    </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
    <div class="rightside  w-100 h-100 d-flex justify-content-center
    align-items-center">
    <h1>Let's Stay Safe & Fight Togather Against Cor<span  class="corona_rot"> <img src="images/corona.png" width="50" height="50">
     </span>na Virus</h1>
    </div>
    </div>
</div>

</div>

<!--********************* corona latest update ******************-->

<section class="corona_update">
<div class="mb-3">
<h3 class="text-uppercase text-center">covind-19 updates</h3>
</div>

<div class="d-flex justify-content-around align-items-center">
<div>
<h1 class="count">1,524,266</h1>
<p>Passenger screenrd at airport</p>
</div>
<div>
<h1 class="count">512</h1>
<p>Active Covid-19 cases</p>
</div>
<div>
<h1 class="count">40</h1>
<p>Cured/dischaeged cases</p>
</div>
<div>
<h1 class="count">9</h1>
<p>Death cases</p>
</div>
</div>
</section>

<!--***************about section*****************-->


<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h1>About Covid-19</h1>
</div>

<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
<img src="images/aboutcorona.png" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
    <h2>What is COVID-19(Coronas-Virus)</h2>
    <p>The COVID-19 pandemic, also known as the coronavirus pandemic, 
    is an ongoing pandemic of coronavirus disease 2019 (COVID-19) caused
     by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). 
     It was first identified in December 2019 in Wuhan,... </p>
    <p> COVID-19 is a new strain of coronavirus that has not been 
    previously identified in humans. The COVID-19 is the cause of an outbreak 
    of respiratory illness first detected in Wuhan, Hubei province, China. 
    Since December 2019, cases have been identified in a growing number of countries.
     The District’s surveillance data can be found here.</p>
      </div>
     </div>
   </div>
   <!--/////////////////////Corona symptomps///////////////////////-->

   <div class="container-fluid  pt-5 pb-5" id="symid">
<div class="section_header text-center mb-5 mt-4">
<h1> Coronavirus symptoms</h1>
</div>

<div class="container">
<div class="row">
    <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
              <img src="images/cough.png"class="img-fluid" width="120"
                height="120">
                  <figcaption> cough</figcaption>
                   </figure>
                      </div>

                      <div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">

<img src="images/runnynoise.png"class="img-fluid" width="120"
height="120">
<figcaption> runny noise</figcaption>
</figure>
</div>

<div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">

<img src="images/fever.png"class="img-fluid" width="120"
height="120">
<figcaption> fever</figcaption>
</figure>
</div>

<div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">

<img src="images/cold.png"class="img-fluid" width="120"
height="120">
<figcaption> cold</figcaption>
</figure>
</div>

<div class="col-lg-4 col-md-4 col-12">
<figure class="text-center">

<img src="images/tried.png"class="img-fluid" width="120"
height="120">
<figcaption> triedness</figcaption>
</figure>
</div>

<div class="col-lg-4 col-md-4 col-12 ">
<figure class="text-center">

<img src="images/breathing.png"class="img-fluid" width="120"
height="120">
<figcaption> diffculty breathing(servere coses)</figcaption>
</figure>
</div>

       </div>
       </div>
       </div>


        <!--////////////////////////Prevention Against Coronavirus////////////////////-->

   <div class="container-fluid  sub_section pt-5 pb-5"  id="preventid">
<div class="section_header text-center mb-5 mt-4">
<h1> 6 Steps Prevention Against Coronavirus</h1>
</div>

<div class="container">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12 mt-5">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
   <figure class="text-center">

<img src="images/hand.png"class="img-fluid" width="90"
height="90">

</figure>
   
   </div>
   <div class="col-lg-8 col-md-8 col-12">
   <p>Regular handwashing is one of the best ways to remove germs, avoid getting sick, </p>
   </div>
   </div>
   </div>
   <div class="col-lg-4 col-md-4 col-12 mt-5">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
   <figure>
<img src="images/mouth.png"class="img-fluid" width="90"
height="90">
</figure>
</div>
<div class="col-lg-8 col-md-8 col-12">
<p>Wearing a face mask is an important way to lessen the spread of the coronavirus that causes COVID-19. </p>
      </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12 ">
   <img src="images/close.png"class="img-fluid" width="90"
height="90">
   <figure>
   </div>
   <div class="col-lg-8 col-md-8 col-12">
   <p> close contact is anyone who was within 6 feet of an infected person for a total of 15 minutes or more</p>
 </div>
 </div>
 </div>


 <div class="col-lg-4 col-md-4 col-12 mt-5 ">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
   <img src="images/stay.png"class="img-fluid" width="90"
height="90">
   <figure>
   </div>
   <div class="col-lg-8 col-md-8 col-12">
   <p> If you can stay home, then stay home, you selfish assholes. 
    that you want universal paid leave for workers less fortunate than you </p>
 </div>
 </div>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12 ">
   <img src="images/news.png"class="img-fluid" width="90"
height="90">
   <figure>
   </div>
   <div class="col-lg-8 col-md-8 col-12">
   <p>Latest news on the coronavirus, which has killed millions during a global pandemic.  </p>
 </div>
 </div>
 </div>

 <div class="col-lg-4 col-md-4 col-12 mt-5">
   <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
   <img src="images/any.png"class="img-fluid" width="90"
height="90">
   <figure>
   </div>
   <div class="col-lg-8 col-md-8 col-12">
   <p>Any diffculty fever,cough,breathing and runnynose any problem to go medicare and take the medicine </p>
 </div>
 </div>
 </div>

        <!--////////////////////////CONTACT US ASAP////////////////////-->

        <div class="container-fluid  pt-5 pb-5"  id="contactid">
<div class="section_header text-center mb-5 mt-4">
<h1> Contact</h1>
</div>
   <div class="container">
   <div class="row">
   <div class="col-lg-8 offsetlg-2 col-12">

   <form>
  <div class="form-group">
    <label>name</label>
    <input type="name" class="form-control" name="username" 
    placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" 
    placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" 
    placeholder="mobile"required autocomplete="off">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
  <label class="form-check-label" for="inlineCheckbox3">Defculty In Breath</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4" >
  <label class="form-check-label" for="inlineCheckbox3">Feeling Week</label>
</div>

                      <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

 <button type="submit" class="btn btn-primary" name="submit"> submit</button>
</form>

   </div>
   </div>
   </div>

</div>

<!--//////////////top curser///////////////-->
<div class="container scrolltop float-right pr-5">
<i class=" fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


   <!---------------footer part ----------->

   <footer class="mt-5">
<div class="footer_style bg-dark text-white container-flued text-center">
<p> copyright  by coronaupdate</p>
</div>
</footer>


    <script type="text/javascript">

    $('.count').counterUp({
      delay:10,
      time:3000
    })

    mybutton= document.getElementByid("myBtn");

    window.onscroll = function() {scrollFunction()};
    function scrollFunction(){
      if(document.body.scrollTop > 100 || document.documentElement.scrollTop> 100){
        mybutton.style.display ="block";
      }else{
        mybutton.style.display ="none";
      }
      }
    
    function topFunction(){
      document.body.scrollTop =0;
      document.documentElement.scrollTop=0;
    }
    </script>
</body>
</html>



       



