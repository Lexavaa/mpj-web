@extends('user.layouts.main') {{-- menampilkan semua komponen css dan js. langsung panggil ketika buat page baru. isi @section dengan nama 'content' --}}
@section('title','Gabung MPJ')
@section('content')
@include('alert')
<section class="volunteer-section section-padding" id="join_us">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-5 col-12 pt-5 ">
                <img src="assets/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                    class="volunteer-image img-fluid" alt="">

                <div class="custom-block-body">
                    <h4 class="text-white mt-lg-3 mb-lg-3">Tentang Khodim Militan</h4>

                    <p class="text-white">Khodim Militan adalah Santri yang berkhidmah di jalur multimedia pondok pesantren dengan berbagai keterbatasan yang dimiliki akan tetapi berjuang sekuat tenaga agar bisa menghasilkan konten dari pesantren.</p>
                </div>
            </div>
            
            <div class="col-lg-7 col-12">
                <h2 class="text-white mb-4">Join Us!</h2>
                <form class="custom-form contact-form" action="/upload/data-user" method="POST" role="form">
                    @csrf
                    <h3 class="mb-4">Jadilah Khodim Militan.</h3>
                    <div class="row">
                        <p class="d-flex justify-content-start">Data Pesantren</p>
                        <div class="col-lg-12 col-12">
                            <input id="nama_pesantren" type="text" placeholder="Nama"
                                class="form-control @error('nama_pesantren') is-invalid @enderror"
                                id="nama_pesantren" name="nama_pesantren" required autofocus
                                value="{{ old('nama_pesantren') }}">
                            @error('nama_pesantren')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-12">
                            <input id="nama_pengasuh" type="text" placeholder="Pengasuh"
                                class="form-control @error('nama_pengasuh') is-invalid @enderror"
                                id="nama_pengasuh" name="nama_pengasuh" required autofocus
                                value="{{ old('nama_pengasuh') }}">
                            @error('nama_pengasuh')
                                <div class="invalid-feedback d-flex justify-content-start mt-0 ">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <input id="alamat_lengkap" type="text" placeholder="Alamat"
                                class="form-control @error('alamat_lengkap') is-invalid @enderror"
                                id="alamat_lengkap" name="alamat_lengkap" required autofocus
                                value="{{ old('alamat_lengkap') }}">
                            @error('alamat_lengkap')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <select class="form-control @error('regionals_id') is-invalid @enderror"
                                    id="regionals_id" name="regionals_id" required autofocus
                                    value="{{ old('regionals_id') }}">
                                    @foreach ($regional as $region)
                                        @if (old('regionals_id') == $region->id)
                                            <option value="{{ $region->id }}" selected>{{ $region->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $region->id }}">{{ $region->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @error('regionals_id')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <input id="jumlah_kru" type="text" placeholder="Jumlah Anggota Kru"
                                class="form-control @error('jumlah_kru') is-invalid @enderror" id="jumlah_kru"
                                name="jumlah_kru" required autofocus value="{{ old('jumlah_kru') }}">
                            @error('jumlah_kru')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <p class="d-flex justify-content-start">Data Login</p>
                        <div class="col-lg-6 col-12">
                            <input id="email" type="text" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" required autofocus value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="password" type="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" required autofocus value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    onclick="SeeMe();">
                                <label class="d-flex justify-content-start form-check-label"
                                    for="flexSwitchCheckDefault">
                                    <p class="show">Show</p>
                                    <p class="hide" style="display: none;">Hide</p>
                                </label>
                            </div>
                        </div>
                        <p class="d-flex justify-content-start">Data Pribadi</p>
                        <div class="col-lg-12 col-12">
                            <input id="nama_pendaftar" type="text" placeholder="Nama"
                                class="form-control @error('nama_pendaftar') is-invalid @enderror"
                                id="nama_pendaftar" name="nama_pendaftar" required autofocus
                                value="{{ old('nama_pendaftar') }}">
                            @error('nama_pendaftar')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="jabatan_pendaftar" type="text" placeholder="Jabatan Di Media"
                                class="form-control @error('jabatan_pendaftar') is-invalid @enderror"
                                id="jabatan_pendaftar" name="jabatan_pendaftar" required autofocus
                                value="{{ old('jabatan_pendaftar') }}">
                            @error('jabatan_pendaftar')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="nomor_wa" type="text" placeholder="Nomor WA"
                                class="form-control @error('nomor_wa') is-invalid @enderror" id="nomor_wa"
                                name="nomor_wa" required autofocus value="{{ old('nomor_wa') }}">
                            @error('nomor_wa')
                                <div class="invalid-feedback d-flex justify-content-start">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="form-control">Join Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery.min.js"></script>
    <script>
    function SeeMe() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    let flag = true;
        $(document).ready(function(){
            $('.form-check-input').click(function(){
                if(flag){
                    flag = false;
                    $('.hide').show();
                    $('.show').hide();
                }else{
                    flag = true;
                    $('.show').hide();
                    $('.show').show();
                    $('.hide').hide();
                }
            });
        });
    </script>
@endsection