<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SiteController extends Controller
{
     // Afficher la page d'accueil avec les blogs récents
     public function index()
     {
         $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
         return view('index', compact('blogs'));
     }

     // Afficher tous les blogs
     public function allBlogs()
     {
         $blogs = Blog::orderBy('created_at', 'desc')->paginate(9);
         return view('blogs', compact('blogs'));
     }

     // Afficher un blog spécifique
     public function showBlog($id)
     {
         $blog = Blog::findOrFail($id);
         return view('blogdetail', compact('blog'));
     }
}
