@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Editar Imóvel
                </div>
                <div class="float-end">
                    <a href="{{ route('imovels.index') }}" class="btn btn-warning btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('imovels.update', $imovel->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ $imovel->endereco }}">
                            @error('endereco')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descricao" class="col-md-4 col-form-label text-md-end text-start">Descrição</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" value="{{ $imovel->descricao }}">
                            @error('descricao')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="proprietario" class="col-md-4 col-form-label text-md-end text-start">Proprietário</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('proprietario') is-invalid @enderror" id="proprietario" name="proprietario" value="{{ $imovel->proprietario }}">
                            @error('proprietario')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ $imovel->foto }}">
                            @error('foto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-warning"><i class="fa fa-pencil me-1"></i>Editar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection

