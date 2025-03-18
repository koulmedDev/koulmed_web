<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
   //page d'ajout de blog
    public function showAddForm()
    {
        return view('admin.ajouterblog');
    }

   //tous les blogs
    public function showAllBlogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.allblogs', compact('blogs'));
    }

    //historique des blogs
    public function showBlogHistory()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.historiqueblog', compact('blogs'));
    }

    //creation du blog
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('blogs', $imageName, 'public');

        Blog::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imageName,
        ]);

        return redirect()->route('blog.all')
            ->with('success', 'Blog créé avec succès');
    }

   //
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.editblog', compact('blog'));
    }

    //mis a jour
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/blogs/' . $blog->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $request->file('image')->storeAs('blogs', $imageName, 'public');

            $blog->image = $imageName;
        }

        $blog->titre = $request->titre;
        $blog->contenu = $request->contenu;
        $blog->save();

        return redirect()->route('blog.all')
            ->with('success', 'Blog mis à jour avec succès');
    }

    //suppression de l'image
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::delete('public/blogs/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blog.all')
            ->with('success', 'Blog supprimé avec succès');
    }
}
