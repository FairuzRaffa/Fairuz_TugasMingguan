@extends('layouts.main')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">

            <div class="card content-panel text-center">

                <div class="card-body">

                    <!-- Foto Profil -->
                    <img 
                        src="{{ $foto }}" 
                        alt="Foto Profil"
                        class="rounded-circle mb-3"
                        style="width:140px; height:140px; object-fit:cover;"
                    >

                    <!-- Nama -->
                    <h3 class="mb-1">{{ $nama }}</h3>

                    <!-- Nomor HP -->
                    <p class="text-muted mb-4">{{ $nohp }}</p>

                    <!-- Button -->
                    <a href="#" class="btn btn-primary px-4">
                        Edit Profil
                    </a>

                </div>

            </div>

        </div>
    </div>

</div>
@endsection
