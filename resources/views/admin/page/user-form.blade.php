<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <ul class="icon-data-list">
                    <p class="card-title">{{ $profile->where('link_audio_dawuh', '!==', null)->count() }} Media Telah Terdaftar</p>
                    @foreach ($profile->where('link_audio_dawuh', '!==', null) as $profiles)
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
    <div class="col-md-8">
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
                @foreach ($profile_check as $profiles)
                    <form method="POST" action="/upload/data/{{ auth()->user()->id }}"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nama_media">Nama Media</label>
                                <input type="text" class="form-control" id="nama_media"
                                    name="nama_media" placeholder="Nama Media"
                                    value="{{ old('nama_media', $profiles->nama_media) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomor_telegram">No Telegram</label>
                                <input type="text" class="form-control" id="nomor_telegram"
                                    name="nomor_telegram" placeholder="No Telegram"
                                    value="{{ old('nomor_telegram', $profiles->nomor_telegram) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram"
                                    name="instagram" placeholder="Instagram"
                                    value="{{ old('instagram', $profiles->instagram) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tiktok">Tik-Tok</label>
                                <input type="text" class="form-control" id="tiktok" name="tiktok"
                                    placeholder="Tik-Tok" value="{{ old('tiktok', $profiles->tiktok) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    placeholder="Youtube"
                                    value="{{ old('youtube', $profiles->youtube) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook"
                                    name="facebook" placeholder="Facebook"
                                    value="{{ old('facebook', $profiles->facebook) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    placeholder="Twitter"
                                    value="{{ old('twitter', $profiles->twitter) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website"
                                    placeholder="Website"
                                    value="{{ old('website', $profiles->website) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_tiktok"
                                    aria-describedby="link_tiktok" name="link_tiktok"
                                    placeholder="Link Tiktok"
                                    value="{{ old('link_tiktok', $profiles->link_tiktok) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_youtube"
                                    aria-describedby="link_youtube" name="link_youtube"
                                    name="link_"placeholder="Link Yt"
                                    value="{{ old('link_youtube', $profiles->link_youtube) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_instagram"
                                    aria-describedby="link_instagram" name="link_instagram"
                                    placeholder="Link Ig"
                                    value="{{ old('link_instagram', $profiles->link_instagram) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_facebook"
                                    aria-describedby="link_facebook" name="link_facebook"
                                    placeholder="Link Fb"
                                    value="{{ old('link_facebook', $profiles->link_facebook) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_twitter"
                                    aria-describedby="link_twitter" name="link_twitter"
                                    placeholder="Link Tw"
                                    value="{{ old('link_twitter', $profiles->link_twitter) }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <input type="text" class="form-control" id="link_website"
                                    aria-describedby="link_website" name="link_website"
                                    placeholder="Link Website"
                                    value="{{ old('link_website', $profiles->link_website) }}">
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <input type="text" class="form-control" id="link_map"
                                    aria-describedby="link_map" name="link_map" placeholder="Link Alamat"
                                    value="{{ old('link_map', $profiles->link_map) }}">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Logo Ponpes</label>
                                    <img class="img-preview-logo-ponpes img-fluid mb-3 col-sm-5">
                                    <input class="form-control" type="file" id="logo_ponpes"
                                        name="logo_ponpes" onchange="previewImageLogoPonpes()">
                                </div>
                            </div>
                            <script>
                                function previewImageLogoPonpes() {
                                    const image = document.querySelector('#logo_ponpes');
                                    const imgPreview = document.querySelector('.img-preview-logo-ponpes');

                                    imgPreview.style.display = 'block';

                                    const ofReader = new FileReader();
                                    ofReader.readAsDataURL(image.files[0]);

                                    ofReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Logo Media</label>
                                    <img class="img-preview-logo-media img-fluid mb-3 col-sm-5">
                                    <input class="form-control" type="file" id="logo_media"
                                        name="logo_media" onchange="previewImageLogoMedia()">
                                </div>
                            </div>
                            <script>
                                function previewImageLogoMedia() {
                                    const image = document.querySelector('#logo_media');
                                    const imgPreview = document.querySelector('.img-preview-logo-media');

                                    imgPreview.style.display = 'block';

                                    const ofReader = new FileReader();
                                    ofReader.readAsDataURL(image.files[0]);

                                    ofReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Foto Gedung</label>
                                    <img class="img-preview-gedung img-fluid mb-3 col-sm-5">
                                    <input class="form-control" type="file" id="foto_gedung"
                                        name="foto_gedung" onchange="previewImageGedung()"
                                        value="{{ old('foto_gedung') }}">
                                </div>
                            </div>
                            <script>
                                function previewImageGedung() {
                                    const image = document.querySelector('#foto_gedung');
                                    const imgPreview = document.querySelector('.img-preview-gedung');

                                    imgPreview.style.display = 'block';

                                    const ofReader = new FileReader();
                                    ofReader.readAsDataURL(image.files[0]);

                                    ofReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Foto Pengasuh</label>
                                    <img class="img-preview-pengasuh img-fluid mb-3 col-sm-5">
                                    <input class="form-control" type="file" id="foto_pengasuh"
                                        name="foto_pengasuh" onchange="previewImagePengasuh()">
                                </div>
                            </div>
                            <script>
                                function previewImagePengasuh() {
                                    const image = document.querySelector('#foto_pengasuh');
                                    const imgPreview = document.querySelector('.img-preview-pengasuh');

                                    imgPreview.style.display = 'block';

                                    const ofReader = new FileReader();
                                    ofReader.readAsDataURL(image.files[0]);

                                    ofReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Foto Kegiatan</label>
                                    <img class="image-preview-kegiatan img-fluid mb-3 col-sm-5">
                                    <input class="form-control image-target" type="file"
                                        id="foto_kegiatan" name="foto_kegiatan"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <script>
                                function previewImage() {
                                    const image = document.querySelector('#foto_kegiatan');
                                    const imgPreview = document.querySelector('.image-preview-kegiatan');

                                    imgPreview.style.display = 'block';

                                    const ofReader = new FileReader();
                                    ofReader.readAsDataURL(image.files[0]);

                                    ofReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jumlah_santri">Jumlah Santri</label>
                                    <input type="text" class="form-control" id="jumlah_santri"
                                        name="jumlah_santri" placeholder="Jumlah Santri"
                                        value="{{ old('jumlah_santri', $profiles->jumlah_santri) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="sejarah_pesantren">Sejarah Pesantren</label>
                                    <textarea class="form-control" id="sejarah_pesantren" name="sejarah_pesantren" rows="4">{{ old('sejarah_pesantren', $profiles->sejarah_pesantren) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="quote_pengasuh">Kata Kata Muassis</label>
                                    <input type="text" class="form-control" id="quote_pengasuh"
                                        name="quote_pengasuh" placeholder="Kata Kata Muassis"
                                        value="{{ old('quote_pengasuh', $profiles->quote_pengasuh) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="link_audio_dawuh" class="form-label">Link Audio Dawuh</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Link Dawuh"
                                        name="link_audio_dawuh" id="link_audio_dawuh"
                                        aria-describedby="link_audio_dawuh"
                                        value="{{ old('link_audio_dawuh', $profiles->link_audio_dawuh) }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>