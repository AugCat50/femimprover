@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление поста</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                        <li class="breadcrumb-item active">Добавление поста</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">              
                    <form action="{{ route('admin.post.store') }}" method="POST" class="dropzone" enctype="multipart/form-data" id="upload-form">
                        @csrf
                        <div class="form-group w-25">
                            <label>Название поста</label>
                            <input type="text" class="form-control" name="title" placeholder="Введите имя поста" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- select category -->
                        <div class="form-group w-25">
                            <label>Категория</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category_id') ? ' selected' : '' }}
                                    >
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                            <label>Тэги</label>
                            <div class="select2-purple">
                                <!-- В name обязательно массив, чтобы получать массив значений, а не только последнее выбранное -->
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <!-- Если tag_ids массив, то ищем в нём cовпадение с tag->id, если есть возвращаем selected -->
                                        <option 
                                            {{ is_array( old('tag_ids') ) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} 
                                            value="{{ $tag->id }}"
                                            >
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="form-group w-25">
                            <label for="exampleInputFile">Изображение превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group w-25">
                            <label for="exampleInputFile">Главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group w-25">
                            <label for="exampleInputFile">Галерея Dropzone</label>
                            <div class="input-group">
                                <div id="app" class="dropzone">
                                    <dropzone-component></dropzone-component>
                                    Vue component
                                </div>
                                {{-- <div class="previews"></div> --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea id="summernote" name="content">
                                {{ old('content') }}
                            </textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
