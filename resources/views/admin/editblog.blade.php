@extends('admin.layout')

@section('title', 'Modifier un blog')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Modifier le blog</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre', $blog->titre) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="image">Image actuelle</label>
                            <div>
                                <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->titre }}" width="200" class="img-thumbnail mb-2">
                            </div>
                            <label for="image">Changer l'image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <small class="form-text text-muted">Formats acceptés: jpeg, png, jpg, gif. Taille max: 2Mo</small>
                        </div>

                        <div class="form-group mt-3">
                            <label for="contenu">Contenu</label>
                            <textarea class="form-control" id="contenu" name="contenu" rows="10" required>{{ old('contenu', $blog->contenu) }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            <a href="{{ route('blog.all') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endpush
@endsection
