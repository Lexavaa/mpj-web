<x-AdminLayout title="Data Pengguna">
    <x-AlertScriptMolecules/>
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
                                <div class="form-group col-md-3">
                                    <label for="nama_media">Nama Media</label>
                                    <input type="text" class="form-control" id="nama_media" name="nama_media"
                                        placeholder="Nama Media" value="{{ old('nama_media', $profiles_row->nama_media) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                        placeholder="Instagram" value="{{ old('instagram', $profiles_row->instagram) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tiktok">Tik-Tok</label>
                                    <input type="text" class="form-control" id="tiktok" name="tiktok"
                                        placeholder="Tik-Tok" value="{{ old('tiktok', $profiles_row->tiktok) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube"
                                        placeholder="Youtube" value="{{ old('youtube', $profiles_row->youtube) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="Facebook" value="{{ old('facebook', $profiles_row->facebook) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                        placeholder="Twitter" value="{{ old('twitter', $profiles_row->twitter) }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website"
                                        placeholder="Website" value="{{ old('website', $profiles_row->website) }}">
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <label for="link_map">Link Map</label>
                                    <input type="text" class="form-control" id="link_map" name="link_map"
                                        placeholder="https://" value="{{ old('link_map', $profiles_row->link_map) }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Logo Ponpes</label>
                                        <img class="img-preview-logo-ponpes img-fluid mb-3 col-sm-5">
                                        <input class="form-control" type="file" id="logo_ponpes" name="logo_ponpes"
                                            onchange="previewImageLogoPonpes()">
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
                                        <input class="form-control" type="file" id="logo_media" name="logo_media"
                                            onchange="previewImageLogoMedia()">
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
                                        <input class="form-control" type="file" id="foto_gedung" name="foto_gedung"
                                            onchange="previewImageGedung()" value="{{ old('foto_gedung') }}">
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
                                        <label for="formFile" class="form-label">Foto Kegiatan</label>
                                        <img class="image-preview-kegiatan img-fluid mb-3 col-sm-5">
                                        <input class="form-control image-target" type="file" id="foto_kegiatan"
                                            name="foto_kegiatan" onchange="previewImage()">
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
                                <div class="col-md-12">
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sejarah_pesantren">Sejarah Pesantren</label>
                                        <textarea class="form-control" id="sejarah_pesantren" name="sejarah_pesantren" rows="4">{{ old('sejarah_pesantren', $profiles_row->sejarah_pesantren) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="program_pesantren">Program Pesantren</label>
                                        <textarea class="form-control" id="program_pesantren" name="program_pesantren" rows="4">{{ old('program_pesantren', $profiles_row->program_pesantren) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="quote_pengasuh">Kata Kata Muassis</label>
                                        <input type="text" class="form-control" id="quote_pengasuh"
                                            name="quote_pengasuh" placeholder="Kata Kata Muassis"
                                            value="{{ old('quote_pengasuh', $profiles_row->quote_pengasuh) }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="jumlah_santri">Jumlah Santri</label>
                                        <input type="text" class="form-control" id="jumlah_santri"
                                            name="jumlah_santri" placeholder="12"
                                            value="{{ old('jumlah_santri', $profiles_row->jumlah_santri) }}">
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
</x-AdminLayout>
