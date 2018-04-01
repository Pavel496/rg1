<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Job list</title>

    <!-- Styles -->
    <link href="front/css/app.min.css" rel="stylesheet">
    <link href="front/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="front/img/favicon.ico">
  </head>

  <body class="nav-on-header bg-alt">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="front/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="front/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.html">Home</a>
            <ul>
              <li><a href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Position</a>
            <ul>
              <li><a class="active" href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(front/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Более 1000 активных вакансий у нас на сайте!</h1>
        <p class="lead text-center">Каждый день более 30 новых вакансий</p>

        {{-- <form class="header-job-search">
          <div class="input-keyword">
            <input type="text" class="form-control" placeholder="Job title, skills, or company">
          </div>

          <div class="input-location">
            <input type="text" class="form-control" placeholder="City, state or zip">
          </div>

          <div class="btn-search">
            <button class="btn btn-primary" type="submit">Find jobs</button>

          </div>
        </form> --}}

<div class="container">
  <form action="#">

    <div class="row">
      <div class="form-group col-xs-12 col-sm-4">
        <input type="text" class="form-control" placeholder="Keyword">
      </div>

      <div class="form-group col-xs-12 col-sm-4">
        <input type="text" class="form-control" placeholder="Location">
      </div>

      <div class="form-group col-xs-12 col-sm-4">
        <select class="form-control selectpicker" multiple>
          <option selected>All categories</option>
          <option>Developer</option>
          <option>Designer</option>
          <option>Customer service</option>
          <option>Finance</option>
          <option>Healthcare</option>
          <option>Sale</option>
          <option>Marketing</option>
          <option>Information technology</option>
          <option>Others</option>
        </select>
      </div>

    </div>

    <div class="button-group">
      <div class="action-buttons">
        <button class="btn btn-primary">Apply filter</button>
      </div>
    </div>

  </form>

</div>

      </div>


      {{-- <div class="container">
      </div> --}}

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          {{-- <header class="section-header">
            <span>Свежее</span>
            <h2>Новые вакансии</h2>
          </header> --}}
          <div class="row">

            {{-- <!-- Job item -->
            @foreach($vacancies as $vacancy)
            <div class="col-xs-12">
              <a class="item-block" href="#">
                <header> --}}
<!--                  <img src="/img/logo.png" alt="">-->
                  {{-- <div class="hgroup">
                    <h4>{{ $vacancy->title }}</h4>
                    <h5>{{ $vacancy->text }}</h5> --}}
                   {{--@foreach ($vacancy->sphere_id as $singleSphereId)
                        <span class="label label-info label-many">{{ $singleSphereId->title }}</span>
                    @endforeach--}}

                  {{-- </div> --}}
<!--                  <div class="header-meta">-->
                    {{-- <span class="location">{{ $vacancy->company_address }}</span>
                    <h5>{{ $vacancy->phone_temp }}</h5> --}}

                    {{--@foreach ($vacancy->schedule_id as $singleScheduleId)
                        <span class="label label-success label-many">
                        {{ $singleScheduleId->title }}</span>
                    @endforeach--}}

<!--                  </div>-->
                {{-- </header>
              </a>
            </div> --}}
            <!-- END Job item -->
            {{-- @endforeach --}}
            @foreach($posts as $post)
            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="front/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>{{ $post->title }}</h4>
                    <h5>Google <span class="label label-success">{{ $post->category->name }}</span></h5>
                  </div>
                  <time datetime="2016-03-10 20:00">34 min ago</time>
                </header>

                <div class="item-body">
                  <p>A rapidly growing, well established marketing firm is looking for an experienced web developer for a full-time position. In this role, you will develop websites, apps, emails and other forms of digital electronic media, all while maintaining brand standards across design projects and other marketing communication materials.</p>
                </div>

                <footer>

                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Menlo Park, CA</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$90,000 - $110,000 / year</span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span>Master or Bachelor</span>
                    </li>
                  </ul>

                </footer>
              </a>
              @include('posts.tags')
            </div>
            <!-- END Job item -->
          @endforeach

          </div>


          <!-- Page navigation -->
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <i class="ti-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END Page navigation -->

        </div>
      </section>


            <!-- Facts -->
            <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(/front/img/bg-pattern.png)">
              <div class="container">

                <div class="row">
                  <div class="counter col-md-4 col-sm-6">
                    <p><span data-from="0" data-to="1111"></span>+</p>
                    <h6>Вакансий</h6>
                  </div>

      {{--            <div class="counter col-md-3 col-sm-6">
                    <p><span data-from="0" data-to="1200"></span>+</p>
                    <h6>Members</h6>
                  </div>--}}

                  <div class="counter col-md-4 col-sm-6">
                    <p><span data-from="0" data-to="100"></span>+</p>
                    <h6>Резюме</h6>
                  </div>

                  <div class="counter col-md-4 col-sm-6">
                    <p><span data-from="0" data-to="1500"></span>+</p>
                    <h6>Организаций</h6>
                  </div>
                </div>

              </div>
            </section>
            <!-- END Facts -->


            <!-- How it works -->
            <section>
              <div class="container">

                <div class="col-sm-12 col-md-6">
                  <header class="section-header text-left">
                    <h2>О нашем сервисе</h2>
                  </header>

                  <p class="lead">При поиске работы в Гатчине многие сталкиваются с проблемой поиска вакансий. Наш сервис позволяет решить эту проблему. Мы собираем вакансии Гатчины со всего интернета и публикуем их в одном месте. Если у Вас есть предложения или рекомендации по нашему сервису пишите на почту <a href="info@rabota-gtn.ru">info@rabota-gtn.ru</a></p>
                  <p>Если Вы ищите работу, то можете разместить Ваше резюме и получать звонки от работодателей. Главное не забывать поднимать Ваше резюме каждые 14 дней. </p>


                  <br><br>
                  {{--<a class="btn btn-primary" href="page-typography.html">Learn more</a>--}}
                </div>

                <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
                  <br>
                  <img class="center-block" src="/front/img/how-it-works.png" alt="how it works">
                </div>

              </div>
            </section>
            <!-- END How it works -->


            <!-- Categories -->
            <section class="bg-alt">
              <div class="container">
                <header class="section-header">
                  <h2>Самые популярные вакансии</h2>
                  <p>В данных категориях больше всего открытых вакансий</p>
                </header>

                <div class="category-grid">
                  <a href="job-list-1.html">
                    <i class="fa fa-bus"></i>
                    <h6>Транспорт</h6>
                    <p>Водители</p>
                  </a>

                  <a href="job-list-2.html">
                    <i class="fa fa-line-chart"></i>
                    <h6>Учет</h6>
                    <p>Бухгалтеры</p>
                  </a>

                  <a href="job-list-3.html">
                    <i class="fa fa-medkit"></i>
                    <h6>Медицина</h6>
                    <p>Сестры по уходу, клининг менеджеры</p>
                  </a>
                </div>

              </div>
            </section>
            <!-- END Categories -->


            <!-- Newsletter -->
            <section class="bg-img text-center" style="background-image: url(/front/img/bg-facts.jpg)">
              <div class="container">

                  <p class="text-center"><a class="btn btn-info" href="#">Добавить вакансию</a></p>
                  <br>
                  <p class="text-center"><a class="btn btn-info" href="#">Добавить резюме</a></p>

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
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="front/js/app.min.js"></script>
    <script src="front/js/custom.js"></script>

  </body>
</html>
