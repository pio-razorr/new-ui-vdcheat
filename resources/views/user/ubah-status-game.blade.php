@extends('user.layout.main')

@section('title', 'Ubah Status Game')

@section('content-head')
    <div class="row" data-aos="zoom-in">
        <div class="col-6">
            <h3>Status game</h3>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <div class="user-menu d-flex">
                <div class="user-name text-end me-3">
                    <h6 class="mb-0 text-gray-600">{{ $authUser->name }}</h6>
                    <p class="mb-0 text-sm text-gray-600">
                        @if ($authUser->role == 'resseler' && $authUser->saldo <= 10000000)
                            Resseler
                        @elseif ($authUser->role == 'resseler' && $authUser->saldo >= 10000000)
                            Resseler VIP
                        @elseif ($authUser->role == 'admin')
                            Admin
                        @elseif ($authUser->role == 'ceo')
                            CEO
                        @endif
                    </p>
                </div>
                <div class="user-img d-flex align-items-center">
                    <div class="avatar avatar-md">
                        <img src={{ asset('assets-pio/img/alvin-cheat.webp') }} />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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

                        <form id="tambah-user-form" class="form" action="{{ '/ubah-status-game/' . $game->id }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="nama-game" class="mb-2">Nama game</label>
                                        <input type="text" class="form-control" id="nama-game"
                                            placeholder="Masukkan nama game" name="nama_game" value="{{ $game->nama_game }}"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="status" class="mb-2">Status game</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected disabled hidden> Pilih status </option>
                                            <option value="aktif" @if ($game->status === 'aktif') selected @endif>Aktif
                                            </option>
                                            <option value="tidak_aktif" @if ($game->status === 'tidak_aktif') selected @endif>
                                                Tidak aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions mt-3">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
