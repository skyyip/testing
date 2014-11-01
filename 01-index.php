<?php
  $pageTitle = 'home';
  $lang = "lang-en";       
  $site = "homepage";  /*Class for wrapper*/
?>

<?php
  include("include/head.php");
?>

<body class="home <?= $lang ?>">

  <div class="wrapper <?= $site ?>">
  
    <?php
       include("include/header.php") ;
    ?>
    
    <main id="main" role="main">
    
      <div class="owl-carousel-container-1">
        <div class="owl-carousel-1">
          <div class="item">
            <a href="#"><img src="assets/img/img_home-slide.jpg" alt="" /></a>
            <div class="banner-txt banner-txt-l">
              <h2>Long title can be 2 lines, Long title can be 2 lines, Long title can be 2 lines</h2>
              <p>Description can be 3 lines. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
            </div>
          </div>
          <div class="item">
            <a href="#"><img src="assets/img/img_home-slide.jpg" alt="" /></a>
            <div class="banner-txt banner-txt-r">
              <h2>Long title can be 2 lines, Long title can be 2 lines, Long title can be 2</h2>
              <p>Description can be 3 lines. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
            </div>            
          </div>
          <div class="item">
            <a href="#"><img src="assets/img/img_home-slide.jpg" alt="" /></a>
            <div class="banner-txt banner-txt-r">
              <h2>Long title can be 2 lines</h2>
              <p>Description can be 3 lines. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            </div>              
          </div>                  
        </div>      
      </div>
                
      <div class="home-content container">
        <div class="news-container">
          <h2>News</h2>
          <a class="btn-view-more" href="#">View more</a>
          <ul>
            <li class="clearfix">
             <a class="left-img" href="#">
               <img src="assets/img/img_home-news-01.png" alt="" />
             </a>
             <div class="right-txt">
               <a href="#">CUHK Receives Donation from HKJC for Teaching Hospital Project and CUHK Jockey Club Institute of Ageing</a>
               <span class="date">21 Aug 2014</span>
             </div>
            </li>
            <li class="clearfix">
             <a class="left-img" href="#">
               <img src="assets/img/img_home-news-02.png" alt="" />
             </a>
             <div class="right-txt">
               <a href="#">Eleven Students from the Faculty of Arts Received 'Sin Wai Kin CUHK  Golden Jubilee Scholarship in Arts, History and Philosophy</a>
               <span class="date">21 Aug 2014</span>
             </div>
            </li>              
          </ul>
           <a class="btn-donate" href="#">
             <img src="assets/img/btn_donation.png" alt="Make a gift Now - online donation" />
           </a>          
        </div>
        
        <div class="three-blk-container">
          <h2 class="visible-xs">Highlights</h2>
          <div class="blk blk-yellow clearfix">
            <a href="#">
              <div class="img"><img src="assets/img/img_home-sec-l.png" alt="" /></div>
              <div class="txt">
                <h2>Caring Alumni EcoCampus Trail</h2>
                <p>Alumni, staff and students of CUHK take pride in our beautiful green campus</p>  
              </div>
            </a>
          </div>
          <div class="blk blk-white clearfix">
            <a href="#">
              <div class="txt">
                <h2>Charles K. Kao Scholarship Endowment Fund</h2>
                <p>To nurture the scientific research and innovation among our talented young scholars</p>  
              </div>              
              <div class="img"><img src="assets/img/img_home-sec-r.png" alt="" /></div>
            </a>
          </div>
          <div class="blk-others clearfix">
            <div class="blk blk-half first">
              <div class="iframe-container">
                <!--<iframe width="100%" height="100%" src="//www.youtube.com/embed/znK652H6yQM?modestbranding=1;autohide=1&amp;showinfo=0&amp;controls=0;" frameborder="0" allowfullscreen></iframe>-->
                <iframe width="100%" height="100%" src="//www.youtube.com/embed/znK652H6yQM?modestbranding=1;autohide=1&amp;showinfo=0;" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="video-title">
                I.CARE Film Festival
                <a href="#" class="visible-xs">Watch Video ></a>
              </div>   
            </div>
            <div class="blk blk-half second">
              <a href="#">
                <div class="txt">
                  <h2>Gifts from the U.S. and Canada</h2>
                  <p>American and Canadian residents can support our various developments while enjoying tax benefit</p>  
                </div>              
              </a>                 
            </div>
            <div class="blk-quarter">
              <a class="btn-campaigns" href="#">
                <span><em>all</em> campaigns</span>
              </a>            
            </div>
            <div class="blk-quarter second">
              <a class="btn-options" href="#">
                <span><em>all</em> giving options</span>
              </a>               
            </div>           
          </div>                        
        </div>
        
        <div class="owl-carousel-container-2">
          <div class="desc">
            <h2>You Make a Difference</h2>
            <p class="hidden-xs">We are extremely grateful to our benefactors for their support which make the University to grow from strength to strength</p>
          </div>
          <div class="owl-carousel-2 owl-carousel-2-desktop hidden-xs">
            <?php for($i=0; $i<4; $i++):?>
            <div class="item clearfix">
              <div class="left-img">
                <img src="assets/img/img_home-carousel.jpg" alt="" />
              </div>
              <div class="right-txt"> 
                <h3>1400 <small>students</small></h3>
                <p>embark on their adventures in more than <strong>240 universities</strong> arcoss <strong>33 countries or regions</strong></p>
                <a class="btn-carousel-2" href="#">Student Development</a>
              </div>
            </div>
            <?php endfor; ?>
          </div>
          <div class="owl-carousel-2 owl-carousel-2-mobile visible-xs">
            <?php for($i=0; $i<4; $i++):?>
            <div class="item clearfix">
              <div class="left-img">
                <img src="assets/img/img_home-carousel.jpg" alt="" />
              </div>
              <div class="right-txt"> 
                <h3>1400 <small>students</small></h3>
                <p>embark on their adventures in more than <strong>240 universities</strong> arcoss <strong>33 countries or regions</strong></p>
                <a class="btn-carousel-2" href="#">Student Development</a>
              </div>
            </div>
            <?php endfor; ?>          
          </div>
        </div>  
                
      </div>             
            
    </main>

    <?php
      include("include/footer.php") ;
    ?>     
  </div>

<?php
  include("include/js.php");
?>

</body>