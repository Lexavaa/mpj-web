@extends('admin.layouts.main')

@section('content')
    @include('alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Notifications</p>
                        <ul class="icon-data-list">
                            @foreach ($profiles as $profiles_row)
                                @if ($profiles_row->user->isActive == 0)
                                    <li>
                                        <div class="d-flex">
                                            <img class="m-2" src="{{ asset('storage/' . $profiles_row->logo_ponpes) }}"
                                                alt="user">
                                            <div>
                                                <h6 class="text-info mb-1 text-dark">{{ $profiles_row->nama_pesantren }} -
                                                    {{ $profiles_row->regional->nama }}
                                                </h6>
                                                <small class="mb-0 text-dark">pengasuh :
                                                    {{ $profiles_row->nama_pengasuh }}</small>
                                                <br>
                                                <small class="mb-0 text-dark">email :
                                                    {{ $profiles_row->user->email }}, join at
                                                    <i><b>{{ $profiles_row->created_at->diffForHumans() }}</b> </i></small>
                                                <br>
                                            </div>
                                            <form action="/ferivied-user/{{ $profiles_row->users_id }}" method="POST">
                                                @method('PATCH')
                                                @csrf
                                                <div class="m-3">
                                                    <button class="badge bg-success show-alert" type="submit"
                                                        style="border-radius:8px; border:none;">
                                                        Verified He <i class="fa-solid fa-stamp"
                                                            style="color:#242424;"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
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
@endsection
