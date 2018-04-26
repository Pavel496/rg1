<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>{{ config('app.name') }}</title>

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
          <a class="navbar-toggle" href="" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="/"><img src="/front/img/gtn.png" alt="logo"></a>
            <a class="logo-alt" href="/"><img src="/front/img/gtn.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="{{ route('dashboard') }}">Вход</a> или <a href="{{ route('register') }}">Регистрация</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a class="active" href="/">Вакансии</a>
          </li>
          <li>
            <a href="/resumes">Резюме</a>
          </li>
          <li>
            <a href="/companies">Организации</a>
          </li>
          <li>
            <a href="/useful">Полезное</a>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


@yield('content')


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2018 All Rights Reserved by <a href="http://angtn.ru/">Millenial</a>.</p>
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
    <a id="scroll-up" href=""><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="/front/js/app.min.js"></script>
    <script src="/front/js/custom.js"></script>

  </body>
</html>
