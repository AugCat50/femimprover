@extends('layouts.main')

@section('content')
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-1.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Профессиональная укладка плитки</h2>
                                        <p>Моё ремесло уже 17 лет</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-9.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Укладка Плитки</h2>
                                        <p>Взгляните на наши работы</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-9.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Асфальтирование</h2>
                                        <p>Под ключ, 1200 грн м2</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-9.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Портфолио</h2>
                                        <p>Взгляните на наши работы</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-6.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>FAQ</h2>
                                        <p>Узнайте ответы на часто задаваемые вопросы в цикле наших заметок "Коротко о
                                            главном"</p>
                                        <p>(время чтения 5 минут)</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-7.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Блог</h2>
                                        <p>Всё, что вам может быть интересно о укладке плитки</p>
                                        <p>А так же немного из жини нашей команды</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/slider/slide-8.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Услуги</h2>
                                        <p>Укладка плитки</p>
                                        <p>Рассчёт проектов</p>
                                        <p>Консультация специалиста</p>
                                        <p>Замер участка</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <section class="about">
        <div class="container-md" data-aos="fade-in">
            <h2 class="about__h2">Меня зовут Артём</h2>
            <div class="row g-5 about__row">
                <img class="about__person-image" src="{{ asset('assets/img/main/1.jpg') }}" alt="its me">
                <p class="about__text">За 17 лет я прошёл путь от подсобника до трёх собственных бригад в Киеве, Днепре и Николаеве. Укладка плитки - моё ремесло, и я всегда даю гарантию на свою работу. Моя бригада - это:</p>

                <ul class="about__ul">
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Профессиональный подход</li>
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Выполнение обязательств</li>
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Полная комплектация объектов</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="phone_form contact">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <h2 class="phone_form__h2">Оставьте номер, и я перезвоню</h2>
                <form class="php-email-form" action="#" method="POST">
                    @csrf
                    <div class="col-md-auto text-center">
                        <label for="phone">Пожалуйста, цените своё и моё время.<br>Формат: 050-555-5555</label>
                        <input class="col-md-6 phone_form__input text-center" type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="050-555-5555"> 
                    </div>
                    <div class="col-md-auto text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
      
                        <button class="phone_form__button" type="submit">Отправить</button>
                      </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="main-tile posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-1.jpg' ) }}" alt=""
                                class="img-fluid"></a>
                        <h2 class="main-tile-button"><a href="single-post.html">Укаладка плитки</a></h2>
                    </div>
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-1.jpg' ) }}" alt=""
                                class="img-fluid"></a>
                        <h2 class="main-tile-button"><a href="single-post.html">Асфальтирование</a></h2>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-2.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Борбюры</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-5.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Бетонирование</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-7.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Щебенение</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-3.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Галерея плитки</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-6.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Демонтаж</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset( 'assets/img/post-landscape-8.jpg' ) }}" alt=""
                                        class="img-fluid"></a>
                                <!-- <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div> -->
                                <h2 class="main-tile-button"><a href="single-post.html">Прочее</a></h2>
                            </div>
                        </div>

                        <!-- Trending Section -->
                        <div class="col-lg-4">

                            <div class="trending">
                                <h2 class="trending__h">Экспертное мнение</h2>
                                <ul class="trending-post">
                                    <li>
                                        <a href="single-post.html">
                                            <span class="number">1</span>
                                            <h3 class="trending-post__h3">Бетон обязателен?</h3>
                                            <p class="trending-post__p">Узнайте когда под укладку необходим бетон, а когда можно обойтись подушкой щебня</p>
                                            <!-- <span class="author">Jane Cooper</span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">
                                            <span class="number">2</span>
                                            <h3 class="trending-post__h3">Толщина</h3>
                                            <p class="trending-post__p">Сегодня поговорим о том, как правильно учать нагрузу при выборе плитки </p>
                                            <!-- <span class="author">Wade Warren</span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-post.html">
                                            <span class="number">3</span>
                                            <h3 class="trending-post__h3">Вибролитьё и пресование</h3>
                                            <p class="trending-post__p">Всё, что вы хотели знать о ньюансах производства брусчатки</p>
                                            <!-- <span class="author">Esther Howard</span> -->
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->

    {{-- <section class="about">
        <div class="container-md" data-aos="fade-in">
            <h2 class="about__h2">Цены в 2025 году</h2>
            <div class="row g-5 about__row">
                <ul class="about__ul">
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Укладка плитки, от 1200 грн м2</li>
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Асфальтирование, от 1200 грн м2</li>
                    <li class="about__li"><i class="bi bi-chevron-right"></i> Бетонирование, от 1200 грн м2</li>
                </ul>
            </div>
        </div>
    </section> --}}
</main><!-- End #main -->

@endsection
