@extends('user.layout.main')

@section('title', 'Ubah Serial')

@section('content-body')
    <section class="row">
        <div class="col-lg-6">

            <div class="row">
                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Informasi</h4>
                            <p class="card-text">
                                Cek terlebih dahulu apakah data member yang akan dirubah sudah betul atau
                                belum.
                            </p>

                            <form class="form" action="{{ '/ubah-serial/' . $data->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Name</label>
                                        <input type="text" id="name" class="form-control" placeholder=""
                                            name="name" value="{{ $data->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="game" class="sr-only">Game</label>
                                        <input type="text" id="game" class="form-control" placeholder=""
                                            name="game" value="{{ $data->game }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="serial" class="sr-only">Serial</label>
                                        <input type="text" id="serial" class="form-control"
                                            placeholder="Masukkan serial" name="serial" value="{{ $data->serial }}">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary me-1">Ubah</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
