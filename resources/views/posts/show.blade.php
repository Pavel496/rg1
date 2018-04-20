<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Rabota-gtn</title>

    <!-- Styles -->
    <link href="/front/css/app.min.css" rel="stylesheet">
    <link href="/front/css/custom.css" rel="stylesheet">
    {{-- <link href="css/style.css" rel="stylesheet"> --}}

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/front/img/favicon.ico">
  </head>

  <body class="nav-on-header bg-alt">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="/"><img src="/front/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="/"><img src="/front/img/logo.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="{{ route('dashboard') }}">Вход</a> или <a href="{{ route('register') }}">Регистрация по коду смс</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a class="active" href="/">Вакансии</a>
          </li>
          <li>
            <a href="#">Резюме</a>
          </li>
          <li>
            <a href="#">Организации</a>
          </li>
          <li>
            <a href="#">Полезное</a>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(/front/img/bg-banner2.jpg)">
      <div class="container">
        <div class="header-detail">
          {{-- <img class="logo" src="/front/img/logo-google.jpg" alt=""> --}}
          <div class="hgroup">
            <h1>{{ $post->title }}</h1>
            {{-- <h3><a href="#">Google</a></h3> --}}
            <span class="label label-success">{{ $post->category->name }}</span>
          </div>
          {{-- <time datetime="2016-03-03 20:00">2 days ago</time> --}}
          <hr>
          <p class="lead">{{ $post->excerpt }}</p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-phone"></i>
              <span>{{ $post->phone }}</span>
            </li>

            <li>
              <i class="fa fa-envelope"></i>
              <span>{{ $post->email }}</span>
            </li>

            {{-- <li>
              <i class="fa fa-money"></i>
              <span>{{ $post->salary }}</span>
            </li> --}}

            <li>
              <i class="fa fa-map-marker"></i>
              <span>{{ $post->address }}</span>
            </li>
          </ul>

          {{-- <div class="button-group">
            <ul class="social-icons">
              <li class="title">Share on</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <div class="action-buttons">
              <a class="btn btn-primary" href="#">Apply with linkedin</a>
              <a class="btn btn-success" href="#">Apply now</a>
            </div>
          </div> --}}

        </div>
      </div>
    </header>
    <!-- END Page header -->

    <!-- Main container -->
    <main>

      <!-- Job detail -->
      <section>
        <div class="container">

          <p>Google is and always will be an engineering company. We hire people with a broad set of technical skills who are ready to tackle some of technology's greatest challenges and make an impact on millions, if not billions, of users. At Google, engineers not only revolutionize search, they routinely work on massive scalability and storage solutions, large-scale applications and entirely new platforms for developers around the world. From AdWords to Chrome, Android to YouTube, Social to Local, Google engineers are changing the world one technological achievement after another.</p>

          <br>
          <h4>Обязанности</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non.</p>
          <ul>
            <li>Build next-generation web applications with a focus on the client side.</li>
            <li>Redesign UI's, implement new UI's, and pick up Java as necessary.</li>
            <li>Explore and design dynamic and compelling consumer experiences.</li>
            <li>Design and build scalable framework for web applications.</li>
          </ul>

          <br>
          <h4>Минимальная квалификация</h4>
          <ul>
            <li>BA/BS degree in a technical field or equivalent practical experience.  </li>
            <li>2 years of relevant work experience in software development.</li>
            <li>Programming experience in C, C++ or Java.</li>
            <li>Experience with AJAX, HTML and CSS.</li>
          </ul>

          <br>
          <h4>Предпочтительная квалификация</h4>
          <ul>
            <li>Interest in user interface design.</li>
            <li>Web application development experience.</li>
            <li>Experience working on cross-browser platforms.</li>
            <li>Development experience designing object-oriented JavaScript.</li>
            <li>Experience with user interface frameworks such as XUL, Flex and XAML.</li>
            <li>Knowledge of user interface design.</li>
          </ul>

        </div>
      </section>
      <!-- END Job detail -->

      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(/front/img/bg-facts.jpg)">
        <div class="container">

            <p class="text-center"><a class="btn btn-info" href="{{ route('dashboard') }}">Добавить вакансию</a></p>
            <br>
            <p class="text-center"><a class="btn btn-info" href="{{ route('dashboard') }}">Добавить резюме</a></p>

        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2018 All Rights Reserved by <a href="http:/angtn.ru/">Millenial</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">

<!-- Yandex.Metrikainformer --><a href="https://metrika.yandex.ru/stat/?id=47092890&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/47092890/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="47092890" data-lang="ru" /></a><!-- /Yandex.Metrikainformer --><!-- Yandex.Metrika counter --><script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47092890 = new Ya.Metrika({ id:47092890, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script><noscript><div><imgsrc="https://mc.yandex.ru/watch/47092890" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="/front/js/app.min.js"></script>
    <script src="/front/js/custom.js"></script>

  </body>
</html>
