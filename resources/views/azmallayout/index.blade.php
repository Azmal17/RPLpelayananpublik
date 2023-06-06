<a href="/mahasiswa/create">Add Mahasiswa</a>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>NIK</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $row)
        <tr>
            <td>{{ $row->NIM }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->tanggal_lahir }}</td>
            <td>{{ $row->tlp }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->jenis_kelamin }}</td>
            <td>{{ $row->agama }}</td>
            <td>{{ $row->NIK }}</td>
            <td> <a href="/mahasiswa/{{ $row->NIM }}/edit">Edit</a> </td>
            <td>
                <form action="/mahasiswa/{{ $row->NIM }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
        </tr>
    @endforeach
</table>
