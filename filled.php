<?php
function prevent(){
    $url != 'addAdmin.php';

if ($_SERVER['HTTP_REFERER'] == $url) {
//   header('Location: login.php'); //redirect to some other page
  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");


  $url = '';
  exit();
}

}
?>
<?php 
@prevent();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="Debo Engineering" />
    <meta
      name="description"
      content="Sew le Sew - Charity Organization located in Jimma"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0" />
    <title>Sew le Sew - Charity Organization</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:ital,wght@0,400;1,300;1,400&family=Rubik&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Poppins:ital,wght@0,400;1,300;1,400&family=Rubik&display=swap" rel="stylesheet">   
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="creatingsteps.css" />
<script src="https://kit.fontawesome.com/10f6dbc809.js"
   crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Main Header -->
    <header class="main-header" id="home">
        <div> <nav class="navbar">
          <div class="navbar-title">Sew Le Sew Charity</div>
          <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
          <div class="navbar-links">
              <ul>
                  <li><a href="#home" id="h">Home</a></li>
                  <li><a href="#about" id="a">About</a></li>
                  <li><a href="#project" id="p">Projects</a></li>
                  <li><a href="#donate"id="d">Donate</a></li>
                  <li><a href="#contact" id="c">Contact</a></li>
              </ul>
          </div>
    </div>
      <div class="hero">
        <div class="thanks-box">
            <h1 class="thanks-h1">thank you</h1>
            <div class="thanks-dash"></div>
            <p class="thanks-p1">
               We've received the form you have filled. <br />
               <br />Thank you for being with us
            </p>
            <p class="thanks-p2">no one has never became poor by giving !</p>
          </div>
        <h1 class="hero-header">Good works </p>
        <h1 class="hero-header-sub">are food for evil days</h1>
        <button class="btn-hero"><a href="https://www.gofundme.com/f/sewlesew-begoadragot-organization-fundraising?utm_source=customer&utm_campaign=p_cp+share-sheet&utm_medium=copy_link" target="_blank">Donate Now</a></button>
      </div>
    </header>

    <!-- About -->
    <section class="about-section" id="about">
      <h2 class="section-title">ABOUT US</h2>
      <div class="dash"></div>
      <div class="about-container">
        <div class="about-text">
        <h2 class="about-header"
        >Who We Are</h2>
        <p class="about-description"
      >We are a charity Organization based in Jimma, Oromia, 
          Ethiopia. we have two hundred volunteers. 
          We give back to our society.
            A little help can mean a big thing!.

        </p>
          <button class="btn-read">Read More</button>
        </div>
        <div class="about-image">
            <img src="/img/sel.jpg" class="about-img" alt="Sew Le sew images">

        </div>
      </div>
      <div class="about-features-container">
        <div class="readmore" id="readmore">
          <div class="about_us_cards">
            <div class="about_us_card">
                <h4>Location
                    <br />
                    <hr />
                </h4>
                <p> current focus is on Jimma, southwest of ethiopia. we are delighted to cover wider in future </p>
            </div>
            <div class="about_us_card ">
                <h4>members
                    <br />
                    <hr />
                </h4>
                <p>currently we are more than two hundred members and our house is open for new comers </p>
            </div>
            <div class="about_us_card">
                <h4>charity
                    <br />
                    <hr />
                </h4>
                <p> we provide food and livelihood support and sustainable development of children and elderly persons 
                </p>
            </div>
           
           </div>
        </div>
        </div>
    </section>

    <!-- Projects -->
     <!-- Projects -->
     <section class="project-section" id="project">
      <div class="project-section-inner">
        <h2 class="section-title">Projects</h2>
        <div class="dash"></div>
        <div class="project-services"
        >
          <div class="project-services-box">
            <i class='fas fa-graduation-cap' style='font-size:42px;color:rgb(97,226,127);'></i>
            <h3 class="project-title-e">Educational support</h3>
            <p>We provide educational support</p>
          </div>
          <div class="project-services-box"
      >
      <i class='fas fa-house-user' style='font-size:42px;color:rgb(97,226,127);'></i>
            <h3 class="project-title-e">Shelter Giving</h3>
            <p>We give shelter</p>
          </div>
          <div class="project-services-box"       
           > <i class='fas fa-briefcase' style='font-size:42px;color:rgb(97,226,127)'></i>
            <h3 class="project-title-e">Income generation & job creation</h3>
            <p>We help people on jobs and generating incomes.</p>
          </div>
          <div class="project-services-box"
          >
          <i class='fas fa-hamburger' style='font-size:42px;color:rgb(97,226,127)'></i>
            <h3 class="project-title-e">Free Food for children</h3>
            <p>We help children by giving food freely</p>
          </div>
          <div class="project-services-box"           
         
          >
          <i class='fas fa-wheelchair' style='font-size:42px;color:rgb(97,226,127)'></i>
            <h3 class="project-title-e">Wheelchair support</h3>
            <p>We help with wheelchair support</p>
          </div>
          <div class="project-services-box"        
        
          >
          <i class='fas fa-hand-holding-heart' style='font-size:42px;color: rgb(97,226,127);'></i>
            <h3 class="project-title-e" >Support for disabled person</h3>
            <p>We care for disabled persons</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    
      <!-- Gallery -->
       <!--image slider start-->
      
       <section class="Gallery-section" id="Gallery">

       <div class="slider">
       <h2 class="section-title"> Gallery</h2>
       <div class="dash"></div>
            <div class="slides">   
          
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <input type="radio" name="radio-btn" id="radio6">
        <!--radio buttons end-->
      
       
        <div class="slide first">
                  <img src="aa.jpg" alt=" " class="img-gallery" />
                </div>
    
                <div class="slide">
                  <img src="./img/a1.jpg" alt=" " class="img-gallery" />
                </div>
    
                <div class="slide">
                  <img src="./img/a2.jpg" alt=" " class="img-gallery" />
                </div>
    
                <div class="slide">
                  <img src="./img/a2.jpg" alt=" " class="img-gallery" />
                </div>
    
                <div class="slide">
                  <img src="./img/a5.jpg" alt=" " class="img-gallery" />
                </div>
    
                <div class="slide">
                  <img src="./img/a6.jpg" alt=" " class="img-gallery" />
                </div>
                 <!--automatic navigation start-->
        <!-- <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
          <div class="auto-btn6"></div>
        </div>
        automatic navigation end -->
      </div>
      <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 6){
            counter = 1;
          }
        }, 5000);
        </script>
          
      </div> 
       </section>   

     <!-- Gallery container is ended -->

    <!-- Donate -->
    <section class="donate-section" id="donate">
      <h2 class="section-title">Donate</h2>
      <div class="dash"></div>
      <div class="grid-container">
        <div class="grid">
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="/img/cbe.jpeg" alt="Rome" />
              <div class="card-content">
                <h1 class="card-header">CBE</h1>
                <p class="card-text">
                  Donate us through this bank account<strong id="cbze-numb"> 1000251272321 </strong>
                </p>
                <button class="card-btn cbe-btn">Donate <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="/img/gofundme.png" alt="Grand Canyon" />
              <div class="card-content">
                <h1 class="card-header">Go Fund Me</h1>
                <p class="card-text">
                  Donate us. Your donation means a lot for us
                  <strong>12354656</strong>.
                </p>
                
                  
                  <a href="https://www.gofundme.com/f/sewlesew-begoadragot-organization-fundraising?utm_source=customer&utm_campaign=p_cp+share-sheet&utm_medium=copy_link" target="_blank"><button class="card-btn">Donate Now<span>&rarr;</span></button></a>
              </div>
            </div>
          </div>
          <div class="grid-item hibr">
            <div class="card">
              <img class="card-img" src="/img/hibret22.jpeg" alt="Maldives" />
              <div class="card-content">
                <h1 class="card-header">Hibret Bank</h1>
                <p class="card-text hibr-numb">
                  Donate us through the bank account
                  <strong id="hibret-numb">3091116511648018</strong>
                </p>
                <button class="card-btn hibre-btn">Donate <span>&rarr;</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End of donate section  -->

   <!-- ======== form section=============== -->

 


  <!-- end of form -->

    <!-- Contact Section -->

<section class="footer-section">
    <footer>
    <h2 class="section-title">Contact</h2>
    <div class="Dash"></div>
 <div class="row">
      <div class="cols">
       <div class="contact-box">
          <div class="contact-icon"><i class="fad fa-map-marker-alt"></i></div>
                  <div class="contact-text">
                       <h3 class="sub-header">Location</h3>
                           <p>Jimma,Oromia,Ethiopia</p>
                   </div>  
</div>
                      <div class="contact-box">
                    <div class="contact-icon"><i class="fas fa-phone-square-alt"></i></div>
                          <div class="contact-text">
                             <h3 class="sub-header phone">Phone</h3>
                               <p>+251-9-65-02-02-02</p>
                         </div>
                          </div>
                 
      
        
            
              <div class="contact-box">
                       <div class="contact-icon"> <a href="mailto:sewlesewjimma@gmail.com" class="email"><i class="fas fa-envelope-square"></i></a></div>
                             <div class="contact-text">
                                 <h3 class="sub-header">Email</h3>
                      <a href="mailto:http://gmail.com">sewlesewjimma@gmail.com</a>
                  </div>
             </div>
          <div class="contact-box">
          <div class="contact-icon"><a href="https://www.facebook.com/jimmasewlesew" class="facebook"><i class="fab fa-facebook"></i></a></div>
              <div class="contact-text">
                   <h3 class="sub-header">Facebook</h3>
                <a href="http://www.facebook.com/jimmasewlesew">facebook.com/jimmasewlsew</a>
             </div>
             </div>
       </div>
   </div>
 </div>
      
  
  

  <div class="hr-line"></div>
  <div class="foot-last">
    <p>Powered by <a href="#">Debo Engineering </a>&copy;2014</p>
   
  </div>
    </footer>
  </section>
   
    <script src="app.js"></script>
    <script  type="text/javascript" src="skrollr.js"></script>
    
    <script src="creatingsteps.js"></script>
  </body>
</html>
