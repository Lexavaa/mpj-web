<x-AdminLayout title="Team">
    <x-AlertScriptMolecules />
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CREWS TABLE</h4>
                    <p class="card-description">
                        <code>DAFTAR KRU</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor ID</th>
                                    <th>Nama</th>
                                    <th>Foto Kru</th>
                                    <th>Pesantren</th>
                                    <th>Alamat</th>
                                    <th>Nomor Wa</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Keahlian</th>
                                    <th>Status</th>
                                    <th>Bilah Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($crew as $crews)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $crews->nomor_id_kru }}</td>
                                        <td>{{ $crews->nama_kru }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $crews->foto_kru }}"
                                            style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        @foreach ($profile as $profiles)
                                            @if($profiles->users_id == $crews->user->id)
                                                <td>{{ $profiles->nama_pesantren }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $crews->alamat_kru }}</td>
                                        <td>{{ $crews->nomor_wa_kru }}</td>
                                        <td>{{ $crews->email_kru }}</td>
                                        <td>{{ $crews->jabatan_kru }}</td>
                                        <td>{{ $crews->keahlian_kru }}</td>
                                        <td>{{ $crews->status_kru }}</td>
                                        <td>
                                            <button type="button" class="badge bg-success"
                                                style="border: none; border-radius:8px;" data-toggle="modal" onclick="window.location.href='/team/{{ $crews->nomor_id_kru }}'">Tengok</button>
                                        </td>
                                        <td>
                                            <button type="button" class="badge bg-warning"
                                                style="border: none; border-radius:8px;" data-toggle="modal"
                                                data-target="#Edit-{{ $crews->id }}">Edit</button>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
