@extends('user.layout.main')

@section('title', 'Peraturan')

@section('content-body')
    <section class="row">

        {{-- CARD PERATURAN --}}
        <div class="col-12">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Peraturan untuk para pengguna</h4>
                        <p class="card-text">
                            1. Dilarang memainkan harga.
                        </p>
                        <p class="card-text">
                            2. Admin dilarang transfer saldo lebih dari 2 juta kepada resseler, jika ketahuan maka akan
                            diminta keterangan.
                        </p>
                        <p class="card-text">
                            3. Dilarang melakukan tindak penipuan.
                        </p>
                        <p class="card-text">
                            4. Dilarang menculik member sesama pengguna, baik CEO, Admin maupun Resseler.
                        </p>
                        <p class="card-text">
                            5. Dilarang memperjualkan akun pengguna kepada orang lain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- END CARD PERATURAN --}}

    </section>
@endsection
