@extends('layout')

@section('content')
<section id="all-blogs" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Nos articles de blog</h1>

        <div class="row">
            @forelse ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/blogs/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->titre }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($blog->contenu), 150) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('blog.detail', $blog->id) }}" class="btn btn-primary">Lire plus</a>
                                <small class="text-muted">{{ $blog->created_at->format('d/m/Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Aucun blog disponible pour le moment.</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection
