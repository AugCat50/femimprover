<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    //Метод по умолчанию. StoreRequest $request
    public function __invoke()
    {
        dd('lox');
        dump (\request()->all());

        return response(['message' => 'ok']);

        // $data = $request->validated();
        
        // $this->service->store($request, $data);

        // return redirect()->route('admin.post.index');
    }
}
