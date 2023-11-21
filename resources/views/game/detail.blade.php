@extends('page.main')

@section('content')
    <div class="container">
        <div class="pb-3">
            <a href='{{ url('/game/all') }}' class="btn btn-danger"> Kembali </a>
        </div>
        <h1 class="display-4 mb-4">Detail Game</h1>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="nama">Name game</label>
            <input type="nama" id="nama" name="nama" value="{{ $game->nama }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="umur">Description</label>
            <input type="int" id="umur" name="umur" value="{{ $game-> desc}}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="kota">Rate</label>
            <input type="text" id="kota" name="kota" value="{{ $game->rate }}" class="form-control" readonly>
        </div>

        <div class="form-group p-3" data-aos="fade-up">
            <label for="lahir">Rilis</label>
            <input type="date" id="lahir" name="lahir" value="{{ $game->rilis }}" class="form-control" readonly>
        </div>
    </div>
@endsection
