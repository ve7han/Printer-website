   
<html>

<head>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="public/js/main.js"></script>

   <style>
  
      footer{
        position: relative;
        width: 100%;
        height: auto;
        padding: 50px 100px;
        background: #111;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
      }
      footer .container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row;
      }
      footer .container .sec{
        margin-right: 30px;
      }
      footer .container .sec.aboutus{
        width: 40%;
      }
      footer .container  h2{
        position: relative;
        color: #fff;
        font-weight: 500;
        margin-bottom: 15px;
      }
      footer .container  h2:before {
        content: '';
        position: absolute;
        bottom : left;
        left: 0;
        width: 50px;
        height: 2px;
        background: #1aa3ff;
      }
      footer .container .sec.aboutus p{
        color: white;
      }
      form label{
        color: #fff;
      }
      form select{
        width: 150px;
        height: 25px;
        border-radius: 10px;
        background-color: #111;
        border-color: #1aa3ff;
        color: white;
        padding-left: 7px;
      }
      form input[type=submit]{
        padding: 4px 8px;
        border-radius: 10px;
        border-color: #1aa3ff;
        background-color: #1aa3ff;
        font-weight: 600;
      }


      .sci{
        margin-top: 20px;
        display: flex;
        margin-bottom: 40px;
      }
      .sci li {
        list-style: none;
      }
      .sci li a{
        color: #fff;
        display: inline-block;
        width: 40px;
        height: 40px;
        background: #222;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 4px;
      }
      .sci li a:hover{
        background: black;
      }
      .sci li a .fa{
        color: #fff;
      }
      .btn i{
        font-size: 20px;
        transition: 0.2s linear;
      }
      .btn:hover i{
        transform: scale(1.3);
        color: #1aa3ff;
      }
      .btn:hover::before{
        animation: aaa 0.7s 1;
        top: -10%;
        left: -10%;
      }

      .quicklinks{
        position: relative;
        width: 25%;
      }
      .quicklinks ul li {
        list-style: none;
      }
      .quicklinks ul li a{
        color : #999;
        text-decoration: none;
        margin-bottom: 10px;
        display: inline-block;
      }
      .quicklinks ul li a:hover{
        color: #1aa3ff;
      }


      .contact{
        width: calc(35% - 60px);
        margin-right: 0 !important;
      }
      .contact .info{
        position: relative;
      }
      .contact .info li{
        display: flex;
        margin-bottom: 16px;
      }
      .contact .info li a{
        text-decoration: none;
        color: #999;
      }
      .contact .info li span:nth-child(1){
        color:#fff;
        font-size: 20px;
        margin-right: 10px; 
      }
      .contact .info li span{
        color: #999;
      }
      .contact .info li span a {
          color: #999;
          text-decoration: none;
      }
      .contact .info li a :hover{
        color: #1aa3ff; 
      }
      .copyrightText {
        width: 100%;
        background: #181818;
        padding: 8px 100px;
        color: #999;
        text-align: center;
      }
      @media (max-width: 991px){
        footer{
          padding: 40px;
        }
        footer .container{
          flex-direction: column;
        }
        footer .container .sec{
          margin-right: 0;
          margin-bottom: 40px;
        }
        footer .container .sec.aboutus, .quicklinks, .contact{
          width: 100%;
        }
        .copyrightText{
          padding: 8px 40px; 
        }
      }
      h4 { 
        font-size: 15px;
        color: white;
        margin-bottom: 6px;
      }

   </style>

</head>
<body>   
   
<footer>

<!------------------ Section de propos -------------------------> 

<div class="container">
<div class="sec aboutus">
<h2> A propos de nous </h2>
<p> AWSPrint est une application web créer par Reda Benmoumen, Ayoub Azacri et Yasser Baidi, cette application facilite la gestion de n'importe quelle imprimerie. Pour nos services, nous offrons des différents types d'impression. etc ...
</p>        
<ul class="sci">
<li><a class="btn" href="www.facebook.com">  <i class="fab fa-facebook-f"></i> </a></li>
<li><a class="btn" href="www.twitter.com">  <i class="fab fa-twitter"></i>  </a></li>
<li><a class="btn" href="wwww.gmail.com">  <i class="fab fa-google"></i>  </a></li>
<li><a class="btn" href="www.instagram.com">  <i class="fab fa-instagram"></i>  </a></li>
<li><a class="btn" href="www.youtube.com">  <i class="fab fa-youtube"></i>  </a></li>
</ul>


</div>

<!------------------ Section des liens ------------------------->

<div class="sec quicklinks">
<h2> Autres liens</h2>
<ul>
<li><a href="#"> A propos de nous </a></li>
<li><a href="#"> FAQ </a></li>
<li><a href="#"> Politique de confidentialité </a></li>
<li><a href="#"> Aide </a></li>
<li><a href="#"> Conditions </a></li>
<li><a href="#"> Contactez nous </a></li>
</ul>
</div>

<!------------------ Section de contact ----------------------->

<div class="sec contact">
<h2> Information de contact </h2>
<ul class="info">
<li>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<span>647 Linda street <br> 
Universiapolis, Tilila, Agadir <br> Maroc </span>
</li>  
<li>
<span><i class="fa fa-phone" aria-hidden="true"></i></span>
<p> <a href="tel:+212-6-18-75-48-96">+212-6-15-66-94-07</a><br>
<a href="tel:+212-6-18-75-48-84">+212-5-18-75-48-84</a> </p>
</li> 
<li>
<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
<p><a href="mailto:abc@e-polytechnique.ma"> support@awsprint.ma</a></p>  
</li> 
</ul>
</div>

</div>

</footer> 
<!----------------- Section de COPYRIGHT ---------------------->

<div class="copyrightText">
<p> Copyright @ 2020 AWSPrint . Created by : Reda - Yasser - Ayoub </p>
</div>
   

</body>
</html>