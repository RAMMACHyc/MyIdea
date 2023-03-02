<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class PostsController extends Controller
{
    public function index() {  
          //On récupère tous les Post
        $posts = Post::latest()->get();
     
    
        // On transmet les Post à la vue
        return view("posts.index", compact("posts"));
     }

    public function create() { 
    // On retourne la vue "/resources/views/posts/edit.blade.php"
    return view("posts.create");
    }

    public function store(Request $request) {
          // 1. La validation
    $request->validate([
        'title' => 'bail|required|string|max:255',
        "description" => 'bail|required',
        "image" => 'required|mimes:jpg,jpeg,png|max:5048',
    ]);
    
    // On génère un nouveau nom pour l'image
    $newImageName = uniqid() .  '.' . $request->image->extension();
    $request->image->move(public_path('images'), $newImageName);

    // 3. On enregistre les informations du Post
    Post::create([
        "title" => $request->title,
        "description" => $request->description,
        "image" => $newImageName,
        'user_id' => auth()->user()->id,
    ]);
    return redirect('posts')->with('flash_message','Post added!');
     }

    public function show(Post $post) {
    return view("posts.show", compact("post"));

     }

    public function edit(Post $post) { 
        return view("posts.edit", compact("post"));
    }

    public function update(Request $request, Post $post) { 
          // 1. La validation

    // Les règles de validation pour "title" et "content"
    $rules = [
        'title' => 'bail|required|string|max:255',
        "description" => 'bail|required',
    ];

    // Si une nouvelle image est envoyée
    if ($request->has("image")) {
        // On ajoute la règle de validation pour "picture"
        $rules["image"] = 'bail|required|image|max:1024';
    }

    $this->validate($request, $rules);

    // 2. On upload l'image dans "/storage/app/public/posts"
    if ($request->has("image")) {

        //On supprime l'ancienne image
        Storage::delete($post->image);

        $chemin_image = $request->image->store("posts");
    }

    // 3. On met à jour les informations du Post
    $post->update([
        "title" => $request->title,
        "description" => $request->description,
        "image" => isset($chemin_image) ? $chemin_image : $post->image,
       
    ]);

    // 4. On affiche le Post modifié : route("posts.show")
    return redirect(route("posts.show", $post));
    }

    public function destroy(Post $post) {
        // On supprime l'image existant
    Storage::delete($post->image);

    // On les informations du $post de la table "posts"
    $post->delete();

    // Redirection route "posts.index"
    return redirect(route('posts.index'));
     }
}