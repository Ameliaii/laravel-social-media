<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post 
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug; // Add the slug property

    // Update constructor to include slug
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug; // Set slug
    }

    // Get all posts
    public static function all()
    {
        $files = File::files(resource_path("posts"));

        return array_map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);
            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug // Ensure to extract slug
            );
        }, $files);
    }

    // Find a post by slug
    public static function find($slug)
    {
        $files = File::files(resource_path("posts")); // Get all post files

        foreach ($files as $file) {
            $document = YamlFrontMatter::parseFile($file);
            if ($document->slug === $slug) { // Match slug
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug // Set slug
                );
            }
        }

        throw new ModelNotFoundException(); // If not found, throw exception
    }
}
