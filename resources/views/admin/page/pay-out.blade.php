@extends('admin.layouts.main')

@section('content')
    @include('alert')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
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
                                    @foreach ($profiles as $profiles_row)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $profiles_row->nama_pesantren }}</td>
                                        <td>{{ $profiles_row->regional->nama }}</td>
                                        <td>{{ $profiles_row->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <img src="{{ '/storage/' . $profiles_row->bukti_tf }}"
                                                style="width:200px; height:140px; border-radius:0px !important; ">
                                        </td>
                                        <td>
                                            <form action="/failed-transaction/{{ $profiles_row->id }}" class="d-inline"
                                                method="post">
                                                @method('patch')
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
                    form.submit();
                }
            })
        });
    </script>
@endsection
