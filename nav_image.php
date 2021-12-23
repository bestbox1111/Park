
<head>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/nav_image.css">
    <script src="js/jquery-3.6.0.js"></script>
 
</head>





       <!-- 네비아래이미지부분 -->
       <div id="content" class="swiper-container" >
            <div class="content_img swiper-wrapper" >
                 <img src="img/food4.jpg" alt="" class="swiper-slide">
                 <img src="img/food5.jpg" alt="" class="swiper-slide">
                 <img src="img/food1.jpg" alt="" class="swiper-slide">
                 <img src="img/food2.jpg" alt="" class="swiper-slide">
            </div>
        </div>

       
        <script>
        const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 1500,
    disableOnInteraction: false,
},


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
    </script>
