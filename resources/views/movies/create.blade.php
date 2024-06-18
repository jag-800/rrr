@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1 class="text-center mb-4">映画を追加</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">画像</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <div class="form-group col-md-6">
                <label for="title">映画タイトル</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="director">監督</label>
                <input type="text" name="director" class="form-control" id="director" value="{{ old('director') }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">あらすじ</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="release_date">公開日</label>
            <input type="date" name="release_date" class="form-control" id="release_date" value="{{ old('release_date') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">更新する</button>
    </form>
</div>
@endsection
