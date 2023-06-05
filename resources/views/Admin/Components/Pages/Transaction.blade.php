<x-AdminLayout title="ID Card">
    <x-AlertScriptMolecules />
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                @foreach ($profile as $profiles_row)
                    @if ($profiles_row->bukti_tf != 'bukti-transfer/default.jpg' && $profiles_row->status_bayar == 0)
                        <div class="card m-3">
                            <div class="card-content m-3">
                                <div class="row">
                                    <div class="col-md-4"><img class="img-fluid"
                                            src="{{ asset('storage/' . $profiles_row->bukti_tf) }}" alt=""></div>
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <h3>
                                                TRANSAKSI SEDANG DIPROSES
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($profiles_row->bukti_tf != 'bukti-transfer/default.jpg' && $profiles_row->status_bayar == 1)
                        <div class="card m-3">
                            <div class="card-content m-3">
                                <div class="row">
                                    <div class="col-md-4"><img class="img-fluid"
                                            src="{{ asset('storage/' . $profiles_row->bukti_tf) }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <h3>
                                                ANDA SUDAH MELAKUKAN TRANSAKSI
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button style="border-radius:9px; background-color:rgb(30, 136, 30);  border:none; padding:8px;" onclick="window.location.href='https://wa.me/6282141331105?text=Assalamualaikum+admin+saya+perwakilan+dari+pondok+pesantren+{{$profiles_row->nama_pesantren}},+ingin+mencetak+kartu+id+atas+nama+{{$profiles_row->nama_pendaftar}},+sebagai+{{$profiles_row->jabatan_pendaftar}}'">Cetak Kartu</button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card m-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-content m-3">
                                <form action="/payment-user/{{ $profiles_row->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formFile" class="form-label">Logo Media</label>
                                            <img class="img-preview-logo-media img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="bukti_tf" name="bukti_tf"
                                                onchange="previewImageLogoMedia()">
                                        </div>
                                    </div>
                                    <script>
                                        function previewImageLogoMedia() {
                                            const image = document.querySelector('#bukti_tf');
                                            const imgPreview = document.querySelector('.img-preview-logo-media');

                                            imgPreview.style.display = 'block';

                                            const ofReader = new FileReader();
                                            ofReader.readAsDataURL(image.files[0]);

                                            ofReader.onload = function(oFREvent) {
                                                imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">KIRIM BUKTI</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-AdminLayout>
