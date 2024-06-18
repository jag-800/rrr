@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1 class="text-center mb-4">映画まとめ</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('movies.create') }}" class="btn btn-primary">映画を追加する</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @if ($movies->isEmpty())
        <p class="text-center">まだ映画がありません、映画を追加してください。</p>
    @else
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($movie->image)
                            <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->director }}</h6>
                            <p class="card-text">{{ Str::limit($movie->description, 100) }}</p>
                            <div class="mt-auto">
                                <p class="card-text"><small class="text-muted">{{ $movie->release_date }}</small></p>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm">詳細</a>
                                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">編集</a>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">削除</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $movies->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
