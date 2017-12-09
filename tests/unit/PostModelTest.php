<?php

use App\Post;

class PostModelTest extends TestCase
{

    function test_generando_slug_a_partir_del_titulo()
    {
        $post = new Post([
            'title' => 'Como instalar Laravel'
        ]);

        $this->assertSame('como-instalar-laravel', $post->slug);
    }
}
