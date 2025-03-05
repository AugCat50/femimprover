@extends('layouts.main')

@section('content')
<main class="page_main-section">
    <div class="container">
        <h1 class="blog-h1 page-h1">Услуги</h1>
    </div>
        
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
                                    <h2 class="trending__h">Мы предоставляем услуги:</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">1</span>
                                                <h3 class="trending-post__h3">Укладка плитки</h3>
                                                <p class="trending-post__p">Закажите рассчёт объекта под ваш тип плитки</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">2</span>
                                                <h3 class="trending-post__h3">Укладка асфальта</h3>
                                                <p class="trending-post__p">Под ключ, 1200 гривен метр квадратный</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">3</span>
                                                <h3 class="trending-post__h3">Установка поредрика и бордюра</h3>
                                                <p class="trending-post__p">От 110 гривен метр погонный, на готовый бетон или изготовленный нами</p>
                                            </a>
                                        </li>
                                        <li>
                                        <a href="single-post.html">
                                            <span class="number">4</span>
                                            <h3 class="trending-post__h3">Земляные работы, подготовка, демонтаж</h3>
                                            <p class="trending-post__p">Мы так же можем выкопать траншею в трднодоступных для техники местах, подготовить территорию, демонтировать старую плитку и пр.</p>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="single-post.html">
                                            <span class="number">5</span>
                                            <h3 class="trending-post__h3">Бетонирование</h3>
                                            <p class="trending-post__p">Заливка бетонных прит на грунт, заливка фундаментов под забор</p>
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

</main>
@endsection
