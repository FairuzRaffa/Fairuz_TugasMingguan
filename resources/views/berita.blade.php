@extends('layouts.main')

@section('content')
<h1>Berita</h1>
@foreach ($berita as $berita)
    <a href="/berita/{{  $berita['slug'] }}">
    <h2>{{  $berita['judul'] }}</h2></a>

    <h3>{{  $berita['penulis'] }}</h3>
    <p>{{  $berita['konten'] }}</p>
    </article>

@endforeach

@endsection