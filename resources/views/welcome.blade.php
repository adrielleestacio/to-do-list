<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <style>
        body { font-family: 'Nunito', sans-serif; }
        .new-item { max-width: 520px; margin: 2rem auto 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="new-item">
            @include('flash-message')

            <h1>Todo App</h1>

            <form action="{{ route('saveItem') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Todo">New Todo Item</label>
                    <input type="text" class="form-control" id="Todo" name="listItem" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo Items</th>
                    <th scope="col">Is_Complete</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ListItems as $ListItem)
                    <tr>
                        <td>{{ $ListItem->id }}</td>
                        <td>{{ $ListItem->name }}</td>
                        <td>{{ $ListItem->is_complete }}</td>
                        <td>{{ $ListItem->created_at }}</td>
                        <td>
                            <a href="{{ route('viewItem', $ListItem->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('editItem', $ListItem->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            {{-- A link would let any crawler or link prefetcher delete the
                                 row, so deleting goes through a POST form instead. --}}
                            <form action="{{ route('deleteItem', $ListItem->id) }}" method="post" class="delete-form">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Nothing on the list yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <style>
        .delete-form { display: inline; }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
