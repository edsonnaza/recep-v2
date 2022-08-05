<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostManagementTest extends TestCase
{
    use RefreshDatabase;
       /** @test */
    public function a_post_can_be_created()
    {
        // Para que nos arroje errores apropiados
        $this->withoutExceptionHandling();
        
        // Envio una petición HTTP [POST] para que almacene un Post nuevo
        $response = $this->post('/posts', [
            'title' => 'Test Title',
            'content' => 'Test Content'
        ]);

        // Verificamos si todo está bien
        $response->assertOk();

        // Verificamos si en realidad existe mi post
        //$this->assertCount(1, Post:->get());

        // Recupero el post que mande a crear
        $post = Post::first();

        // Verificamos si los datos de mi post creado son iguales a los que mande
        $this->assertEquals('Test Title', $post->title);
        $this->assertEquals('Test Content', $post->content);
    }
}
