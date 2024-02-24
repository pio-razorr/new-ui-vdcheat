@extends('landing-page.layout.main')

@section('content')
    {{--  Gallery Section  --}}
    <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Testimoni</h2>
                <p>Beberapa testimoni pembelian</p>
            </div>

            <div class="row g-0" data-aos="fade-left">
                @foreach ($testimonis as $testimoni)
                    <div class="col-lg-2 col-4 mb-3">
                        <div class="gallery-item text-center" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('/storage/posts/' . $testimoni->image) }}" class="gallery-lightbox"
                                data-description="{{ $testimoni->deskripsi }}">
                                <img src="{{ asset('/storage/posts/' . $testimoni->image) }}" alt=""
                                    class="img-fluid rounded-3" style="width: 50%">
                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $testimonis->links() }}
            </div>
        </div>
    </section>
    {{-- End Gallery Section --}}
@endsection
