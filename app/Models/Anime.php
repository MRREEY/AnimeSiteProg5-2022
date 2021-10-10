<?php


namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Anime
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        //collect een array en wrap het in een collectie object
        return  collect(File::files(resource_path("animes")))
            ->map(function ($file) {
                return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
            })
            ->map(function ($document) {
                return new \App\Models\Anime(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            });
    }

    //find de anime met de slug die matched met de request
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
