<?php
/*
* Сервисы - это по сути шаблон Command. И раз уж он используется, я бы разделил команды по отдельности.
* Но поскольку, говорят, что существует и такой подход, оставлю как есть. Чтобы был наглядный пример.
* 
* Не совсем я понял. Если мы используем для постов command ("сервис"), и у нас за логику отвечает "сервис", то почему только на запись? 
* Получается какая-то каша, у нас половиной работы с базой занимаются контроллеры - удалением, получением данных, а половиной команды. 
* Если выполнением задач у нас занимаются команды, то по идее это должно распространяться на все задачи, а не выборочно, по принципу где много кода.
*/

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;

class PostService
{
    public function store(StoreRequest $request, $data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if ($request->has('preview_image')) {
                //перезаписываем в массив вместо картинки путь к ней на диске для удобства дальшенйшей записи в БД
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            if ($request->has('main_image')) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            //здесь
            $post = Post::firstOrCreate($data);

            if(isset($tagIds)){
                $post->tags()->attach($tagIds);
            }
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e);
            abort(500);
        }
    }

    public function update(UpdateRequest $request, $data, Post $post)
    {
        try{
            DB::beginTransaction();
            if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }
    
            if($request->has('preview_image')){
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
    
            if($request->has('main_image')){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);
            
            if(isset($tagIds)){
                $post->tags()->attach($tagIds);
            }

            DB::commit();          
        } catch(\Exception $e){
            DB::rollBack();
            // dd($e);
            abort(500);
        }

        return $post;
    }
}
