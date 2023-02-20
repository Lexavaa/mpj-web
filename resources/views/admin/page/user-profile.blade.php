<div class="row">
    <div class="card bg-dark">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{ asset('storage/' . $profiles_row->logo_ponpes) }}" alt=""
                        style="border-radius: 23px;">
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <h4>{{ $profiles_row->nama_pesantren }} - {{ $profiles_row->regional->nama }}</h4>
                        <p>{{ $profiles_row->alamat_lengkap }}</p>
                        <br>
                        <button onclick="window.location.href='{{ $profiles_row->link_instagram }}'" type="button"
                            style="background-color:transparent; border:none; " data-toggle="tooltip"
                            data-placement="top" title="{{ $profiles_row->instagram }}">
                            <span class="fa fa-instagram text-light m-2"></span>
                        </button>
                        <button onclick="window.location.href='{{ $profiles_row->link_facebook }}'" type="button"
                            style="background-color:transparent; border:none; " data-toggle="tooltip"
                            data-placement="top" title="{{ $profiles_row->facebook }}">
                            <span class="fa fa-facebook text-primary m-2"></span>
                        </button>
                        <button onclick="window.location.href='{{ $profiles_row->link_youtube }}'" type="button"
                            style="background-color:transparent; border:none; " data-toggle="tooltip"
                            data-placement="top" title="{{ $profiles_row->youtube }}">
                            <span class="fa fa-youtube text-danger m-2"></span>
                        </button>
                        <button onclick="window.location.href='{{ $profiles_row->link_tiktok }}'" type="button"
                            style="background-color:transparent; border:none; " data-toggle="tooltip"
                            data-placement="top" title="{{ $profiles_row->tiktok }}">
                            <span class="fa-brands fa-tiktok text-light m-2"></span>
                        </button>
                        <button onclick="window.location.href='{{ $profiles_row->link_website }}'" type="button"
                            style="background-color:transparent; border:none; " data-toggle="tooltip"
                            data-placement="top" title="{{ $profiles_row->website }}">
                            <span class="fa fa-globe text-light m-2"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center text-light">
                    <ul>
                        <div class="card">
                            <div class="card-body text-dark">
                                <label>Sejarah Pesantren</label>
                                <li>{{ $profiles_row->sejarah_pesantren }}</li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="clips">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/' . $profiles_row->foto_pengasuh) }}"
                                            alt="" style="border-radius: 23px;">
                                        <button type="button" style="border: none; background-color:transparent;"
                                            data-toggle="modal" data-target="#exampleModal">
                                            <a><i class="fa fa-quote-left"></i></a>
                                        </button>
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $profiles_row->nama_pengasuh }}</h4>
                                    </div>
                                </div>
                            </div>
                            {{-- MODAL IDEA --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="exampleModalLabel">
                                                {{ $profiles_row->nama_pengasuh }} Said
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            " {{ $profiles_row->quote_pengasuh }} "
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL IDEA --}}
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/' . $profiles_row->logo_media) }}" alt=""
                                            style="border-radius: 23px;">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $profiles_row->nama_media }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/' . $profiles_row->foto_gedung) }}" alt=""
                                            style="border-radius: 23px;">
                                    </div>
                                    <div class="down-content">
                                        <h4>Foto Gedung</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/' . $profiles_row->foto_kegiatan) }}"
                                            alt="" style="border-radius: 23px;">
                                    </div>
                                    <div class="down-content">
                                        <h4>Foto Kegiatan</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
