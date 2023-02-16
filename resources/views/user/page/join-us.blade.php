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
                <form class="custom-form volunteer-form mb-5" action="/form-mpj" method="POST">
                    @csrf
                    <h3 class="mb-4">Jadilah Khodim Militan.</h3>
                    <div class="row">
                        <p>Data Pesantren</p>
                        <div class="col-lg-12 col-12">
                            <input id="pesantren" type="text" placeholder="Nama" class="form-control @error('pesantren') is-invalid @enderror" id="pesantren" name="pesantren" required autofocus value="{{ old('pesantren') }}">
                            @error('pesantren')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-12">
                            <input id="pengasuh" type="text" placeholder="Nama Pengasuh" class="form-control @error('pengasuh') is-invalid @enderror" id="pengasuh" name="pengasuh" required autofocus value="{{ old('pengasuh') }}">
                            @error('pengasuh')
                            <div class="invalid-feedback mt-0">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <input id="alamat" type="text" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <select class="form-control @error('regionals_id') is-invalid @enderror" id="regionals_id" name="regionals_id" required autofocus value="{{ old('regionals_id') }}">
                                    @foreach ($regional as $region)
                                        @if (old('regionals_id') == $region->id)
                                            <option value="{{ $region->id }}" selected>{{  $region->nama }}</option>
                                        @else
                                            <option value="{{ $region->id }}">{{  $region->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @error('regionals_id')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12">
                            <input id="crew_qty" type="text" placeholder="Jumlah Anggota Kru" class="form-control @error('crew_qty') is-invalid @enderror" id="crew_qty" name="crew_qty" required autofocus value="{{ old('crew_qty') }}">
                            @error('crew_qty')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <p>Data Login</p>
                        <div class="col-lg-6 col-12">
                            <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="{{ old('password') }}">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="SeeMe();">
                                <label class="form-check-label" for="flexSwitchCheckDefault"><p class="show">Show</p><p class="hide" style="display: none;">Hide</p></label>
                              </div>
                            @error('password')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <p>Data Pribadi</p>
                        <div class="col-lg-12 col-12">
                            <input id="nama" type="text" placeholder="Nama" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="jabatan" type="text" placeholder="Jabatan Di Media" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" required autofocus value="{{ old('jabatan') }}">
                            @error('jabatan')
                            <div class="invalid-feedback">
                                <small>{{ $message }}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="no_wa" type="text" placeholder="Nomor WA" class="form-control @error('no_wa') is-invalid @enderror" id="no_wa" name="no_wa" required autofocus value="{{ old('no_wa') }}">
                            @error('no_wa')
                            <div class="invalid-feedback">
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