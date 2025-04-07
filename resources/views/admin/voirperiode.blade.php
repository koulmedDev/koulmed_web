@extends('admin.layout')

@section('title', 'Voir la période')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">La période</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if ($periodes->isEmpty())
                        <p>Aucune période enregistrée.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Date de création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periodes as $periode)
                                    <tr>
                                        <td>{{ $periode->id }}</td>
                                        <td>{{ $periode->titre }}</td>
                                        <td>{{ $periode->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('periode.edit', $periode->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                            <form action="{{ route('periode.delete', $periode->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette période ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
