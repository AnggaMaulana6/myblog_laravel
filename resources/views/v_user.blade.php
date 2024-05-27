<table>
    <thead>
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
    </tr>
    </thead>
    <tbody>
        @foreach($view as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data['nis']}}</td>
            <td>{{$data['nama']}}</td>
        </tr>
        @endforeach

   