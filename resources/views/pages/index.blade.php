@extends('layouts.main')

@section('content')
<main class="page_main-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="">Страницы:</h2>
                <ul class="footer-links list-unstyled">
                  <li><a href="{{ route('blog.post.index') }}"><i class="bi bi-chevron-right"></i> Портфолио</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i> Услуги</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i> О нас</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i> Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
