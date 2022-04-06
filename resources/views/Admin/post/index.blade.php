@extends('admin.layouts.base')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Tabella dei post </h1>

        {{-- tabella --}}
        <table class="table">
            {{-- tabella head --}}
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            {{-- tabella body --}}
            <tbody>
                {{-- ciclo i posts per ognuno creo riga tabella --}}
              @foreach ($posts as $post )
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    {{-- il contenuto mostro solo i primi 30 caratteri usando la funzione substr di php --}}
                    <td>{{ substr($post->content, 0, 30) }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>Azioni</td>
                </tr>
              @endforeach  
            </tbody>
        </table>
    </div>
@endsection