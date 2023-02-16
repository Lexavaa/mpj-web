@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Notifications</p>
                        <ul class="icon-data-list">
                            @foreach ($profile as $profiles)
                            <li>
                                <div class="d-flex">
                                    <img src="{{ asset('storage/' . $profiles->logo_ponpes) }}"
                                        alt="user">
                                    <div>
                                        <h6 class="text-info mb-1 text-dark">{{ $profiles->nama_pesantren }}
                                        </h6>
                                        <small class="mb-0 text-dark">{{ $profiles->nama_pengasuh }}</small>
                                        <br>
                                        <small><i
                                                class="fa-solid fa-clock m-1"></i>{{ $profiles->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
