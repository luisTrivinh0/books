@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                @if(isset($book))
                    Editar Livro
                @else
                    Criar Livro
                @endif
            </div>

            <div class="card-body">
                <form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
                    @csrf
                    @if(isset($book))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ isset($book) ? $book->name : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN (Somente números)</label>
                        <input type="text" pattern="\d+" class="form-control" id="isbn" name="isbn" value="{{ isset($book) ? $book->isbn : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="value" class="form-label">Valor (Decimal)</label>
                        <input type="number" step="0.01" class="form-control" id="value" name="value" value="{{ isset($book) ? $book->value : '' }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        @if(isset($book))
                            Atualizar
                        @else
                            Criar
                        @endif
                    </button>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
