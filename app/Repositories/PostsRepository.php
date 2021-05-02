<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Session\Store;

class PostsRepository
{
    public function getAll()
    {
        return Post::all();
    }

    public function get($id)
    {
        $post = Post::find($id);
        $post->views = $post->views + 1;
        $post->save();
        return $post;
    }

    public function update($post)
    {
        Post::whereId($post["id"])->update($post);
    }

    public function like($id)
    {
        $post = Post::find($id);
        $post->likes = $post->likes + 1;
        $post->save();
    }

    public function add($post)
    {
        // $posts = $this->session->get("posts");
        // $newId = $this->session->increment('maxPostId');
        // $post["id"] = $newId;
        // $posts->push($post);

        // $this->session->put("posts", $posts);
        
        $p = new Post([
            'title' => $post['title'],
            'content' => $post['content']
        ]);
        $p->save();
    }

    public function delete($id)
    {
        // $post = $this->session->get("posts");
      
        // $posts = $post->where('id', '!=', $id);

        // $this->session->put('posts', $posts);
        Post::find($id)->delete();
    }
}
