<!-- resources/views/alker/index.blade.php -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">Daftar Alker</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Merk</th>
                                    <th>Seri Nomor</th>
                                    <th>Kondisi</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alkers as $alker)
                                    <tr>
                                        <td>{{ $alker->id }}</td>
                                        <td>{{ $alker->merk }}</td>
                                        <td>{{ $alker->sn }}</td>
                                        <td>{{ $alker->kondisi }}</td>
                                        <td>
                                            @if($alker->foto)
                                                <img src="{{ asset('storage/' . $alker->foto) }}" alt="Foto" style="max-width: 100px;">
                                            @else
                                                No Photo
                                            @endif
                                        </td>
                                        <td>{{ $alker->status }}</td>
                                        <td>{{ $alker->created_at }}</td>
                                        <td>{{ $alker->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
