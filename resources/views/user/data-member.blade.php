@extends('user.layout.main')

@section('title', 'Data Member')

@section('content-body')
    <section class="row">
        <div class="col-12">

            <div class="row">
                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    {{-- <div class="card-header">
                    <h5 class="card-title">Data User</h5>
                </div> --}}
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Member Serial</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false" tabindex="-1">Member Non Serial</a>
                            </li>
                        </ul>
                        <div class="tab-content my-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                {{-- MEMBER SERIAL --}}
                                @php
                                    $SerialMembers = $members->where('game', '!=', 'Mobile Legends');
                                    $SerialNo = 1;
                                @endphp
                                @if (count($SerialMembers) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" id="member-serial">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Game</th>
                                                    <th>Member Key</th>
                                                    <th>Nama</th>
                                                    <th>Serial</th>
                                                    <th>Status</th>
                                                    <th>Tgl. Transaksi</th>
                                                    <th>Tgl. Expired</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($members as $member)
                                                    @if ($member->game != 'Mobile Legends')
                                                        <tr>
                                                            <td>{{ $SerialNo++ }}</td>
                                                            <td>{{ $member->game }}</td>
                                                            <td>{{ $member->member_id }}</td>
                                                            <td>{{ $member->name }}</td>
                                                            <td>{{ $member->serial }}</td>
                                                            <td>
                                                                @if (strtotime($member->expired_date) < time())
                                                                    <span class="badge bg-danger">TIDAK
                                                                        AKTIF</span>
                                                                @else
                                                                    <span class="badge bg-success">AKTIF</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $member->created_at }}</td>
                                                            <td>{{ $member->expired_date }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="{{ '/ubah-serial/' . $member->id . '/edit' }}"
                                                                        class="btn icon btn-sm btn-primary me-2">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </a>
                                                                    <form action="{{ '/data-member/' . $member->id }}"
                                                                        method="POST" class="delete-member-form">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn icon btn-sm btn-danger">
                                                                            <i class="bi bi-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h1>Data kosong</h1>
                                @endif
                                {{-- END MEMBER SERIAL --}}
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                {{-- MEMBER NON SERIAL --}}
                                @php
                                    $nonSerialMembers = $members->where('game', 'Mobile Legends');
                                    $nonSerialNo = 1;
                                @endphp
                                @if (count($nonSerialMembers) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" id="member-non-serial">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Game</th>
                                                    <th>Member Key</th>
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                    <th>Tgl. Transaksi</th>
                                                    <th>Tgl. Expired</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($members->where('game', 'Mobile Legends') as $member)
                                                    <tr>
                                                        <td>{{ $nonSerialNo++ }}</td>
                                                        <td>{{ $member->game }}</td>
                                                        <td>{{ $member->member_id }}</td>
                                                        <td>{{ $member->name }}</td>
                                                        <td>
                                                            @if (strtotime($member->expired_date) < time())
                                                                <span class="badge bg-danger">TIDAK
                                                                    AKTIF</span>
                                                            @else
                                                                <span class="badge bg-success">AKTIF</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $member->created_at }}</td>
                                                        <td>{{ $member->expired_date }}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <form action="{{ '/data-member/' . $member->id }}"
                                                                    method="POST" class="delete-member-form">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn icon btn-sm btn-danger">
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
                                {{-- END MEMBER NON SERIAL --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
