@extends('page.main')

@section('content')
    <h1>ini adalah halaman Game</h1>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Nama</th>
            <th scope="col">Rate</th>
            <th scope="col">Rilis</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        <tbody>
        @foreach($game as $data)
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><img src="../images/{{$data->img}}" alt=""></td>
                <td>{{$data->nama}}</td>
                <td>{{ $data->rate }}</td>
                <td>{{ $data->rilis }}</td>
                <td>
                    <a href="/game/{{ $data->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Info</button></a>
                </td>
            </tr>

        </tbody>
        @endforeach


    </table>


@endsection
