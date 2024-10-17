<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

      const VIEW_PATH = 'posts.';
    public function index()
    {
        $data = Post::query()->orderBy('published_at', 'desc')->get();   

        return view(self::VIEW_PATH . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::VIEW_PATH . __FUNCTION__);
    
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        if($request->isMethod('post')){
            $data = $request->except('_token');
            Post::create($data);    
            return redirect()->route('post.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Post::findOrFail($id);

        return view(self::VIEW_PATH . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostRequest $request, string $id)
    {
        $model = Post::findOrFail($id);

        return view(self::VIEW_PATH . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Post::findOrFail($id);


        if ($request->isMethod('put')) {
            $data = $request->except('_token');

            $model->update($data);

            return redirect()->route('post.index');
            # code...
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Post::findOrFail($id);

        $model->delete();
        return redirect()->route('post.index');
    }
}
