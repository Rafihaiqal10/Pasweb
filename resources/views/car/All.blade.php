@extends('page.main')

@section('content')
    <h1>ini adalah halaman dokter</h1>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Descripsi</th>
            <th scope="col">rate</th>
            <th scope="col">price</th>

        </tr>
        </thead>
        <?php
        $no = 1;
        ?>
        <tbody>
        @foreach($car as $data)
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td>{{$data['name']}}</td>
                <td>{{$data['desc']}}</td>
                <td>{{$data['rate']}}</td>
                <td>{{$data['price']}}</td>
            </tr>

        </tbody>
        @endforeach


    </table>



@endsection
