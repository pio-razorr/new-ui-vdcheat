@extends('user.layout.main')

@section('title', 'Redeem Voucher')

@section('content-body')
    <section class="row">

        {{-- CARD REDEEM VOUCHER --}}
        <div class="col-lg-6">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Informasi</h4>
                        <p class="card-text">
                            Redeem voucher disini untuk mengklaim kode voucher yang telah diberikan oleh
                            CEO.
                        </p>
                        <form class="form" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="kode-voucher" class="sr-only">Kode voucher</label>
                                    <input type="text" id="kode-voucher" class="form-control"
                                        placeholder="Masukkan kode voucher" name="LastName">
                                </div>
                            </div>
                            <div class="form-actions mt-4">
                                <button type="submit" class="btn btn-primary">Redeem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- END CARD REDEEM VOUCHER --}}

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
                                <h5 class="mb-1 text-white">Point Blank Zepetto</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">
                                Anda telah melakukan perpanjangan paket 3 hari dengan member id
                                ML-51325324
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
