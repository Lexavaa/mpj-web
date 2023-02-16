@extends('user.layouts.main')
@section('title', 'Beranda')
@section('content')
    @include('alert')
    <!-- page Hero/header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">{{ $desc }}</span>
                <p class="down"><span class="text-slider-items" style="display: none;">Salam khidmah...,✊,Salam militan...,✊
                    </span><span class="text-slider"></span></p>
            </h1>
            <p class="header-subtitle">Keterbatasan melahirkan militansi.<a style="color: rgb(222, 28, 167);"
                    href="assets/imgs/chuaks.png">[27:20]</a></p>
            <button class="btn btn-success" onclick="window.location.href='/form-mpj'">Join Us!</button>
        </div>
    </header>

    <body id="section_1">

        <!-- Page Penjelasan & Count -->
        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="assets/images/avatar/mpj-crew.jpg" class="custom-text-box-image img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Profil MPJ
                            </h2>

                            <h5 class="mb-3">"Salam Khidmah Salam Militan"</h5>

                            <p class="mb-0">


                                Media Pondok Jatim lahir pada tanggal 27 Pebruari 2020. Ada beberapa tim media pondok
                                pesantren yang melahirkan ide ini: Media Ponpes Sidogiri, Sabilurrosyad Gasek, Al-Falah
                                Ploso, Lirboyo, Zainul Hasan Genggong, Darussalam Blokagung, Menara Al-Fattah Tulungagung,
                                dan Langitan. Komunitas ini lahir dari keresahan-keresahan media pondok pesantren: di tengah
                                perkembangan kehidupan digital yang sangat pesat, pondok pesantren justru kurang mampu untuk
                                mendigitalisasi dakwah islam.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Visi & Misi MPJ</h5>

                                    <p>Visi Pondok Jatim adalah Terwujudnya sinergi antar media dakwah pondok pesantren ala
                                        ahlussunnah wal jamaah an-nahdliyah
                                        Misi Pondok Jatim adalah </p>
                                    <li>Menjadi pusat media dakwah dan komunikasi antar pondok pesantren jawa timur</li>
                                    <li>Mengembangkan profesionalitas media pondok pesantren jawa timur</li>
                                    <li>Mendigitalisasi dakwah pondok pesantren jawa timur</li>
                                    <li>Kolaborasi antar-pesantren maupun dengan non-pesantren yang memiliki visi sejalan
                                    </li>
                                    <li>Profiling Kyai dan Pesantren jawa timur di dunia maya</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Visual program unggulan-->
        <section class="section-padding section-bg">
            <div id="pricing" class="pricing-tables">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="section-heading">
                                <h4> Program<em> Unggulan</em></h4>
                                <img src="assets/images/visual/heading-line-dec.png" alt="">
                                <p>komunitas ini bertekad untuk mengembangkan kemampuan berdakwah pesantren. Tidak hanya
                                    dengan mentransfer ilmu di kelas, tetapi juga bagaimana agar konten islam yang pondok
                                    pesantren miliki bisa ditangkap oleh masyarakat luas.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-item-pro">
                                <span class="price text-dark">1</span>
                                <h4>Sinergi Dan Kolaborasi</h4>
                                <div class="icon">
                                    <img src="assets/images/visual/pricing-table-01.png" alt="">
                                </div>
                                <p>
                                    Menjalin silaturahmi, kepercayaan, komunikasi yang efektif, feedback yang cepat, dan
                                    kreativitas antar media pondok pesantren se-Jawa Timur khususnya dengan berbagai pihak
                                    terkait terutama Masyayikh, Gawagis, Nawaning, & pihak lainnya. Bertekad untuk berjuang
                                    mengembangkan kemampuan santri berdakwah melalui sowan, kopdar, & kolaborasi.
                                </p>
                                <img src="assets/images/visual/heading-line-dec.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-item-pro">
                                <span class="price text-dark">2</span>
                                <h4>Madrasah Media</h4>
                                <div class="icon">
                                    <img src="assets/images/visual/pricing-table-01.png" alt="">
                                </div>
                                <p>
                                    MPJ adalah wadah dari semua jenis kegiatan pelatihan baik itu berupa webinar, ataupun
                                    camp/kelas. Didirikan MMPJ bertujuan untuk meningkatkan skill sumber daya manusia
                                    (santri) di bidang media dalam berdakwah kemudian berkhidmah melalui konten dari
                                    pesantren. Madrasah Media Pondok Jawa Timur ditargetkan memiliki 7 kelas media, yakni
                                    mulai kelas manajemen media, jurnalistik, broadcasting, website, design, fotografi, dan
                                    cinematografi.
                                </p>
                                <img src="assets/images/visual/heading-line-dec.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-item-pro">
                                <span class="price text-dark">3</span>
                                <h4>Festival MPJ</h4>
                                <div class="icon">
                                    <img src="assets/images/visual/pricing-table-01.png" alt="">
                                </div>
                                <p>
                                    MPJ Fest adalah event tahunan terbesar yang paling bergengsi yang dilaksanakan oleh
                                    Komunitas Media Pondok Jawa Timur, yang acaranya berisi festival berbagai kompetisi
                                    terkait skill multimedia, mulai dari film pendek, fotografi, jurnalistik, aransemen
                                    musik, dll. MPJ Fest juga sebagai ajang kopdar Multaqo dan Halaqah akbar seluruh
                                    delegasi anggota media pondok pesantren Jawa Timur untuk membuat kesepakatan bersama
                                    sesuai visi dan misi komunitas MPJ tersebut.
                                </p>
                                <img src="assets/images/visual/heading-line-dec.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Gallery-->
        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Gallery MPJ</h4>
                            <img src="assets/images/visual/heading-line-dec.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="assets/images/gallery/img-1.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Kopdar MPJ
                                    </a>
                                </h5>

                                <p class="mb-0">Kopdar MPJ di pwnu jawa timur</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="assets/images/gallery/img-2.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Halal Bihalal MPJ
                                    </a>
                                </h5>
                                <p class="mb-0">Bertempat di ponpes MHI Jember 2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="assets/images/gallery/img-3.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Sowan Kyai
                                    </a>
                                </h5>

                                <p class="mb-0">Dengan Gus Ma'sum Faqih Langitan</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Page Count-->
        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Database Komunitas Kami</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="assets/images/icons/hands.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Regional</p>
                                <h3>199+</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="assets/images/icons/heart.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Media Pesantren</p>
                                <h3>199+</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="assets/images/icons/receive.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Crew Media</p>
                                <h3>199+</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="assets/images/icons/scholarship.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text">Total Event</p>
                                <h3>199+</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--Page Sign Up-->
        <section class="section-padding section-bg" id="join_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 pt-5 ">
                        <img src="assets/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body">
                            <h4 class="text-dark mt-lg-3 mb-lg-3">Tentang Khodim Militan</h4>

                            <p class="text-dark">Khodim Militan adalah Santri yang berkhidmah di jalur multimedia pondok
                                pesantren dengan berbagai keterbatasan yang dimiliki akan tetapi berjuang sekuat tenaga agar
                                bisa menghasilkan konten dari pesantren.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 mx-auto">
                        <form class="custom-form contact-form" action="/form-mpj" method="POST" role="form">
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

        <!--Page Blog-->
        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Berita Terbaru</h2>
                        <img src="assets/images/visual/heading-line-dec.png" alt="">
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="assets/images/news/web-latest.jpg" class="news-image img-fluid"
                                        alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 12, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Bangkitkan Dunia
                                            Perfilman Pesantren, Media Pondok Jatim Sukses Gelar Perkemahan Tarbiyah
                                            Film</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                        Professional charity theme based on Bootstrap</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="assets/images/news/atas.jpeg" class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="assets/images/news/bawah.jpeg" class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 24, 2036
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Page Testimoni-->
        <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Testimoni</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Yang penting yakin, optimis, percaya diri dan semangat!
                                        </h4>
                                        <small class="carousel-name"><span class="carousel-name-title">Gus Reza</small>
                                    </div>
                                </div>
                                {{--  <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                            Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                            Entreprenuer</small>
                                    </div>
                                </div> --}}

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="assets/images/avatar/gus.jpeg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Page Kritik & Saran-->
        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Pusat Informasi </h2>

                            <div class="contact-info">

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Malang
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="https://wa.me/6285655600999?text=Assalamualaikum+cak+min">
                                        +6285655600999
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        mediapondokjatim@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                        <form class="custom-form contact-form" action="mailto:redaktur.mediapondokjatim@gmail.com"
                            method="post" role="form">

                            <h2>Kirim Karya Tulisan Anda</h2>
                            <button type="submit" class="form-control">Klik Disini</button>
                        </form>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Kritik dan Saran</h2>

                            <p class="mb-4">Atau anda bisa menghubungi email :
                                <a href="#">mediapondokjatim@gmail.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Nama" required>
                                </div>
                            </div>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Kritik dan Saran"></textarea>

                            <button type="submit" class="form-control">Kirim</button>
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
            $(document).ready(function() {
                $('.form-check-input').click(function() {
                    if (flag) {
                        flag = false;
                        $('.hide').show();
                        $('.show').hide();
                    } else {
                        flag = true;
                        $('.show').hide();
                        $('.show').show();
                        $('.hide').hide();
                    }
                });
            });
        </script>
    @endsection
