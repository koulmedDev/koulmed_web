@extends('admin.layout')

@section('title', 'Historique des blogs')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Historique des publications</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Date de création</th>
                                    <th>Date de modification</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->titre }}</td>
                                        <td>
                                            @if ($blog->publie)
                                                <span class="badge bg-success">Publié</span>
                                            @else
                                                <span class="badge bg-warning">Non publié</span>
                                            @endif
                                        </td>
                                        <td>{{ $blog->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $blog->updated_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> Voir détails
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun historique trouvé</td>
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
