@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-primary mb-3">{{ $newsItem['title'] }}</h2>
        <p>{{ $newsItem['content'] }}</p>
        <a href="{{ route('news.index') }}" class="btn btn-outline-secondary mt-3">← Back to News</a>
    </div>
</div>
@endsection
