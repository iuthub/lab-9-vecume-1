<?php

namespace App\Repositories;

use Illuminate\Session\Store;

class PostsRepository
{
    private $session;
    public function __construct(Store $session)
    {
        $this->session = $session;
        $this->session->put('posts', collect([]));
        $this->session->put('maxPostId', 0);
    }

    public function getAll()
    {
        return $this->session->get("posts");
    }

    public function get($id)
    {
        $posts = $this->getAll();
        return $posts->firstWhere('id', $id);
    }

    public function update($post)
    {
        $posts = $this->session->get("posts");
        $newPosts = collect([]);
        foreach ($posts as $p) {
            if ($p["id"] == $post["id"]) {
                $p = $post;
            }
            $newPosts->push($p);
        }
        // array_walk($posts, function (&$value, $key) {
        //     if($key == 'transaction_date'){
        //         $value = date('d/m/Y', $value);
        //     }
        $this->session->put('posts', $newPosts);
    }


    public function add($post)
    {
        $posts = $this->session->get("posts");
        $newId = $this->session->increment('maxPostId');
        $post["id"] = $newId;
        $posts->push($post);

        $this->session->put("posts", $posts);
    }

    public function delete($id)
    {
        $post = $this->session->get("posts");
      
        $posts = $post->where('id', '!=', $id);

        $this->session->put('posts', $posts);
    }
}
