<?php 
    $categories = new CategoriesController(); // creation object of type CategoriesController
    $categories = $categories->getAllCategories();
    if(isset($_POST["category_id"])){
        $products = new ProductsController();
        $products = $products->getProductsByCategory($_POST["category_id"]);
    }else{
        $data = new ProductsController();
        $products = $data->getAllProducts();
    }
?>
<!DOCTYPE html>
<html>
<head>

</head>

<style>


    /* Slider */

    .galleryContainer{
        width: 100%;
        height: 450px;
        margin: auto;
        user-select: none;
        box-shadow: 0px 0px 3px 1px #00000078;
        padding: 10px;
        box-sizing: border-box;
        background-color: #111; 
        margin-top : -35px;
    }
    .galleryContainer .slideShowContainer{
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: gainsboro;
        position: relative;
    }
    .galleryContainer .slideShowContainer #playPause{
        width: 32px;
        height: 32px;
        position: absolute;
        background-image: url(images/playPause.png);
        background-repeat: no-repeat;
        z-index: 5;
        background-size: cover;
        margin: 5px;
        cursor: pointer;
    }
    .galleryContainer .slideShowContainer #playPause:hover{
        opacity: .7;
    }
    .galleryContainer .slideShowContainer .imageHolder{
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0;
    }
    .galleryContainer .slideShowContainer .imageHolder img{
        width: 100%;
        height: 100%;
    }
    .galleryContainer .slideShowContainer .imageHolder .captionText{
        display: none;
    }
    .galleryContainer .slideShowContainer .leftArrow,.galleryContainer .slideShowContainer .rightArrow{
        width: 50px;
        background: #00000036;
        position: absolute;
        left: 0;
        z-index: 2;
        transition: background 0.5s;
        height: 72px;
        top: 50%;
        transform: translateY(-50%);
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .galleryContainer .slideShowContainer .rightArrow{
        left: auto;
        right: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .galleryContainer .slideShowContainer .leftArrow:hover,.galleryContainer .slideShowContainer .rightArrow:hover{
        background: #1aa3ff;
        cursor: pointer;
    }
    .galleryContainer .arrow{
        display: inline-block;
        border: 3px solid white;
        width: 10px;
        height: 10px;
        border-left: none;
        border-bottom: none;
        margin: auto;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }
    .galleryContainer .arrow.arrowLeft{
        transform: rotateZ(-135deg);
    }
    .galleryContainer .arrow.arrowRight{
        transform: rotateZ(45deg);
    }
    .galleryContainer .slideShowContainer>.captionTextHolder{
        position: absolute;
        z-index: 1;
        top: 145px;
        color: white;
        font-family: sans-serif;
        font-size: 33px;
        text-align: center;
        width: 100%;
        background: #00000047;
        height: 140px;
        line-height: 45px;
        overflow: hidden;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 15px;


    }
    .galleryContainer .slideShowContainer>.captionTextHolder>.captionText{
        margin: 0;
        font-size: 25px;
        font-weight : bold;
    }
    .galleryContainer #dotsContainer{
        width: 100%;
        height: 10%;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }
    .galleryContainer #dotsContainer .dots{
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        margin-left: 5px;
        background-color: #1aa3ff;
        cursor: pointer;
        transition:background-color 0.5s;
    }
    .galleryContainer #dotsContainer .dots:first-child{
        margin-left: 0;
    }
    .galleryContainer #dotsContainer .dots:hover,.galleryContainer #dotsContainer .dots.active{
        background-color: white;
    }
    .galleryContainer .moveLeftCurrentSlide{
        animation-name: moveLeftCurrent;
        animation-duration: 0.5s;
        animation-timing-function: linear;
        animation-fill-mode:forwards;

    }
    .galleryContainer .moveLeftNextSlide{
        animation-name: moveLeftNext;
        animation-duration: 0.5s;
        animation-timing-function: linear;
        animation-fill-mode:forwards;
    }
    @keyframes moveLeftCurrent {
        from {margin-left: 0;opacity: 1;}
        to {margin-left: -100%;opacity: 1;}
    }
    @keyframes moveLeftNext {
        from {margin-left: 100%;opacity: 1;}
        to {margin-left: 0%;opacity: 1;}
    }
    .galleryContainer .moveRightCurrentSlide{
        animation-name: moveRightCurrent;
        animation-duration: 0.5s;
        animation-timing-function: linear;
        animation-fill-mode:forwards;
    }
    .galleryContainer .moveRightPrevSlide{
        animation-name: moveRightPrev;
        animation-duration: 0.5s;
        animation-timing-function: linear;
        animation-fill-mode:forwards;
    }
    @keyframes moveRightCurrent {
        from {margin-left: 0;opacity: 1;}
        to {margin-left: 100%;opacity: 1;}
    }
    @keyframes moveRightPrev {
        from {margin-left: -100%;opacity: 1;}
        to {margin-left: 0%;opacity: 1;}
    }
    .slideTextFromBottom {
        animation-name: slideTextFromBottom;
        animation-duration: 0.7s;
        animation-timing-function: ease-out;
    }
    @keyframes slideTextFromBottom {
        from {opacity: 0;margin-top: 100px}
        to {opacity: 1;margin-top: 0px;}
    }
    .slideTextFromTop {
        animation-name: slideTextFromTop;
        animation-duration: 0.7s;
        animation-timing-function: ease-out;
    }
    @keyframes slideTextFromTop {
        from {opacity: 0;margin-top: -100px}
        to {opacity: 1;margin-top: 0px;}
    }

    /* Deux cercles */
    
    .deux_cercles{
    position: relative;
    padding-top: 100px;
    padding-bottom : 10px;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background-color: #f2f2f2;
    margin-bottom : -50px;
    
    }
    .circle_1 img, .circle_2 img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;


    }
    .circle_1, .circle_2{
    position: relative;
    overflow: hidden;
    }
    .circle_1 {
    width: 350px;
    height: 350px;
    float: left;
    border-radius: 50%;
    margin: 30px;
    shape-outside: circle();
    border: 3px solid #1aa3ff;
    }
    .circle_2{
    width: 250px;
    height: 250px;
    float: right;

    border-radius: 50%;
    margin: 30px;
    shape-outside: circle();
    border: 3px solid #1aa3ff;

    }
    .ttxtt p{
    font-size: 20px;
    margin-bottom: 10px;
    text-align: justify-all;
    margin-right: 20px;
    margin-left: 20px;
    padding : 50px;
    }
    .ttxtt h2{
    font-size: 40px;
    text-align: center;
    font-weight: bold;
    }
    /* Our team   */

  
    @import 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css';
@import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css';
@import 'https://fonts.googleapis.com/css?family=Raleway:100,600';
@import 'https://fonts.googleapis.com/css?family=Open+Sans:300';
 .section-title h2 {
  text-transform: uppercase;
}
.section-title {
  margin:  0;
}
.section-title p {
  text-transform: uppercase;
  font-weight:bold;
}
.single-team{
  padding-bottom: 70px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  box-shadow:5px 5px 15px #000;
  margin-left : 20%;
}

.team-img{
  position: relative;
  z-index: 5;
  overflow: hidden;
}
.team-img img{
  width: 100%;
  transition: .3s;
}
.single-team:hover .team-img img {
  transform: scale(1.1);
}
.team-content {
  height: 80px;
  width: 100%;
  position: absolute;
  text-align: center;
  overflow: hidden;
  bottom: 0;
  transition: all .4s;
  background: black;
  z-index:5;
}
.single-team:hover .team-content{
  height: 150px;
}
.team-info {
  padding: 5px 20px 5px 20px;
  transition: all .5s;
}
.single-team:hover .team-content{
  background: #000;
}
.single-team .team-content .team-info h3 {
  text-transform: uppercase;
  color: #1aa3ff;
  font-size: 16px;
  margin: 5px;
}
.team-info p {
  margin-top: 15px;
  color: #fff;
}
.single-team-text p{
  margin-top: 5px;
}
.team-text {
  color: #fff;
  padding: 0 10px 5px;
  font-size : 12px;
  font-weight : bold;

}


    /* Types impression */

    .objectifs{
    background: #fff;
    padding: 80px;
    text-align: center;
    }
    .objectifs .container{
    width: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
    }
    .objectifs-section{
    background: #111;
    background-size: cover;
    padding: 60px 0;
    }
    .inner-width{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    overflow: hidden;
    }
    .section-title{
    text-align: center;
    color: #1aa3ff;
    text-transform: uppercase;
    font-size: 30px;
    font-weight: bold;
    }
    .border{
    width: 180px;
    height: 4px;
    background: black;
    margin: 30px auto;

    }
    .objectifs-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    }
    .objectifs-box{
    max-width: 33.33%;
    padding: 10px;
    text-align: center;
    color: #ddd;
    cursor: pointer;
    }
    .objectifs-icon{
    display: inline-block;
    width: 70px;
    height: 70px;
    border: 3px solid #1aa3ff;
    color: #1aa3ff;
    transform: rotate(45deg);
    margin-bottom: 30px;
    margin-top: 16px;
    transition: 0.3s linear;
    }
    .objectifs-icon_exc{
    border-color: red;
    }
    .objectifs-icon i{
    line-height: 70px;
    transform: rotate(-45deg);
    font-size: 26px;
    }
    .objectifs-box:hover .objectifs-icon{
    background: #1aa3ff;
    color: #ddd;
    }
    .objectifs-title{
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: black;
    font-weight: bold;
    }
    .objectifs-desc{
    font-size: 15px;
    color : black;
    }
    @media screen and (max-width:960px) {
    .objectifs-box{
        max-width: 45%;
    }
    }
    @media screen and (max-width:768px) {
    .objectifs-box{
        max-width: 50%;
    }
    }
    @media screen and (max-width:480px) {
    .objectifs-box{
        max-width: 100%;
    }
    }

</style>

<body>

<!-- Slider -->


<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="https://ak.picdn.net/shutterstock/videos/3345632/thumb/1.jpg">
            <p class="captionText">  AWSPrint est votre partenaire idéal pour la réalisation de tous vos travaux 
            au meilleur prix du marché. </p>
        </div>
        <div class="imageHolder">
            <img src="https://buyonlylocallyprinting.com/wp-content/uploads/2019/01/hd-wide-format-printer-plotter-printing-test_e1a1ft_tx__F0010.png">
            <p class="captionText"> "Carte de visites coin arrondis" <br> Faites la différence et osez arrondir les ongles avec vos clients et partenaires grâce à de toutes nouvelles cartes de visite</p>
        </div>
        <div class="imageHolder">
            <img src="https://www.wallpapertip.com/wmimgs/51-519941_large-format-printing-large-format-printer-hd.jpg">
            <p class="captionText"> Vous envisagez de débuter votre projet et mieux gérer votre une imprimerie ?<br>
             AWSprint est votre meilleur choix
             </p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>

<!-- Informations --> 

<div class="deux_cercles">
        <div class="circle_1">
            <img src="https://bonsplansmaroc.com/wp-content/uploads/2019/02/photo-Le-printer.jpg">
            </div>
            <div class="circle_2">
                <img src="https://buyonlylocallyprinting.com/wp-content/uploads/2019/01/hd-wide-format-printer-plotter-printing-test_e1a1ft_tx__F0010.png">
            </div>

            <div class="ttxtt">
                <h2> Where print meets passion <br> "AWSPrint"</h2>
                <p>
                AWSPrint est l'une des plus grandes  applications de gestion des imprimeries en ligne d'Europe. Notre entreprise 
                innovante réunit plus de 700 experts à votre service. Fidèles à notre devise "Where 
                print meets passion", nous mettons notre enthousiasme et notre savoir-faire en matière 
                d'impression au service de vos projets.Depuis plus de 20 ans, notre entreprise basée à
                Dresde est reconnue pour son expertise dans le secteur B2B. Des dépliants et brochures 
                aux affiches, en passant par les catalogues et l'équipement des salons et événements 
                commerciaux, nous imprimons des supports publicitaires et professionnels de très haute 
                qualité pour votre entreprise.

                </p>
             </div>

</div>
<!-- Our team section -->

 
<div class="team-area" style="background-color : #f2f2f2"  >
  <div class="container" style="background-color : #f2f2f2">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
        <div class="border"></div>
          <h2>Our Team</h2>
        <div class="border"></div>
        </div>
      </div>

      <!--== Single Team Item ==-->
      <div class="col-md-3" style="margin-left : 10.25% ;" >
        <div class="single-team"  style="background : black">
          <div class="team-img"  style="height : 300px">
            <img src="/Imprimerie/images/yasser.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Yasser Baidi</h3>
              <p>Engineer Student</p>
            </div>
            <p class="team-text">3ème année génie informatique <br> Universiapolis </p>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3">
        <div class="single-team" >
          <div class="team-img" style="height : 300px">
            <img src="/Imprimerie/images/reeda.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Reda Benmoumen</h3>
              <p> Engineer Student</p>
            </div>
            <p class="team-text">3ème année génie informatique <br> Universiapolis </p>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3" style="margin-right : 10.25%">
        <div class="single-team" style="background : black">
          <div class="team-img"  style="height : 300px">
            <img src="/Imprimerie/images/ayoub.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Ayoub Azacri</h3>
              <p>Engineer Student</p>
            </div>
            <p class="team-text">3ème année génie informatique <br> Universiapolis </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


      


<!-- Les six types d'impression --> 


<div class="objectifs-section" style="background-color: #f2f2f2">
      <div class="inner-width">
        <div class="border"></div>
        <h1 class="section-title"> Nos types d'impressions</h1>
        <div class="border"></div>
        <div class="objectifs-container">

          <div class="objectifs-box">
            <div class="objectifs-icon">
              <i class="fas fa-book-open"></i>
            </div>
            <div class="objectifs-title"> Offset </div>

            <div class="objectifs-desc">
            L’impression offset est prédestinée aux grandes séries à imprimer :
             factures, liasses ou affiches en quantité s’impriment généralement en offset.
            </div>
          </div>

          <div class="objectifs-box">
            <div class="objectifs-icon">
              <i class="fas fa-award"></i>
            </div>
            
            <div class="objectifs-title"> Numérique</div>
            <div class="objectifs-desc">
            L’impression numérique convient pour l’impression de documents en petite série : cartes de visite, flyers,
            affiches ou encore brochures sont souvent imprimés en numérique.
            </div>
          </div>
            
          <div class="objectifs-box">
            <div class="objectifs-icon">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="objectifs-title">Flexographie</div>
            <div class="objectifs-desc">
            L’impression en flexographie est utilisée pour imprimer des étiquettes adhésives : les étiquettes 
            de produits agroalimentaires ou cosmétiques sont imprimées en flexographie.
            </div>
          </div>

          <div class="objectifs-box">
            <div class="objectifs-icon">
              <i class="fas fa-fist-raised"></i>
            </div>
            <div class="objectifs-title">Sérigraphie</div>
            <div class="objectifs-desc">
            L’impression en sérigraphie permet un fort dépôt d’encre qui confère intensité des couleurs
            et durabilité de l’impression sur le support, elle tolère des supports divers et variés.
            </div>
          </div>

          <div class="objectifs-box">
            <div class="objectifs-icon">
             <i class="fas fa-sitemap"></i>
            </div>
            <div class="objectifs-title">Héliographie</div>
            <div class="objectifs-desc">
            L'héliogravure ou rotogravure est un procédé d'impression particulièrement adapté aux très longs tirages où 
            une haute qualité de reproduction est exigée. 
            </div>
          </div>

          <div class="objectifs-box">
            <div class="objectifs-icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="objectifs-title">Typographie</div>
            <div class="objectifs-desc">
            L’impression typographique est un procédé d’impression de type direct qui consiste à imprimer sur un support 
            les caractères en relief qui forment des mots, une phrase, une ligne ou un texte.
            </div>
          </div>
        </div>
      </div>
</div>



<script>

var slideIndex,slides,dots,captionText;
function initGallery(){
    slideIndex = 0;
    slides=document.getElementsByClassName("imageHolder");
    slides[slideIndex].style.opacity=1;

    captionText=document.querySelector(".captionTextHolder .captionText");
    captionText.innerText=slides[slideIndex].querySelector(".captionText").innerText;

    //disable nextPrevBtn if slide count is one
    if(slides.length<2){
        var nextPrevBtns=document.querySelector(".leftArrow,.rightArrow");
        nextPrevBtns.style.display="none";
        for (i = 0; i < nextPrevBtn.length; i++) {
            nextPrevBtn[i].style.display="none";
        }
    }

    //add dots
    dots=[];
    var dotsContainer=document.getElementById("dotsContainer"),i;
    for (i = 0; i < slides.length; i++) {
        var dot=document.createElement("span");
        dot.classList.add("dots");
        dotsContainer.append(dot);
        dot.setAttribute("onclick","moveSlide("+i+")");
        dots.push(dot);
    }
    dots[slideIndex].classList.add("active");
}
initGallery();
function plusSlides(n) {
    moveSlide(slideIndex+n);
}
function moveSlide(n){
    var i;
    var current,next;
    var moveSlideAnimClass={
          forCurrent:"",
          forNext:""
    };
    var slideTextAnimClass;
    if(n>slideIndex) {
        if(n >= slides.length){n=0;}
        moveSlideAnimClass.forCurrent="moveLeftCurrentSlide";
        moveSlideAnimClass.forNext="moveLeftNextSlide";
        slideTextAnimClass="slideTextFromTop";
    }else if(n<slideIndex){
        if(n<0){n=slides.length-1;}
        moveSlideAnimClass.forCurrent="moveRightCurrentSlide";
        moveSlideAnimClass.forNext="moveRightPrevSlide";
        slideTextAnimClass="slideTextFromBottom";
    }

    if(n!=slideIndex){
        next = slides[n];
        current=slides[slideIndex];
        for (i = 0; i < slides.length; i++) {
            slides[i].className = "imageHolder";
            slides[i].style.opacity=0;
            dots[i].classList.remove("active");
        }
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);
        dots[n].classList.add("active");
        slideIndex=n;
        captionText.style.display="none";
        captionText.className="captionText "+slideTextAnimClass;
        captionText.innerText=slides[n].querySelector(".captionText").innerText;
        captionText.style.display="block";
    }

}
var timer=null;
function setTimer(){
    timer=setInterval(function () {
        plusSlides(1) ;
    },5000);
}
setTimer();
function playPauseSlides() {
    var playPauseBtn=document.getElementById("playPause");
    if(timer==null){
        setTimer();
        playPauseBtn.style.backgroundPositionY="0px"
    }else{
        clearInterval(timer);
        timer=null;
        playPauseBtn.style.backgroundPositionY="-33px"
    }
}
</script>
</body>

</html>