@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Todo Item</h1>
    <p><strong>ID:</strong> {{ $item->id }}</p>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Is Complete:</strong> {{ $item->is_complete ? 'Yes' : 'No' }}</p>
    <p><strong>Created At:</strong> {{ $item->created_at }}</p>
    <a href="/" class="btn btn-primary">Back</a>
</div>
@endsection