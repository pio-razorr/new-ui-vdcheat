@extends('user.layout.main')

@section('title', 'Ubah User')

@section('content-body')
    <section class="row">
        <div class="col-lg-6">

            <div class="row">
                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Informasi</h4>
                            <p class="card-text">
                                Cek terlebih dahulu apakah data user yang akan dirubah sudah betul atau
                                belum.
                            </p>

                            <form class="form" action="{{ '/ubah-user/' . $data->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Name</label>
                                        <input type="text" id="name" class="form-control" placeholder=""
                                            name="name" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="sr-only">Level akun</label>
                                        <input type="text" id="role" class="form-control" placeholder=""
                                            name="role" value="{{ $roleLabel }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="sr-only">Username</label>
                                        <input type="text" id="username" class="form-control"
                                            placeholder="Masukkan username" name="username" value="{{ $data->username }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="text" id="password" class="form-control"
                                            placeholder="Masukkan password" name="password" value="{{ $data->password }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp" class="sr-only">No. Handphone</label>
                                        <input type="text" id="no_hp" class="form-control"
                                            placeholder="Masukkan no hp" name="no_hp" value="{{ $data->no_hp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo" class="sr-only">Saldo</label>
                                        <input type="text" id="saldo" class="form-control"
                                            placeholder="Masukkan jumlah saldo" name="saldo" value="{{ $data->saldo }}">
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
