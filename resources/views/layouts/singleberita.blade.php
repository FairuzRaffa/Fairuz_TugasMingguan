@extends('layouts.main')

@section('content')
    <article>
        <h1>{{ $new_berita ['judul'] }}</h1>
        <h2>{{ $new_berita ['penulis'] }}</h2>
        <p>{{ $new_berita ['konten'] }}</p>
    </article>
@endsection