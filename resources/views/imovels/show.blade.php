@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Informação do Imóvel
                    </div>
                    <div class="float-end">
                        <a href="{{ route('imovels.index') }}" class="btn btn-warning btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="endereco"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $imovel->endereco }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="descricao"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Descrição:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $imovel->descricao }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="proprietario"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Proprietário:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $imovel->proprietario }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Foto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if ($imovel->foto)
                                <td class="mb-4 text-center">
                                    {{-- 2. Gera a URL usando asset() e o caminho guardado --}}
                                    <img src="{{ asset('storage/' . $imovel->foto) }}" alt="Foto do Imóvel"
                                        class="img-fluid rounded" style="max-height: 100px;">
                                </td>
                            @else
                                    Este imóvel não possui foto.
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection