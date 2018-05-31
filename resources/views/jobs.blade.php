@extends('layout')

@section('content')
<!-- Page header -->
<header class="page-header bg-img" style="background-image: url(/front/img/bg-banner1.jpg);">
  <div class="container page-name">
    {{-- <h1 class="text-center">Внимание! Сайт работает в режиме отладки</h1> --}}
    <h1 class="text-center">Более 1000 активных вакансий у нас на сайте!</h1>
    <p class="lead text-center">Каждый день более 30 новых вакансий Гатчины и района</p>

    <div class="row">
      <div class="col-md-12 col-md-offset-2">

        <form class="header-job-search" method="GET" action="{{ url('my-search') }}">
        {{-- <form class="header-job-search"> --}}
          <div class="input-keyword">
            <input type="text" name="search" class="form-control" value="{{ old('search') }}" placeholder="Просто напишите, что хотите найти">
          </div>
          <div class="btn-search">
            <button class="btn btn-primary" type="submit">Найти</button>
          </div>
        </form>

      </div>
    </div>

  </div>

</header>
<!-- END Page header -->


<!-- Main container -->
<main>
  <section class="no-padding-top bg-alt">
    <div class="container">
      <header class="section-header">
        <span>Свежее</span>
        <h2>Новые вакансии</h2>
      </header>
      <div class="row">

        {{-- <!-- Job item -->
        @foreach($vacancies as $vacancy)
        <div class="col-xs-12">
          <a class="item-block" href="">
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
          {{-- <span>
            <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a>
          </span> --}}
          <a class="item-block" href="{{ route('posts.show', $post) }}">
          {{-- <a class="item-block"> --}}
            <header>
              {{-- <img src="//front/img/logo.png" alt=""> --}}
              <div class="hgroup">
                <h4>{{ $post->title }}</h4>
                {{-- <h5>Millenial <span class="label label-success">{{ $post->category->name }}</span></h5> --}}
                <span class="label label-success">{{ $post->category->name }}</span>
              </div>
              <time>{{ optional($post->updated_at)->format('d M Y H:m') }}</time>
            </header>

            <div class="item-body">
              <p>{{ $post->excerpt }}</p>
            </div>

            <footer>

              <ul class="details cols-3">
                <li>
                  <i class="fa fa-phone"></i>
                  <span>{{ $post->phone }}</span>
                </li>


                @if (filter_var($post->email, FILTER_VALIDATE_EMAIL))
                  <li>
                    <i class="fa fa-envelope"></i>
                    <span>{{ $post->email }}</span>
                  </li>
                @else
                  <li>
                    <i class="fa fa-envelope"></i>
                    <span>нет почты</span>
                  </li>
                @endif

                {{-- <li>
                  <i class="fa fa-money"></i>
                  <span>{{ $post->salary }}</span>
                </li> --}}

                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>{{ $post->address }}</span>
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
      {{-- <nav class="text-center">

        @if( method_exists($posts,'links') )

 {{  $posts->links() }}


        @endif --}}
        {{-- <ul class="pagination">
          <li>
            <a href="" aria-label="Previous">
              <i class="ti-angle-left"></i>
            </a>
          </li>
          <li><a href="">1</a></li>
          <li class="active"><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li>
            <a href="" aria-label="Next">
              <i class="ti-angle-right"></i>
            </a>
          </li>
        </ul> --}}
      {{-- </nav> --}}
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

              <p class="text-center"><a class="btn btn-info" href="{{ route('dashboard') }}">Добавить вакансию</a></p>
              <br>
              <p class="text-center"><a class="btn btn-info" href="{{ route('dashboard') }}">Добавить резюме</a></p>

          </div>
        </section>
        <!-- END Newsletter -->


</main>
<!-- END Main container -->
@stop
