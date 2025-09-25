@extends('layouts.app')

@section('content')


    <div class="row justify-content-center mt-3">

        <div class="col-md-12">

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession

            <div class="card mt-5">
                <div class="card-header">Lista de Imóveis</div>
                <div class="card-body">
                    <a href="{{ route('imovels.create') }}" class="btn btn-warning btn-sm my-2"><i class="fa fa-plus"></i>
                        Adicionar Imóvel</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Proprietário</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($imovels as $imovel)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $imovel->endereco }}</td>
                                    <td>{{ $imovel->descricao }}</td>
                                    <td>{{ $imovel->proprietario }}</td>
                                    @if ($imovel->foto)
                                        <td class="mb-4 text-center">
                                            {{-- 2. Gera a URL usando asset() e o caminho guardado --}}
                                            <img src="{{ asset('storage/' . $imovel->foto) }}" alt="Foto do Imóvel"
                                                class="img-fluid rounded" style="max-height: 100px;">
                                        </td>
                                    @else
                                        <td class="alert alert-info text-center">
                                            Este imóvel não possui foto.
                                        </td>
                                    @endif
                                    <td>
                                        <form action="{{ route('imovels.destroy', $imovel->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('imovels.show', $imovel->id) }}" class="btn btn-warning btn-sm"><i
                                                    class="fa fa-eye"></i> Ver</a>

                                            <a href="{{ route('imovels.edit', $imovel->id) }}" class="btn btn-warning btn-sm"><i
                                                    class="fa fa-pencil"></i> Editar</a>

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Quer deletar este imovel?');"><i
                                                    class="fa fa-trash"></i> Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>Nenhum registro foi encontrado!</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $imovels->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection