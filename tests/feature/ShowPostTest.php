<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShowPostTest extends TestCase
{

    public function test_a_user_see_post_details()
    {
        // Having

        $user = $this->defaultUser([
            'name' => 'Alcedo Prieto'
        ]);

        $post = factory(\App\Post::class)->make([
            'title' => 'Titulo del Post',
            'content' => 'Contenido del Post'
        ]);

        $user->posts()->save($post);

        // When

        $this->visit(route('posts.show', $post))
            ->seeInElement('h1',$post->title)
            ->see($post->content)
            ->see($user->name);
    }
}
