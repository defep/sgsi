@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="post" action="{{ route('assets.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Nombre del activo:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="price">Descripción:</label>
                            <input type="text" class="form-control" name="description" />
                        </div>
                        <button type="submit" class="btn btn-primary">Crear activo</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection