@extends('layout')

@section('content')
<section id="blog-detail" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="mb-4">{{ $blog->titre }}</h1>

                <div class="mb-3 text-muted">
                    <small>Publié le {{ $blog->created_at->format('d/m/Y') }}</small>
                </div>

                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->titre }}" class="img-fluid rounded">
                </div>

                <div class="blog-content">
                    {!! $blog->contenu !!}
                </div>

                <div class="mt-5">
                    <a href="{{ route('blogs') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left"></i> Retour aux blogs
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
