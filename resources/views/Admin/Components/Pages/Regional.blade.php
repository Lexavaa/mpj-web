<x-AdminLayout title="Regional">
    <x-AlertScriptMolecules />
    {{-- MODAL MAU LEWAT! --}}
    @foreach ($regional as $regionals)
        <div class="modal fade" id="Edit-{{ $regionals->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="p-4" method="post" action="/update/regional/{{ $regionals->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Regional</label>
                            <input type="text" name="nama"
                                class="@error('nama') is-invalid @enderror form-control" id="Nama"
                                placeholder="Nama" value="{{ old('nama', $regionals->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- SEGINI AJA DAHHH --}}
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">REGIONAL TABLE</h4>
                    <p class="card-description">
                        <code>DAFTAR REGIONAL</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Regional</th>
                                    {{-- <th>ID Regional</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($regional as $regionals)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $regionals->nama }}</td>
                                        {{-- <td>{{ $regionals->nomor_id_regional }}</td> --}}
                                        <td>
                                            <button type="button" class="badge bg-warning"
                                                style="border: none; border-radius:8px;" data-toggle="modal"
                                                data-target="#Edit-{{ $regionals->id }}">Edit</button>
                                            <form action="/delete/regional/{{ $regionals->id }}" class="d-inline"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="badge badge-danger border-0 show-alert-delete-box"
                                                    data-toggle="tooltip" title='Delete'>delete</button>
                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FORM REGIONAL</h4>
                    <p class="card-description">
                        TAMBAH REGIONAL
                    </p>
                    <form class="forms-sample" method="POST" action="/upload/regional" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Regional</label>
                            <input type="text" name="nama"
                                class="@error('nama') is-invalid @enderror form-control" id="Nama"
                                placeholder="Nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/js/jquery.3.2.1.min.js') }}"></script>
    <script>
        $('.show-alert-delete-box').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Tidak Dapat Kembali!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                            'Terhapus!',
                            'File Sukses Terhapus.',
                            'success'
                        ),
                        form.submit();
                }
            })
        });
    </script>
</x-AdminLayout>
