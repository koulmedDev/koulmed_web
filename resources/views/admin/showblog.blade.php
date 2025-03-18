@extends('admin.layout')

@section('title', 'Détails du blog')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Détails du blog</h3>
                    <div class="card-tools">
                        <a href="{{ route('blog.all') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Retour
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center mb-4">
                                <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->titre }}" class="img-fluid" style="max-height: 300px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>{{ $blog->titre }}</h2>
                            <p class="text-muted">
                                <i class="far fa-calendar-alt"></i> Publié le: {{ $blog->created_at->format('d/m/Y H:i') }}
                            </p>
                            <p class="text-muted">
                                <i class="far fa-clock"></i> Dernière mise à jour: {{ $blog->updated_at->format('d/m/Y H:i') }}
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                                <form action="{{ route('blog.delete', $blog->id) }}" method="POST" class="d-inline-block ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce blog?')">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Contenu</h4>
                                </div>
                                <div class="card-body">
                                    <div class="blog-content">
                                        {!! $blog->contenu !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
