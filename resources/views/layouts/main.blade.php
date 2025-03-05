<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @if(isset($pageTitle))
    {{ $pageTitle }}
    @else
    Femimprover
    @endif
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png'         ) }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css'    ) }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css'       ) }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css'    ) }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css'                        ) }}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  {{-- <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('assets/css/main.css'     ) }}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('assets/css/mainFix.css'  ) }}" rel="stylesheet"> --}}


  @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/css/variables.css',
    'resources/css/main.css',
    'resources/css/mainFix.css'
    ])

  <!-- =======================================================
  * Template Name: ZenBlog - v1.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('main.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <div class="main-name-wrapper">
          {{-- <h1>Брукивочка</h1> --}}
          <h1>Femimprover</h1>
          <span class="header--span">Профессиональная укладка</span>
        </div>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a href="index.html">Главная</a></li> -->
          {{-- <li><a href="about.html">Портфолио</a></li> --}}

          <li class="dropdown"><a href="{{ route('blog.post.index') }}"><span>Портфолио</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            @if($categories->count())
            <ul>
              @foreach($categories as $category)
              <li><a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a></li>
              @endforeach
            </ul>
            @endif
          </li>

          <li><a href="{{ route('pages.services') }}">Услуги</a></li>
          <li><a href="{{ route('pages.aboutus')  }}">О нас</a></li>
          {{-- <li><a href="{{ route('pages.work')     }}">Работа</a></a></li> --}}
          <li><a href="{{ route('pages.contacts') }}">Контакты</a></li>
          @auth
          <li><a href="{{ route('personal.main.index') }}">{{ auth()->user()->name }}</a></li>
          @endauth
          @guest
          <li><a href="{{ route('personal.main.index') }}">Войти</a></li>
          @endguest
        </ul>
      </nav><!-- .navbar -->

      <div class="header--phones">
        <p class="header--phone"><a class="link" href="tel:+4733378901">+47 333 78 901</a></p>
        <p class="header--phone"><a class="link" href="tel:+4733378901">+47 333 78 901</a></p>
      </div>

      <div class="position-relative">
        <a href="#" class="mx-2 nav__icon"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2 nav__icon"><span class="bi-telegram"></span></a>
        <a href="#" class="mx-2 nav__icon"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 nav__icon js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">О команде Femimprover</h3>
            <p>Мастера моих бригад проходят многомесячное обучение, проверку временем и имеют большой опыт. Я принимаю активное участие в жизненном цикле объектов и могу смело гарантировать качесво работы своих людей.</p>
            <p><a href="about.html" class="footer-link-more">Читать дальше</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Навигация</h3>
            <ul class="footer-links list-unstyled">
              {{-- <li><a href="#"><i class="bi bi-chevron-right"></i> Портфолио</a></li> --}}
              <li><a href="{{ route('blog.post.index') }}"><i class="bi bi-chevron-right"></i> Портфолио</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Услуги</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> О нас</a></li>
              {{-- <li><a href="#"><i class="bi bi-chevron-right"></i> Работа у нас</a></li> --}}
              <li><a href="#"><i class="bi bi-chevron-right"></i> Контакты</a></li>
            </ul>
          </div>

          <!--   ======= Footer категории ======= -->
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Категории</h3>
            <ul class="footer-links list-unstyled">

              @foreach($categories as $category)
                  <li>
                    <a href="{{  route('admin.category.show', $category->id)  }}">
                      <i class="bi bi-chevron-right"></i> {{ $category->title }}
                    </a>
                  </li>
              @endforeach

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Последние посты</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/post-sq-1.jpg') }}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/post-sq-2.jpg') }}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/post-sq-3.jpg') }}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/post-sq-4.jpg') }}" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              Femimprover<br> профессиональная укладка тротуарной плитки
            </div>
          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-telegram"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js'         ) }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js'       ) }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js'                          ) }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js'          ) }}"></script>

  <!-- Template Main JS File -->
  {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
  @vite(['resources/js/main.js'])

</body>

</html>