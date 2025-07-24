<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class FixDuplicateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:duplicate-slugs {model? : The model to fix (posts, categories, or all)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix duplicate slugs in posts and categories';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $model = $this->argument('model') ?? 'all';

        if ($model === 'posts' || $model === 'all') {
            $this->fixPostSlugs();
        }

        if ($model === 'categories' || $model === 'all') {
            $this->fixCategorySlugs();
        }

        $this->info('Duplicate slugs have been fixed!');
    }

    private function fixPostSlugs()
    {
        $this->info('Fixing duplicate slugs in posts...');

        $posts = Post::orderBy('id')->get();
        $seenSlugs = [];

        foreach ($posts as $post) {
            $originalSlug = $post->slug;
            $newSlug = $originalSlug;
            $counter = 1;

            while (in_array($newSlug, $seenSlugs)) {
                $newSlug = $originalSlug . '-' . $counter;
                $counter++;
            }

            if ($newSlug !== $originalSlug) {
                $this->line("Updating post '{$post->title}' slug from '{$originalSlug}' to '{$newSlug}'");
                $post->slug = $newSlug;
                $post->save();
            }

            $seenSlugs[] = $newSlug;
        }

        $this->info('Posts fixed!');
    }

    private function fixCategorySlugs()
    {
        $this->info('Fixing duplicate slugs in categories...');

        $categories = Category::orderBy('id')->get();
        $seenSlugs = [];

        foreach ($categories as $category) {
            $originalSlug = $category->slug;
            $newSlug = $originalSlug;
            $counter = 1;

            while (in_array($newSlug, $seenSlugs)) {
                $newSlug = $originalSlug . '-' . $counter;
                $counter++;
            }

            if ($newSlug !== $originalSlug) {
                $this->line("Updating category '{$category->name}' slug from '{$originalSlug}' to '{$newSlug}'");
                $category->slug = $newSlug;
                $category->save();
            }

            $seenSlugs[] = $newSlug;
        }

        $this->info('Categories fixed!');
    }
}
