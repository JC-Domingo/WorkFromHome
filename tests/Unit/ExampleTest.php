<?php

namespace Tests\Unit;

use App\Post;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testBasicTest()
    {
    	$first = factory(Post::class)->create();

    	$second = factory(Post::class)->create([
    		'created_at' => \Carbon\Carbon::now()->subMonth()
    	]);

    	Post::archives();

    	$this->assertCount(2, $posts);
    }
}
