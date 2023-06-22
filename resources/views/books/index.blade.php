@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Livros</div>

            <div class="card-body">
                <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Adicionar Livro</a>

                <table class="table mt-5" id="books-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>ISBN</th>
                            <th>Valor (U$)</th>
                            <th data-order="{{ now()->timestamp }}">Criado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->value }}</td>
                                <td>{{ $book->created_at }}</td>
                                <td>
                                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse livro?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Não há tarefas cadastradas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#books-table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
                },
                order: [[0, 'desc']]
            });
        });
    </script>
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}', '', { "toastClass": "toast-success" });
        </script>
    @endif
@endsection
