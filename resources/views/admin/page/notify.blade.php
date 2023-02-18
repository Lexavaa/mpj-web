@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Notifications</p>
                        <ul class="icon-data-list">
                            @foreach ($profiles as $profiles_row)
                            @if($profiles_row->user->isActive == '0')
                                <li>
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/' . $profiles_row->logo_ponpes) }}" alt="user">
                                        <div>
                                            <h6 class="text-info mb-1 text-dark">{{ $profiles_row->nama_pesantren }}
                                            </h6>
                                            <small class="mb-0 text-dark">{{ $profiles_row->nama_pengasuh }}</small>
                                            <br>
                                            <small><i class="fa-solid fa-clock m-1"></i>{{ $profiles_row->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="justify-content-end">
                                            Ferivied He<button style="background-color:transparent; border:none;"><i class="fa-solid fa-certificate" style="color:#153ec5;"></i></button>
                                        </div>
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
@endsection
