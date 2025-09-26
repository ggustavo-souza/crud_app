@extends('layouts.app')

@section('content')

@can('view users')

    <div class="row justify-content-center mt-3">

        <div class="col-md-12">

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession

            <div class="card mt-5">
                <div class="card-header">Lista de Usuários</div>
                <div class="card-body">
                    @can('create users')
                    <a href="{{ route('users.create') }}" class="btn btn-warning btn-sm my-2"><i
                            class="fa fa-plus"></i> Adicionar Usuário</a>
                    @endcan
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('users.show', $user->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                            @can('edit users')
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                                            @endcan
                                            @can('delete users')
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

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
@endcan
@endsection