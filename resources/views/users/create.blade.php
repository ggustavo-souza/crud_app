@extends('layouts.app')

@section('content')

@can('view users')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Adicionar Usuário
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-warning btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">ID</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}">
                            @error('id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-warning"><i class="fa fa-plus me-1"></i>Adicionar usuário</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>

@endcan
    
@endsection
