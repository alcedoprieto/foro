<?php

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostIntegrationTest extends TestCase
{
    use DatabaseTransactions;

    public function test_generar_un_slug_y_guardarlos_en_la_base_de_datos()
    {
        $user = $this->defaultUser();

        $post = factory(Post::class)->make([
            'title' => 'Como instalar Laravel'
        ]);

        $user->posts()->save($post);

        $this->seeInDatabase('posts',[
            'slug' => 'como-instalar-laravel'
        ]);
    }
}
