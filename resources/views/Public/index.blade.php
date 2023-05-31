<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Blokchain</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/assets/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="assets/images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="index">Asosiy</a>
        <a href="about">Haqida</a>
        <a href="services">Afzallik/kamchilik</a>
        <a href="crypto">Kriptovalyuta </a>
        <a href="videodars">Videodarslar</a>
        <a href="contact">Bog'lanish</a>
        <a style="color: #00ff48" href="login">{{$auth}}</a>
    </div>
    <!-- header -->
    <header class="sticky-top">
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index">Blokchain</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="http://www.instagram.com/m_farangiiz"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li> <a href="http://t.me/m_farangiiz"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="assets/images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
   <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="assets/images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>BLOKCHAIN<br> </h1>
                                                    <p>"Ma'lum qoidalar asosida tuzilgan ma'lumotni o'z ichiga olgan bloklarning doimiy ketma-ketlik zanjiridir"
                                                    </p>
                                                     </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="assets/images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>BLOKCHAIN<br></h1>
                                                    <p>"Taqsimlangan ma'lumotlar to'plami"
                                                    </p>
                                                     </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="assets/images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>BLOKCHAIN <br> </h1>
                                                    <p> "Tranzaksiyalar hisobi"
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
     <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>Blokchain haqida</h2>
                                </div>
                                <div class="about_text">
                                    <p>Ma’lumotlar bazasi sifatida blockchain ma’lumotlarni elektron shaklda raqamli formatda saqlaydi. Blockchainlar tranzaktsiyalarning xavfsiz va markazlashmagan yozuvini saqlash uchun Bitcoin kabi kriptovalyuta tizimlarida hal qiluvchi roli bilan mashhur.
                                    Bu deyarli barcha kriptovalyutalarning markazida joylashgan innovatsion maʼlumotlar bazasi texnologiyasi. Maʼlumotlar bazasining bir xil nusxalarini butun tarmoq boʻylab tarqatish orqali blokcheyn tizimni buzish yoki aldashni juda qiyinlashtiradi.</p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="assets/images/about2.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div id="wa_hover1" class="wallet_box text_align_center">
                        <i><img src="assets/images/wa1.svg" alt="#"/></i>
                        <h3>Afzalliklari</h3>

<p>Tranzaktsiylarning yuqori aniqliligi</p>
      <p>Blokchain tranzaktsiyasi bir nechta tugunlar tomonidan tekshirilishi kerakligi sababli, bu xatoni kamaytirish mumkin.</p>
      <p>Vositachilarga ehtiyoj yo'qligi</p>
      <p>Blokcheyn yordamida tranzaksiyadagi ikki tomon uchinchi tomon orqali ishlamasdan biror narsani tasdiqlashi va yakunlashi mumkin. Bu vaqtni tejaydi, shuningdek, bank kabi vositachi uchun toʻlov xarajatlarini tejaydi.</p>
      <p>Samarali transferlar</p>
      <p>Blokcheynlar 24/7 ishlayotganligi sababli, odamlar, ayniqsa xalqaro miqyosda moliyaviy va aktivlarni yanada samarali oʻtkazishlari mumkin. Ular bank yoki davlat idorasi hamma narsani qoʻlda tasdiqlashini bir necha kun kutishlari shart emas.</p>

      </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div id="wa_hover2" class="wallet_box text_align_center">
                        <i><img src="assets/images/wa2.svg" alt="#"/></i>
                        <h3>Kamchiliklari</h3>
                        <p>Yuqori energiya xarajatlari</p>
                        <p>Tranzaktsiyalarni tekshirish uchun barcha tugunlarning ishlashi bitta maʼlumotlar bazasi yoki elektron jadvalga qaraganda sezilarli darajada koʻproq elektr energiyasini oladi. Bu nafaqat blokcheynga asoslangan tranzaktsiyalarni qimmatroq qiladi, balki atrof-muhitga katta uglerod yukini ham yaratadi.</p>
                        <p>Aktivlarni yoʻqotish xavfi</p>
                        <p>Baʼzi raqamli aktivlar blokcheyn hamyonidagi kriptovalyuta kabi kriptografik kalit yordamida himoyalangan. Ushbu kalitni ehtiyotkorlik bilan saqlashingiz kerak. Agar raqamli aktiv egasi oʻz aktiviga kirish imkonini beruvchi shaxsiy kriptografik kalitni yoʻqotsa, hozirda uni qayta tiklashning iloji yoʻq — aktiv butunlay yoʻq boʻlib ketadi.
                        </p>
                        <p> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wallet -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>Kriptovalyuta</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimo" data-slide-to="1"></li>
                                        <li data-target="#testimo" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="assets/images/about2.png" alt="#"/></i>


                                                                </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>Kriptovalyuta - bu raqamli
                                                                pul, uni jismonan sezib bo'lmaydi, chunki ular faqat foydalanuvchining kriptovalyutasi qanchalik ko'pligi va uni qayerga o'tkazishi haqidagi ma'lumotlarni o'z ichiga olgan elektron reestrlarda saqlanadi. Bu reestrlar blokcheynlar deb ataladi va ularni buxgalteriya hisobi bilan solishtirish mumkin. Blockcheyn bitta qurilmada saqlanmaydi, balki tarmoqning barcha ishtirokchilariga yuboriladi, bu uning barcha hujayralarini tekshirishga va noto'g'ri bo'lganlarni o'chirishga imkon beradi, bu esa blokcheyn tizimini ancha xavfsiz va anonim qiladi, chunki hamyonda shaxsiy ma'lumotlar saqlanmaydi.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="assets/images/about2.png" alt="#"/></i>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>Kriptovalyuta maxsus elektron hamyonlarda saqlanadi, ularning turli xili bor va odatda har bir kriptovalyutaning o'z hamyoni bor. Uni ishlatish uchun foydalanuvchi lotin harflari va raqamlari to'plamidan iborat o'z manzilini oladi. U QR -kod sifatida ham ko'rsatilishi mumkin.Vaqt sinovidan o'tgan hamyonlarni tanlash kerak. Agar siz kriptovalyutani noma'lum va shubhali hamyonlarda saqlasangiz, unda sizning pulingiz hakkerlar qo'liga tushib, to'satdan yo'q bo'lib ketishi mumkin. Turli xil hamyonlarda kriptovalyutani himoya qilishning turli usullari mavjud: master kalitlar, maxfiy kalitlar, sirli iboralar va boshqalar.</p>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="assets/images/about2.png" alt="#"/></i>
                                                               </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>To'liq himoyalanish uchun ularni qurilmada, masalan, oddiy USB flesh qurilmada yoki oddiygina qog'oz parchasida saqlash tavsiya etiladi, asosiysi, qurilma Internetga ulanmagan bo'lsa yetarli. Yo'qotilgan taqdirda asl nusxasini tiklash uchun siz ushbu kalit yoki iboraning ko'p nusxalarini yaratishingiz kerak. Afsuski, agar siz pulingizni yo'qotib qo'ysangiz, uni qaytarib ololmaysiz.Kripto valyutasi bizning hayotimizga qanday ta'sir qiladi? 100 ta yirik bankning 38 tasi allaqachon Ripple kriptovalyutasi bilan hamkorlik o'rnatishgan va bu ko'rsatkich o'sishi mumkin. Kriptovalyutaning kelajagini aniq aytish mumkin emas, lekin aniq ayta olish mumkinki, bu bizning kundalik hayotimizga kiradi. U hatto odatdagi to'lov tizimini almashtirishi ham mumkin.</p>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->


    <!-- works -->
    <div class="works">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="wallet_box text_align_center">
                        <h3>Blokchain nima</h3>
                        <video id="v1" width="400px" controls>
                            <source src="assets/video/1.mp4" type="assets/video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wallet_box text_align_center">
                        <h3>Bitcoin nima</h3>
                        <video id="v2" width="400px" controls>
                            <source src="assets/video/2.mp4" type="assets/video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wallet_box text_align_center">
                        <h3>Registratsiya bo'lish</h3>
                        <video id="v3" width="400px" controls>
                            <source src="assets/video/3.mp4" type="assets/video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wallet_box text_align_center">
                        <h3>Bitcoinda ishlash</h3>
                        <video id="v4" width="400px" controls>
                            <source src="assets/video/4.mp4" type="assets/video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- works -->



    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Murojaat</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-6 ">
                                <input class="contactus" placeholder="Ismingiz" type="type" name="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Telefon raqam" type="type" name="Phone number">
                            </div>
                            <div class="col-md-6">
                                <textarea class="textarea" placeholder="Taklif yoki murojaat" type="type" Message="Name"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Yuborish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="index">Blokchain</a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                  <div class="Informa conta ">
                     <h3>Bog'lanish</h3>
                     <ul>
                        <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i> Tel:+99 899 123 45 67
                           </a>
                        </li>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i> masharipovafarangiz0510@gmail.com
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2023. Design by:Farangiz
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="assets/js/jquery.min.js "></script>
      <script src="assets/js/bootstrap.bundle.min.js "></script>
      <script src="assets/js/jquery-3.0.0.min.js "></script>
      <script src="assets/js/custom.js "></script>
<script>

</script>
   </body>
</html>
