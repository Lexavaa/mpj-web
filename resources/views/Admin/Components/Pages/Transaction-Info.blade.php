<x-AdminLayout title="Info ID Card"> 
    <x-AlertScriptMolecules/>
    <div class="row">
        <div class="col-lg-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    <p class="card-description">
                        MEDIA YANG TELAH MELUNASI
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pesantren</th>
                                    <th>Regional</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($profiles->where('status_bayar', '==', 1) as $profiles_row)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $profiles_row->nama_pesantren }}</td>
                                        <td>{{ $profiles_row->regional->nama }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }} TABLE</h4>
                    <p class="card-description">
                        Transaksi!
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pesantren</th>
                                    <th>Regional</th>
                                    <th>Transfer Pada</th>
                                    <th>Bukti TF</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($profiles->where('bukti_tf', '!=', 'bukti-transfer/default.jpg') as $profiles_row)
                                        @if ($profiles_row->status_bayar == 0)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $profiles_row->nama_pesantren }}</td>
                                            <td>{{ $profiles_row->regional->nama }}</td>
                                            <td>{{ $profiles_row->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <img src="{{ '/storage/' . $profiles_row->bukti_tf }}"
                                                    style="width:200px; height:140px; border-radius:0px !important; ">
                                            </td>
                                            <td>
                                                <form action="/update/accepted/{{ $profiles_row->id }}"
                                                    class="d-inline" method="post">
                                                    @method('patch')
                                                    @csrf
                                                    <button class="badge badge-success border-0 show-alert-yay"
                                                        data-toggle="tooltip" title='Konfirmasi'>Konfirmasi</button>
                                                </form>
                                                <form action="/update/rejected/{{ $profiles_row->id }}" class="d-inline"
                                                    method="post">
                                                    @method('patch')
                                                    @csrf
                                                    <button class="badge badge-danger border-0 show-alert"
                                                        data-toggle="tooltip" title='Tolak'>Tolak</button>
                                                </form>
                                            </td>
                                </tr>
                                @endif
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
        $('.show-alert').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Tolak Pembayaran?',
                text: "System akan otomatis me-restart payment user!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Tolak!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });

        $('.show-alert-yay').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Pembayaran?',
                text: "System akan otomatis mematenkan status user!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Konfirmasi!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
</x-AdminLayout>