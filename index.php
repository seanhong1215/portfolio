<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('include/common.php');?>
</head>

<body>
<?php include('include/header.php');?>
  <div class="main">
    <section class="about d-flex">
      <div class="about-media">
        <div class="about-photo">
          <img src="images/About/001.jpg" alt="">
        </div>
      </div>
      <div class="about-txt">
        <h4>Sean</h4>
        <small>UI/UX Design | 前端設計師</small>
        <p>致力於成為一個產品設計師，努力實踐自己目標，過去一年擔任網頁前端工程師，慢慢找出自己的興趣與志業。喜歡透過團隊協作的方式開發一個從無到有的產品，對於設計有很大的興趣，想要將生活與興趣結合，並讓興趣變成自己的個人品牌來經營，為了成就更好的自己，創造自己的理想生活。<br><br>
過去2年我一直是網頁前端工程師，除了持續學習程式的技術外，針對專案管理、產品設計流程有極大的好奇，透過線上學習及社群小聚，慢慢培養起產品設計的思考能力，短短半年的時間，就找到我第一份產品設計的工作，從中也嘗試自己接案，成為自由工作者。</p>
        <a href="#sean" id="cross" class="btn btn-primary scrollTop">繼續閱讀 <i class="fas fa-plus" aria-hidden="true"></i></a>
      </div>
    </section>
    <section id="sean" class="about-story-bg">
      <div class="about-story">
      <div class="story-title">關於Sean的故事</div>
      <p>出生於台中的九零年代城市男孩，冷凍空調系畢業卻不務正業，成為一個行銷與設計之間的網頁設計師，帶著一台筆電在不同的城市體驗生活。做了三年的行銷，一年半的網頁前端設計師，目前在台中嘗試挑戰跨領域的產業，UI/UX科技產業，並尋找自己最喜歡的生活模式。<br><br>

Sean是個迷戀遊戲世界同時又喜歡戶外活動的社交男，很愛探索人與人之間的情感交流、更愛探索自己的心靈成長，享受體驗生活、獨自沈浸於大自然的懷抱。可以為了學習設計與不同產業的新知、看書和學習線上課程而忙到忘記要吃飯(時常只喝水來度過一天)，近年來透過自己架網站、學習網頁與前端設計之間不同的技術，逐漸轉為產品思維與設計思考等議題。</p>
<div class="em-block">
      <p>27歲那一年決定摸索自己不同的興趣<br>發現找到一個職業不該是目標，找到一種生活才是。</p>
    

    </div>
    </div>
</section>
    
  </div>
  <?php include('include/footer.php');?>
  <script>
     var pagetop = $(window).scrollTop();

$(window).scroll(function(){
    pagetop = $(window).scrollTop();
    
    if( pagetop > 1000 ){
        $('.top').fadeIn();
    }else{
        $('.top').fadeOut();

    }
});

$('.top').click(function(){
$('html,body').animate({'scrollTop':0},700);
});
  </script>
</body>

</html>