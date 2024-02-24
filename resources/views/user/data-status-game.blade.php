@extends('user.layout.main')

@section('title', 'Data Status Game')

@section('content-body')
    <section class="row">
        <div class="col-12">

            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Data Status Game</h4>
                        <a href="{{ route('tambah-status-game.create') }}" class="btn btn-outline-primary">Tambah data</a>
                    </div>
                    <div class="card-body">
                        @if ($game->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped mb-0" id="data-testimoni">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Game</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($game as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nama_game }}</td>
                                                <td>
                                                    @if ($data->status === 'aktif')
                                                        <span class="badge bg-success">AKTIF</span>
                                                    @elseif ($data->status === 'tidak_aktif')
                                                        <span class="badge bg-danger">MAINTENANCE</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ '/data-status-game/' . $data->id . '/edit' }}"
                                                            class="btn icon btn-sm btn-primary me-2">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <form action="{{ '/data-status-game/' . $data->id }}" method="POST"
                                                            class="delete-form">
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
