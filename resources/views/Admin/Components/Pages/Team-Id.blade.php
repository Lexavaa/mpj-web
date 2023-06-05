<x-AdminLayout title="Team Card">
    <x-AlertScriptMolecules />
    <link rel="stylesheet" href="{{ asset('public-assets/css/team-card.css') }}">
    @foreach ($crew as $crews)
        <div class="container mt-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-7">
                    <div class="container">
                        <div class="card">
                            <div class="imgBx">
                                <img src="{{ asset('storage/' . $crews->foto_kru) }}">
                            </div>
                            <div class="contentBx">
                                <h2 class="mb-3">{{ $crews->nama_kru }}</h2>
                                {{ $crews->nomor_id_kru }}

                                <div class="color">
                                    <h3>{{ $crews->keahlian_kru }}</h3>
                                </div>
                                {{-- <div style="margin-top:15px !important;"> --}}
                                    {{ $qrCode }}
                                {{-- </div> --}}
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-AdminLayout>
