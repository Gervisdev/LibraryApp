@extends('Layouts.app')

@section('title','Accueil')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Author</th>
                <th scope="col">date de publication</th>
                <th scope="col">description</th>
              </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
              <tr>
                <th scope="row">1</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_date }}</td>
                <td>{{ $book->description }}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection