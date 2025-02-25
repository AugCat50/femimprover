<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;

class StoreController extends Controller
{
    //Метод по умолчанию
    public function __invoke(StoreRequest $request)
    {
        // $data - массив
        $data = $request->validated();
        //Здесь можно ввести сервисы и работать через них, но в данном случае это не нужно
        
        //Возвращает модель
        //Рекомендуется прочесть документацию. Так же см. Бл.7, см. документацию по методу, он гибко настраивается
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
