@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Adicionar novo imóvel
                </div>
                <div class="float-end">
                    <a href="{{ route('imovels.index') }}" class="btn btn-warning btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('imovels.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                            @error('endereco')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descricao" class="col-md-4 col-form-label text-md-end text-start">Descrição</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" value="{{ old('descricao') }}">
                            @error('descricao')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="proprietario" class="col-md-4 col-form-label text-md-end text-start">Proprietário</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('proprietario') is-invalid @enderror" id="proprietario" name="proprietario" value="{{ old('proprietario') }}">
                            @error('proprietario')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control" @error('foto') is-invalid @enderror id="foto" name="foto" value="{{ old('foto') }}">
                            @error('foto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-warning"><i class="fa fa-plus me-2"></i>Adicionar Imóvel</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection

