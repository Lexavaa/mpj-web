@extends('admin.layouts.main')

@section('content')
    @include('alert')
    {{-- MODAL MAU LEWAT! --}}
    @foreach ($crew as $crews)
        <div class="modal fade" id="Edit-{{ $crews->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="p-4" method="post" action="/crew/{{ $crews->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Regional</label>
                            <input type="text" name="nama" class="@error('nama') is-invalid @enderror form-control"
                                id="Nama" placeholder="Nama" value="{{ old('nama', $crews->nama) }}">
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
                    <h4 class="card-title">{{ $title }} TABLE</h4>
                    <p class="card-description">
                        Add <code>Regional</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Author</th>
                                    <th>Foto</th>
                                    <th>Alamat</th>
                                    <th>Whatsapp</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Keahlian</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($crew as $crews)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $crews->users->email }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $crews->foto_kru }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>{{ $crews->alamat_kru }}</td>
                                        <td>{{ $crews->nomor_wa_kru }}</td>
                                        <td>{{ $crews->email_kru }}</td>
                                        <td>{{ $crews->jabatan_kru }}</td>
                                        <td>{{ $crews->keahlian_kru }}</td>
                                        <td>{{ $crews->status_kru }}</td>
                                        <td>
                                            <button type="button" class="badge bg-warning"
                                                style="border: none; border-radius:8px;" data-toggle="modal"
                                                data-target="#Edit-{{ $crews->id }}">Edit</button>
                                            <form action="/crew/{{ $crews->id }}" class="d-inline" method="post">
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
                    <h4 class="card-title">{{ $title }} FORM</h4>
                    <p class="card-description">
                        Make Regional
                    </p>
                    <form class="forms-sample" method="POST" action="/crew" enctype="multipart/form-data">
                        @csrf
                        <input style="display: none;" type="text" name="users_id"
                            class="@error('users_id') is-invalid @enderror form-control" id="users_id" placeholder="Nama"
                            value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Foto Kuru</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" type="file" id="foto_kru" name="foto_kru"
                                onchange="previewImage()">
                        </div>
                        <div class="form-group">
                            <label for="Alamat_kru">Alamat</label>
                            <input type="text" name="alamat_kru"
                                class="@error('alamat_kru') is-invalid @enderror form-control" id="Alamat_kru"
                                placeholder="Nama" value="{{ old('alamat_kru') }}">
                            @error('alamat_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Nomor Wa Kru">Nomor Wa</label>
                            <input type="text" name="nomor_wa_kru"
                                class="@error('nomor_wa_kru') is-invalid @enderror form-control" id="No Wa Kru"
                                placeholder="Nama" value="{{ old('nomor_wa_kru') }}">
                            @error('nomor_wa_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="email_kru"
                                class="@error('email_kru') is-invalid @enderror form-control" id="Email"
                                placeholder="Nama" value="{{ old('email_kru') }}">
                            @error('email_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Jabatan">Jabatan</label>
                            <input type="text" name="jabatan_kru"
                                class="@error('jabatan_kru') is-invalid @enderror form-control" id="Jabatan"
                                placeholder="Jabatan" value="{{ old('jabatan_kru') }}">
                            @error('jabatan_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Keahlian_kru">Keahlian</label>
                            <input type="text" name="keahlian_kru"
                                class="@error('keahlian_kru') is-invalid @enderror form-control" id="Keahlian_kru"
                                placeholder="Keahlian_kru" value="{{ old('keahlian_kru') }}">
                            @error('keahlian_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Status Kru">Status</label>
                            <input type="text" name="status_kru"
                                class="@error('status_kru') is-invalid @enderror form-control" id="Status Kru"
                                placeholder="Status Kru" value="{{ old('status_kru') }}">
                            @error('status_kru')
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


        function previewImage() {
            const image = document.querySelector('#foto_kru');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImageEdit() {
            const image = document.querySelector('#imageEdit');
            const imgPreview = document.querySelector('.img-preview-edit');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
