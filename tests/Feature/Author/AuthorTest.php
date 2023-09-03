<?php

namespace Tests\Unit;

use Tests\TestCase;

class AuthorTest extends TestCase{
    
    public function test_create_author(){
        //given
        $data = [
            'name' => 'test'
        ];

        //when
        $response = $this->post(route('authors.insert'), $data);

        //then
        $this->assertDatabaseHas('authors', ['name'=> 'test']);
        $response->assertStatus(302);
        $response->assertRedirect();
    }
}
