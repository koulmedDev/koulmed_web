@extends('admin.layout')

@section('title', 'Ajouter une période')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Ajouter une nouvelle période</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('periode.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre de la période</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                            <a href="{{ route('periode.index') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
