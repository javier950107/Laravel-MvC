<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <form action="{{ route('authors.insert') }}" method="post">
        @csrf
        <div class="form-control">
            <label for="name">Author Name</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <button class="btn btn-primary" type="submit">Save author</button>
    </form>

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p style="color:red">{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if(isset($authors) && count($authors) > 0)
        <h2>List of authors</h2>
        <ul>
            @foreach($authors as $author)
                <li>{{$author->name}} 
                    <form action="{{route('authors.delete', $author->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif


    <a href="{{route('books.index')}}">Redirect to books</a>


</body>
</html>