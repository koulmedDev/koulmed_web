@extends('admin.layout')

@section('title', 'Modifier une pharmacie de garde')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Modifier la pharmacie de garde</h3>
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

                    <form action="{{ route('pharmacie.update', ['id' => $pharmacie->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ old('name', $pharmacie->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Numéro de téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   value="{{ old('phone', $pharmacie->phone) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Adresse de la pharmacie</label>
                            <textarea class="form-control" id="address" name="address"
                                      rows="3" required>{{ old('address', $pharmacie->address) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                            <a href="{{ route('pharmacie.index') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
