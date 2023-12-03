<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tennis </title>
    <link rel="stylesheet" href="teniss.css">
    
</head>
<body>
    <header>
      
        
       
        <h1 style ="color :aquamarine;">CLUB DE TENNIS</h1>
        <div id="menu">
            <ul>
                 <li id="aa"><a style="color: black;" href ="#">home page</a></li>
               
                <?php 
                if(isset($_SESSION['email'])){
                    echo '<li id="aa" > <a style="color: white;" href="expérience/exp.php">Rédiger</a></li>'; 
                    echo '<li id="aa" ><a style="color: white;" href="php/logout.php">Déconnexion</a></li>';
                    }
                else{
                    echo '<li id="aa" > <a style="color: white;" href="connexion/connexion.html">connecter</a></li>'; 
                echo '<li id="aa" ><a style="color: white;" href="inscrire/inscrire.html">inscrire</a></li>';
                }
                 ?>
                
            </ul>
            </div>
            <div id="propos">
            <p>"Bienvenue sur ce site, ici nous sommes 
                intéressés à diffuser la culture du tennis
                 et à présenter ses joueurs et ses tournois<br> 
                vous pouvez aussi également partager avec nous
                 quelques expériences ou sentiments sur ce beau sport"
                </p>
        </div>

        

    </header>
    <hr>
    <div id="parti">
        <div id="position1"><img src="https://img.icons8.com/emoji/48/000000/feather-emoji.png"/ width="30px">
        </div>
       
       <div id="position2"><img src="https://img.icons8.com/emoji/48/000000/feather-emoji.png"/ width="30px">
    </div>
           
           <h1 id="h1">Nos articles</h1>
 
     <div id="experience">
         <div id="experience2"><p >Je suis Ahmed Al-Qafanji d'Irak, nous avons vécu 
            dans un état de guerre qui a duré plusieurs jours,
             c'est vrai nous avons été blessés et nous avons pleuré,
             mais la seule chose qui m'a fait m'accrocher à ce monde
             c'est l'amoure de ce sport.Je jouais toujours avec mes amis et
             m'amusais et suivais aussi les matchs internationaux
            Je regarde aussi  ons Jaber, et je suis content de sa carrière
            C'est notre fierté...........</p>
        
         
            <br>
            
                <a style="text-decoration:none; background-color:#9ACD32;color:white;padding: 5px;
    border-radius: 10px;font-size:30px" href="articlee.php">More</a>
            
        </div>
     </div>
    </div>
    <hr>

    <div> 
       

        <div id="position3"><img src="data:image/png;base64,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
            VORK5CYII=" width="30px">
        </div>
        <div id="position4"><img src="data:image/png;base64,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
            VORK5CYII=" width="30px">
        </div>
        
        <h1>Découvrez le monde du tennis</h1>
    </div>


  
      
            
            
        
            
            
           <div id="djoko">
            
            <div class="slideshow-container">
            
            <div class="mySlides fade">
             
              <img src="1.jpg" style="width:45%">
            
            </div>
            
            <div class="mySlides fade">
             
              <img src="4.4.jpg" style="width: 60%">
             
            </div>
            
            <div class="mySlides fade">
              
              <img src="3.jpg" style="width:54%">
              
            </div>
            
           
            
            
                <div class="mySlides fade">
                 
                  <img src="2.jpg" style="width:70%">
               
                </div>
               
                   
            
                        <div class="mySlides fade">
                         
                          <img src="5.jpg" style="width:60%">
                    
                        </div>
                        
            
                            <div class="mySlides fade">
                             
                              <img src="6.png" style="width:52%">
                            
                            </div>
                           
            
                                <div class="mySlides fade">
                                 
                                  <img src="7.jpg" style="width:55%">
                              
                                </div>
                                
            
                                    <div class="mySlides fade">
                                     
                                      <img src="8.jpg" style="width:64%">
                                
                                    </div>
                         
            
                                        <div class="mySlides fade">
                                         
                                          <img src="9.jpg" style="width:63%">
                                  
                                        </div>
                                  
            
                                            <div class="mySlides fade">
                                             
                                              <img src="10.jpg" style="width:56%">
                                            </div>
                                            </div>
                                          </div> 
            <br>

            
            <div>
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
            
           
        
        <div id="lala">
               <a  href="les joueurs.html">top 10</a>
        </div> 
        <br>
        <br>
    



    
    <div id="help">
        <div id="grand">
        <img src="22.jpg"  width="70%"height=60%>
        <div >
            <a  href="grand.html">les grand chlem</a>
     </div> 
    </div>
    <div class="vl"></div>
</div>


<div id="help">
    <div id="grande">
    <img src="89.png"  width="100%"height=100%>
    <br>
    <div >
        <a  href="https://www.lequipe.fr/Tennis/atp/epreuve-simple-messieurs/page-classement-individuel/general">classements mondiale</a>
 </div> 
</div>
</div>

<footer>
<div id="footoo">
    <div>
        <div id="ld">
        untitled and all rights reserved| photos by <a href ="#" >moi</a>|design by <a href="#">moi aussi</a>
        </div>
    </div>

</div>

  <div id="denden1">
    Ⓒ 2021 CLUB DE TENNIS
  </div>
  <div id="denden2">
      <div id="ma">
      <a href="#"><img src="f.png"></a>
      <a href="#"><img src="i.png"></a>
      <a href="#"><img src="t.png"></a>
      </div>
  </div>

</footer> 
</body>
</html>