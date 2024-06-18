@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Movies</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @if ($movies->isEmpty())
        <p class="text-center">No movies available. Please add a movie.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Director</th>
                        <th>Release Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->description }}</td>
                            <td>{{ $movie->director }}</td>
                            <td>{{ $movie->release_date }}</td>
                            <td>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $movies->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
