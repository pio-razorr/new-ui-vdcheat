@extends('user.layout.main')

@section('title', 'Data Testimoni')

@section('content-body')
    <section class="row">
        <div class="col-12">

            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Data Testimoni</h4>
                        <a href="{{ route('tambah-testimoni.create') }}" class="btn btn-outline-primary">Tambah data</a>
                    </div>
                    <div class="card-body">
                        @if ($testimonis->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped mb-0" id="data-testimoni">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonis as $testimoni)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('/storage/posts/' . $testimoni->image) }}"
                                                        class="img-fluid rounded-3" width="100">
                                                </td>
                                                <td>{{ $testimoni->deskripsi }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ '/data-testimoni/' . $testimoni->id . '/edit' }}"
                                                            class="btn icon btn-sm btn-primary me-2">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <form action="{{ '/data-testimoni/' . $testimoni->id }}"
                                                            method="POST" class="delete-testimoni-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn icon btn-sm btn-danger"
                                                                data-confirm-delete="true">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <h1>Data kosong</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
