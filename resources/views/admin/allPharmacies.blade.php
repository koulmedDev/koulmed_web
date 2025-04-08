@extends('admin.layout')

@section('title', 'Toutes les pharmacies de garde')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Liste des pharmacies de garde</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('pharmacie.form') }}" class="btn btn-success">Ajouter une pharmacie</a>
                    </div> <br><br><br>

                    @if($pharmacies->isEmpty())
                        <div class="alert alert-warning text-center">
                            Aucune pharmacie de garde n'est encore enrégistrée.
                        </div>
                    @else
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pharmacies as $pharmacie)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pharmacie->name }}</td>
                                        <td>{{ $pharmacie->phone }}</td>
                                        <td>{{ $pharmacie->address }}</td>
                                        <td>
                                            {{-- <a href="{{ route('pharmacie.show', $pharmacie->id) }}" class="btn btn-info btn-sm">Voir</a> --}}
                                            <a href="{{ route('pharmacie.edit', $pharmacie->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                            <form action="{{ route('pharmacie.delete', $pharmacie->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cette pharmacie ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
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
