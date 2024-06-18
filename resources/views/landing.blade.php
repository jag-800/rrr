@extends('layouts.app')

@section('content')
<div class="jumbotron text-center text-white" style="background-image: url('https://images.unsplash.com/photo-1519659528534-9a929f0b98c8'); background-size: cover; background-position: center; height: 100vh;">
    <div class="overlay">
        <div class="content">
            <h1 class="display-4">シネマウェブサイトへようこそ</h1>
            <p class="lead">最新の映画を探索し、映画館の体験を簡単に管理しましょう。</p>
            <hr class="my-4 bg-light">
            <p>映画の世界へようこそ。最新情報をチェックし、お気に入りの映画を見つけましょう。</p>
            <a class="btn btn-primary btn-lg" href="{{ route('movies.index') }}" role="button">映画を見る</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://images.unsplash.com/photo-1597645587822-e99fa5d45d25" class="card-img-top" alt="最新リリース">
                <div class="card-body">
                    <h5 class="card-title">最新リリース</h5>
                    <p class="card-text">最新の映画リリース情報を常にチェックし、最新の話題作を楽しみましょう。</p>
                    <a href="#" class="btn btn-primary">詳細を見る</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://images.unsplash.com/photo-1503437313881-503a91226422" class="card-img-top" alt="高評価映画">
                <div class="card-body">
                    <h5 class="card-title">高評価映画</h5>
                    <p class="card-text">批評家や観客から高評価を受けた映画を発見しましょう。</p>
                    <a href="#" class="btn btn-primary">詳細を見る</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://images.unsplash.com/photo-1524985069026-dd778a71c7b4" class="card-img-top" alt="近日公開映画">
                <div class="card-body">
                    <h5 class="card-title">近日公開映画</h5>
                    <p class="card-text">近日公開予定の映画をチェックして、お気に入りの映画を見逃さないようにしましょう。</p>
                    <a href="#" class="btn btn-primary">詳細を見る</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>特集映画</h2>
            <p>特集映画セクションでは、特に注目されている映画を紹介します。様々なジャンルから選りすぐりの作品をご覧ください。</p>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc" class="img-fluid" alt="特集映画">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <h2>映画ニュース</h2>
            <p>最新の映画ニュースをチェックしましょう。新作の発表やイベント情報など、映画ファン必見のニュースをお届けします。</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="img-fluid" alt="映画ニュース">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>特集記事</h2>
            <p>映画に関する特集記事をお届けします。インタビュー、レビュー、特集など、映画の裏側に迫ります。</p>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26" class="img-fluid" alt="特集記事">
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <h2>お問い合わせ</h2>
            <p>映画に関する質問やお問い合わせはこちらからどうぞ。迅速に対応いたします。</p>
            <a class="btn btn-primary" href="#">お問い合わせフォーム</a>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe" class="img-fluid" alt="お問い合わせ">
        </div>
    </div>
</div>
@endsection
