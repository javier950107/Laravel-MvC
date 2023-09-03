<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <form action="{{ route('books.insert') }}" method="post">
        @csrf
        <div class="form-control">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
            <label for="author">Authors</label>
            <select name="author" id="author" class="form-control">
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Save Book</button>
    </form>

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p style="color:red">{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if(isset($books) && count($books) > 0)
        <ul>
        @foreach($books as $book)
            <li>{{$book->title}}, author: {{$book->author->name}}</li>
        @endforeach
        </ul>
    @endif

    <a href="{{route('authors.index')}}">Volver al menu principal</a>

</body>
</html>