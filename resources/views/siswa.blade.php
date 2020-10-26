<html>
<body>
    <table border=" 1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Sekolah</th>
        </tr>
        @foreach($siswa as $ssw)
        <tr>
            <td>{{ $ssw->nama }}</td>
            <td>{{ $ssw->kelas }}</td>
            <td>{{ $ssw->sekolah }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>