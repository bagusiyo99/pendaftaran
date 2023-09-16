<div>
    <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
</div>


{{-- <div class="main">
    <h3 class="heading">{{ isset($title) ? $title : '' }}</h3>
</div> --}}

<div class="atur ">
    @foreach ($guru as $item)
        <div class="card-jurusan" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4500">
            <div class="card-image">
                <a href="#">
                    <img src="/{{ $item->gambar }}">
                </a>
            </div>
            <div class="card-description">
                <p> {!! Str::limit($item->judul, 25) !!} </p>
                <p>{!! Str::limit($item->deskripsi, 80) !!}</p>
                <a href="/detail/{{ $item->id }}">Detail</a>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
    <!-- Add pagination links here if needed -->
    {{ $guru->links() }}
</div>
