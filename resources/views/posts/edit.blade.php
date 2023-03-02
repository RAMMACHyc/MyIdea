@extends("layouts.app")
@section("title", "Editer un post")
@section("content")

	<h1>Editer un post</h1>

	<!-- Si nous avons un Post $post -->
	@if (isset($post))

	<!-- Le formulaire est géré par la route "posts.update" -->
	<form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="title" >Titre</label><br/>

			<!-- S'il y a un $post->title, on complète la valeur de l'input -->
			<input type="text" name="title" value="{{ isset($post->title) ? $post->title : old('title') }}"  id="title" placeholder="Le titre du post" >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<!-- S'il y a une image $post->picture, on l'affiche -->
		@if(isset($post->image))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$post->image) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif

		<p>
			<label for="image" >Couverture</label><br/>
			<input type="file" name="image" id="image" >

			<!-- Le message d'erreur pour "picture" -->
			@error("image")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="decription" >description</label><br/>

			<!-- S'il y a un $post->content, on complète la valeur du textarea -->
			<textarea name="decription" id="decription" lang="fr" rows="10" cols="50" placeholder="Le description du post" >{{ isset($post->decription) ? $post->decription : old('decription') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("decription")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection