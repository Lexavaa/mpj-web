<x-AdminLayout title="Notifications">
        {{-- <x-partials.alert /> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 stretch-card grid-margin">
                    @if ($notif)
                        <p class="card-title">Notifications</p>
                    @else
                        <p class="card-title">Nothing Notifications</p>
                    @endif
                    <ul class="icon-data-list">
                        @foreach ($profiles as $profiles_row)
                            @if ($profiles_row->user->isActive == 0)
                                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Keterangan {{ $profiles_row->nama_pesantren }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Nama Pesantren</th>
                                                            <td>{{ $profiles_row->nama_pesantren }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Nama Pengasuh</th>
                                                            <td>{{ $profiles_row->nama_pengasuh }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Regional Pesantren</th>
                                                            <td>{{ $profiles_row->regional->nama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alamat Pesantren</th>
                                                            <td>{{ $profiles_row->alamat_lengkap }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Jumlah Kru Pesantren</th>
                                                            <td>{{ $profiles_row->jumlah_kru }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Nama Pendaftar</th>
                                                            <td>{{ $profiles_row->nama_pendaftar }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email Pendaftar</th>
                                                            <td>{{ $profiles_row->user->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Jabatan Pendaftar</th>
                                                            <td>{{ $profiles_row->jabatan_pendaftar }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Kontak Pendaftar</th>
                                                            <td>{{ $profiles_row->nomor_wa }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <li>
                            <div class="container">
                                <div class="row">
                                    @foreach ($profiles as $profiles_row)
                                        @if ($profiles_row->user->isActive == 0)
                                            <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                                                <div class="card h-100">
                                                    <img class="card-img-top"
                                                        src="{{ asset('storage/' . $profiles_row->logo_ponpes) }}"
                                                        alt="Card image cap" />
                                                    <div class="card-body">
                                                        <h6 class="card-title"> {{ $profiles_row->nama_pesantren }}
                                                           ( {{ $profiles_row->regional->nama }} )</h6>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <form
                                                                        action="/update/ferivied/{{ $profiles_row->users_id }}"
                                                                        method="POST">
                                                                        @method('PATCH')
                                                                        @csrf
                                                                        <button class="btn btn-success show-alert"
                                                                            type="submit"
                                                                            style="border-radius:8px; border:none;">
                                                                            Verified</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-4">
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-bs-toggle="modal" data-bs-target="#basicModal">
                                                                        <i class="fa-solid fa-magnifying-glass fa-beat"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="{{ asset('dashboard/js/jquery.3.2.1.min.js') }}"></script>
        <script>
            $('.show-alert').click(function(event) {
                var form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: 'Ferivikasi User?',
                    text: "user dapat otomatis login ke dashboard!",
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, setuju!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        </script>    
</x-AdminLayout>