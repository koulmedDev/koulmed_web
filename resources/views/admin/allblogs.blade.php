@extends('admin.layout')

@section('title', 'Tous les blogs')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des blogs</h3>
                    <div class="card-tools">
                        <a href="{{ route('blog.form') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Ajouter un blog
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Date de création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->titre }}" width="100">
                                        </td>
                                        <td>{{ $blog->titre }}</td>

                                        <td>{{ $blog->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-eye"></i> Voir détails
                                            </a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Modifier
                                            </a>
                                            <form action="{{ route('blog.delete', $blog->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce blog?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun blog trouvé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
