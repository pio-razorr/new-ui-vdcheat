@extends('user.layout.main')

@section('title', 'Tambah Status Game')

@section('content-body')
    <section class="row">
        <div class="col-lg-6">

            <div class="row">

                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    <div class="card-header">
                        <h4 class="card-title">Tambah testimoni</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            1. Ini adalah page tambah status game
                        </p>

                        <hr>

                        <form id="tambah-user-form" class="form" action="/tambah-status-game" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="nama-game" class="mb-2">Nama game</label>
                                        <input type="text" class="form-control" id="nama-game"
                                            placeholder="Masukkan nama game" name="nama_game" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="status" class="mb-2">Status game</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected disabled hidden>Silahkan pilih status game</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="tidak_aktif">Tidak aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions mt-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
