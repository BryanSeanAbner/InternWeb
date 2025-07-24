<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SlugGenerationTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_slug_generation_is_unique()
    {
        // Create first post
        $post1 = Post::create([
            'title' => 'Test Post',
            'body' => 'Test body',
            'slug' => 'test-post',
            'author_id' => User::factory()->create()->id,
        ]);

        // Create second post with same title
        $post2 = Post::create([
            'title' => 'Test Post',
            'body' => 'Test body 2',
            'slug' => Post::generateUniqueSlug('Test Post'),
            'author_id' => User::factory()->create()->id,
        ]);

        $this->assertEquals('test-post', $post1->slug);
        $this->assertEquals('test-post-1', $post2->slug);
        $this->assertNotEquals($post1->slug, $post2->slug);
    }

    public function test_category_slug_generation_is_unique()
    {
        // Create first category
        $category1 = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category',
            'color' => '#2563eb',
        ]);

        // Create second category with same name
        $category2 = Category::create([
            'name' => 'Test Category',
            'slug' => Category::generateUniqueSlug('Test Category'),
            'color' => '#f59e42',
        ]);

        $this->assertEquals('test-category', $category1->slug);
        $this->assertEquals('test-category-1', $category2->slug);
        $this->assertNotEquals($category1->slug, $category2->slug);
    }

    public function test_update_post_slug_excludes_current_post()
    {
        $user = User::factory()->create();
        
        // Create first post
        $post1 = Post::create([
            'title' => 'Test Post',
            'body' => 'Test body',
            'slug' => 'test-post',
            'author_id' => $user->id,
        ]);

        // Create second post
        $post2 = Post::create([
            'title' => 'Another Post',
            'body' => 'Test body 2',
            'slug' => 'another-post',
            'author_id' => $user->id,
        ]);

        // Update first post with same title (should keep original slug)
        $post1->slug = Post::generateUniqueSlug('Test Post', $post1->id);
        $post1->save();

        $this->assertEquals('test-post', $post1->slug);
        $this->assertEquals('another-post', $post2->slug);
    }
} 