<?php

namespace App\Http\Controllers;

use App\Repositories\PostsRepository;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $repo;
    
    public function __construct(PostsRepository $repo)
    {
        $this->repo = $repo;
    }
    
    public function index()
    {
        $posts = $this->repo->getAll();
        return view('components.blog.index', ["posts" => $posts]);
    }
    
    public function edit_view($id)
    {
        $post = $this->repo->get($id);
        return view('admin.add', ["post" => $post]);
    }

    public function like($id)
    {
        $post = $this->repo->like($id);
        return response()->redirectToRoute("index");
    }

    public function edit(Request $request)
    {
        $this->repo->update([
            'id' => $request->input("id"),
            "title" => $request->input("title"),
            'content' => $request->input("content")
        ]);
        return response()->redirectToRoute("index");
    }

    public function delete($id)
    {
        $this->repo->delete($id);
        return response()->redirectToRoute('index');
    }

    public function add(Request $request)
    {
        $request->validate([
                            'title' => 'required|min:5',
                            'content' => 'required|min:20'
            ]);
        $this->repo->add([
                    'title' => $request->input('title'),
                    'content' => $request->input('content')
                ]);
                
        return response()->redirectToRoute('index');
    }
}
