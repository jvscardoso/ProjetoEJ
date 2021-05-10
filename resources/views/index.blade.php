@extends('templates.template')

@section('content')
    <h2> Cadastro de empresas Juniores. </h2>
    @extends('templates.template')

    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Nome da Empresa</th>
                <th scope="col">Federação</th>
                <th scope="col">Estado</th>
            </tr>
            </thead>
            <tbody>

            @foreach($book as $books)
                @php
                    $user = $books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$books->price}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

