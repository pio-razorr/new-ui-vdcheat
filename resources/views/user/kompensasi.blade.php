@extends('user.layout.main')

@section('title', 'Data Member')

@section('content-body')
    <section class="row">

        {{-- CARD KOMPENSASI DURASI --}}
        <div class="col-lg-6">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Kompensasi durasi</h4>
                        <p class="card-text">
                            Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon teliti
                            sebelum melakukan kompensasi.
                        </p>
                        <form class="form" action="#" method="post">
                            <div class="form-body">

                                <fieldset class="form-group">
                                    <label for="game">Game</label>
                                    <select class="form-select" id="game">
                                        <option selected>Pilih</option>
                                        <option>Mobile Legends</option>
                                        <option>Point Blank Zepetto</option>
                                        <option>Point Blank Private Server</option>
                                    </select>
                                </fieldset>

                                <div class="form-group">
                                    <label for="kompensasi">Durasi kompensasi</label>
                                    <input type="number" class="form-control" id="kompensasi"
                                        placeholder="Masukkan durasi kompensasi">
                                </div>

                            </div>
                            <div class="form-actions mt-4">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- END CARD KOMPENSASI DURASI --}}

        {{-- RIWAYAT TRANSAKSI --}}
        {{-- <div class="col-lg-6">
        <div class="card" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-header">
                <h4 class="card-title">Riwayat terakhir</h4>
            </div>
            <div class="card-content">
                <div class="card-body pt-0">
                    <div class="list-group">

                        <p class="text-center">Tidak ada riwayat.</p>

                        <a href="#" class="list-group-item list-group-item-action active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 text-white">
                                    {{ $authUser->name }}</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">
                                {{ $authUser->name }} telah memberikan kompensasi durasi Point Blank Zepetto dengan durasi 2 Hari.
                            </p>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        {{-- END RIWAYAT TRANSAKSI --}}

    </section>
@endsection
