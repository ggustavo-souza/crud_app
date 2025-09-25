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
                <div class="card-header">Lista de Produtos</div>
                <div class="card-body">
                    @can('create products')
                    <a href="{{ route('products.create') }}" class="btn btn-warning btn-sm my-2"><i
                            class="fa fa-plus"></i> Adicionar Produto</a>
                    @endcan
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>R${{ $product->price }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                            @can('edit products')
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                                            @endcan
                                            @can('delete products')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Quer mesmo excluir este produto?');"><i
                                                    class="fa fa-trash"></i> Excluir</button>
                                            @endcan
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

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection