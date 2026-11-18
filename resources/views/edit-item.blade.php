@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Todo Item</h1>
    <form action="{{ route('updateItem', $item->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="listItem">Todo Item</label>
            <input type="text" class="form-control" id="listItem" name="listItem" value="{{ $item->name }}">
        </div>
        <div class="form-group">
            <label for="is_complete">Is Complete</label>
            <input type="checkbox" id="is_complete" name="is_complete" {{ $item->is_complete ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/" class="btn btn-default">Cancel</a>
    </form>
</div>
@endsection