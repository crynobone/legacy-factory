<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SimpleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create();
        $this->assertSame(1, User::get()->count());

        $tag = Tag::factory()->create();
        $this->assertSame(1, Tag::get()->count());
    }

    public function testExampleTwo()
    {
        $user = factory(User::class)->create(['name'=>'Will G']);
        $this->assertSame(1, User::get()->count());
        $this->assertSame('Will G', $user->name);

        $tag = Tag::factory()->create(['name' => 'Tag You Are It!']);
        $this->assertSame(1, Tag::get()->count());
        $this->assertSame('Tag You Are It!', $tag->name);
    }

    public function testExampleThree()
    {
        $users = factory(User::class)->times(3)->create();
        $this->assertSame(3, User::get()->count());

        $tags = Tag::factory()->times(3)->create();
        $this->assertSame(3, Tag::get()->count());
    }
}
