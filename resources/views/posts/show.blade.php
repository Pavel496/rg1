@extends('layout')

@section('content')
<!-- Page header  size-lg-->
<header class="page-header bg-img" style="background-image: url(/front/img/bg-banner2.jpg)">
  <div class="container">
    <div class="header-detail">
      {{-- <img class="logo" src="/front/img/logo-google.jpg" alt=""> --}}
      <div class="hgroup">
        <h1>{{ $post->title }}</h1>
        {{-- <h3><a href="">Google</a></h3> --}}
        {{-- <span class="label label-success">{{ $post->category->name }}</span> --}}
      </div>
      <time>{{ optional($post->updated_at)->format('d M Y H:m') }}</time>
      {{-- <time datetime="2016-03-03 20:00">2 days ago</time> --}}
      <hr>
      <p class="lead">{{ $post->excerpt }}</p>

      <ul class="details cols-3">
        <li>
          <i class="fa fa-phone"></i>
          <span style="font-size:large; color:#555;">{{ $post->phone }}</span>
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
          <i class="fa fa-envelope"></i>
          <span style="font-size:large; color:#555;">{{ $post->email }}</span>
        </li> --}}

        {{-- <li>
          <i class="fa fa-money"></i>
          <span>{{ $post->salary }}</span>
        </li> --}}

        <li>
          {{-- <i class="fa fa-map-marker"></i> --}}
          <span style="font-size:x-large; color:#555;">{{ $post->category->name }}</span>
          {{-- <span class="label label-success">{{ $post->category->name }}</span> --}}
        </li>
      </ul>

      {{-- <div class="button-group">
        <ul class="social-icons">
          <li class="title">Share on</li>
          <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
          <li><a class="google-plus" href=""><i class="fa fa-google-plus"></i></a></li>
          <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
          <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <div class="action-buttons">
          <a class="btn btn-primary" href="">Apply with linkedin</a>
          <a class="btn btn-success" href="">Apply now</a>
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
      <p class="lead">{{ $post->body }}</p>
      {{-- <p>Google is and always will be an engineering company. We hire people with a broad set of technical skills who are ready to tackle some of technology's greatest challenges and make an impact on millions, if not billions, of users. At Google, engineers not only revolutionize search, they routinely work on massive scalability and storage solutions, large-scale applications and entirely new platforms for developers around the world. From AdWords to Chrome, Android to YouTube, Social to Local, Google engineers are changing the world one technological achievement after another.</p>

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
      </ul> --}}

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
@stop
