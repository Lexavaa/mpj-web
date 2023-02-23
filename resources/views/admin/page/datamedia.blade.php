@extends('admin.layouts.main')

@section('content')
    @include('alert')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir MPJ</h4>
                    <p class="card-description">
                        Lengkapi Data Berikut
                    </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @foreach ($profile as $profiles_row)
                        <form method="POST" action="/upload/data-user/{{ auth()->user()->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama_pesantren">Nama Pesantren</label>
                                    <p class="form-control" onclick="permanent();">
                                        {{ old('nama_pesantren', $profiles_row->nama_pesantren) }}</p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama_pengasuh">Nama Pengasuh</label>
                                    <p class="form-control" onclick="permanent();">
                                        {{ old('nama_pengasuh', $profiles_row->nama_pengasuh) }}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alamat_lengkap">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap"
                                        placeholder="Alamat Lengkap"
                                        value="{{ old('alamat_lengkap', $profiles_row->alamat_lengkap) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="regionals_id">Regional</label>
                                    <p class="form-control" onclick="permanent();">
                                        {{ old('regional', $profiles_row->regional->nama) }}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jumlah_kru">Jumlah Anggota Kru</label>
                                    <input type="text" class="form-control" id="jumlah_kru" name="jumlah_kru"
                                        placeholder="Jumlah Anggota Kru"
                                        value="{{ old('jumlah_kru', $profiles_row->jumlah_kru) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nama_pendaftar">Nama</label>
                                    <input type="text" class="form-control" id="nama_pendaftar" name="nama_pendaftar"
                                        placeholder="Nama"
                                        value="{{ old('nama_pendaftar', $profiles_row->nama_pendaftar) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jabatan_pendaftar">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan_pendaftar"
                                        name="jabatan_pendaftar" placeholder="Nama"
                                        value="{{ old('jabatan_pendaftar', $profiles_row->jabatan_pendaftar) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nomor_wa">Nomor WA</label>
                                    <input type="text" class="form-control" id="nomor_wa" name="nomor_wa"
                                        placeholder="Nama" value="{{ old('nomor_wa', $profiles_row->nomor_wa) }}">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
