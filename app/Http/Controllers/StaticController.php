<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaticController extends Controller
{
    public function show($slug) {
        $methodName = Str::camel($slug);

        if ( ! method_exists($this, $methodName)) {
            return $this->loadViewFromSlug($slug);
        }

        return $this->$methodName();
    }

    // You can override a slug2view behavior
    protected function blog()
    {
        // Return whatever you want
        return view('blog.blog');
    }

    protected function loadViewFromSlug($slug)
    {
        $slug = $this->slugToSnakeCase($slug);

        try {
            return view("static.{$slug}");
        } catch (\InvalidArgumentException $e) {
            abort(404);
        }
    }

    protected function slugToSnakeCase($slug) {
        return str_replace('-', '_', $slug);
    }
}
