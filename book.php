<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo">ダフェプロジェクト</a>

   <nav class="navbar">
      <a href="index.php">ホーム</a>
      <a href="about.php">会社概要</a>
      <a href="price.php"> Web 料金・プラン</a>
      <a href="webdevelopment.php">制作の流れ</a>
      <a href="translation.php"> 翻訳</a>
      <a href="package.php">ニュース</a>
      <a href="book.php">お問い合わせ</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/einfo.jpg) no-repeat">
   <!-- <h1>book now</h1> -->
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">お問い合わせ</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>氏名 :</span>
            <input type="text" placeholder="必須項目に入力してください。" name="name">
         </div>
         <div class="inputBox">
            <span>メールアドレス  :</span>
            <input type="email" placeholder="必須項目に入力してください。" name="email">
         </div>
         <div class="inputBox">
            <span>連絡先電話番号 :</span>
            <input type="number" placeholder="必須項目に入力してください。" name="phone">
         </div>
         
         <div class="inputBox">
            <span>お問い合わせ内容 :</span>
            <input type="text" placeholder="必須項目に入力してください。" name="address">
         </div>
      
         <!-- <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div> -->
      </div>

      <input type="submit" value="送信する" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> ホーム</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> 会社概要</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> ニュース</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> お問い合わせ</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <!-- <a href="#"> <i class="fas fa-angle-right"></i> about us</a> -->
         <a href="privacypolicy.php"> <i class="fas fa-angle-right"></i> プライバシーポリシー</a>
         <!-- <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a> -->
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +81-086-238-8320 </a>
         <a href="#"> <i class="fas fa-phone"></i> +81-086-238-8320 </a>
         <a href="#"> <i class="fas fa-envelope"></i> admin@danfeproject.com</a>
         <a href="#"> <i class="fas fa-map"></i> Danfe Project <br>〒700-0907 <br>岡山県岡山市北区下石井2-9-67 1F </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/danfeproject/?ref=pages_you_manage"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/bistaraiemi"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/danfeproject2998/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://youtube.com/channel/UCHDZ2-sy5TqL9riYdgZNCCw"> <i class="fab fa-linkedin"></i> youtube </a>
      </div>

   </div>

   <button class="scroll-top">
            <div class="arrow up"></div>
            <span class="scroll-top-text">up</span>
          </button>

   <div class="credit"> <span>Copyright 2022©danfeproject</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/common/js/"></script>

<script>
        // NOTICE: This pen may appear to not work on mobile devices, but it is  due to the codepen footer and the browser's bottom menu bar that hide the button. It should work fine when implemented for your website

        // used to avoid using 255, thus generating white-ish backgrounds that make text unreadable
        const colorMax = 192;

        // gets the breakpoint at which the scroll-to-top button should appear
        const scrollBreakpoint = window.innerHeight * 0.9;

        document.addEventListener('DOMContentLoaded', () => {
            randomizeBackgrounds();
            setupScrollListener();
            setupScrollEvent();
        });

        // scrolls window to top
        function setupScrollEvent() {
            const scrollButton = $('.scroll-top');
        
            scrollButton.on('click', function() {
                var position = 0;
                var speed = 600;
                $("html,body").animate({scrollTop:position},speed);
            });
        }

        // prepares the window for a scroll event to show the scroll button
        function setupScrollListener() {
            window.addEventListener('scroll', (e) => {
                const scrollButton = document.querySelector('.scroll-top');

                // const scrollOffset = document.scrollingElement.scrollTop;
                const scrollOffset = window.scrollY;

                if (scrollOffset >= scrollBreakpoint) {
                    scrollButton.classList.add('visible');
                } else if (scrollOffset <= 0) {
                    scrollButton.classList.remove('visible');
                }
            });
        }

        function randomizeBackgrounds() {
            // get all the content containers
            const contentContainers = document.querySelectorAll('.content-container');

            [].forEach.call(contentContainers, container => {
                // assign random background
                container.style.background = `rgb(${randVal(colorMax)},${randVal(colorMax)},${randVal(colorMax)})`;
            });
        }

        // random between 0 to max
        function randVal(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }

        function SVS_B(eAmt, where) {
            // scroll by half the hundredth of the top offset if destination is not top (since to center only involves scrolling either in the top or bottom half of the window)
            if (where == "center" || where == "") {
                window.scrollBy(0, eAmt / 2);
            }
            // otherwise scroll the full amount
            if (where == "top") {
                window.scrollBy(0, eAmt);
            }
        }
    </script>

</body>
</html>