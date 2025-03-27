@extends('layout')

@section('title', $blog->titre)

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-sm-12">
                <article class="card shadow-lg border-0">
                    <div class="position-relative">
                        <img src="{{ asset('storage/blogs/' . $blog->image) }}" class="img-fluid w-100 rounded-top" alt="{{ $blog->titre }}" style="max-height: 400px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <h1 class="card-title text-center h2">{{ $blog->titre }}</h1>
                        <p class="text-muted text-center small">
                            <i class="far fa-calendar-alt"></i> Publié le: {{ $blog->created_at->format('d/m/Y H:i') }} &nbsp; | &nbsp;
                            <i class="far fa-clock"></i> Dernière mise à jour: {{ $blog->updated_at->format('d/m/Y H:i') }}
                        </p>

                        <div class="blog-content mt-3" style="word-wrap: break-word; overflow-wrap: break-word;">
                            {!! $blog->contenu !!}
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('home') }}" class="btn btn-secondary btn-lg">
                                <i class="fas fa-arrow-left"></i> Retour aux blogs
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
