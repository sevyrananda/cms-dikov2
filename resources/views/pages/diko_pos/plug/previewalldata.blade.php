@extends('layout3.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color: #fff;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('HeroBiz/assets/img/DIKO TRANSPARANT.png') }}" class="img-fluid animated" style="width: 370px;">
            <h2>Selamat Datang di <span>DIKO POS</span></h2>
            <p>Kelola Pinjaman dan Laporan Keuangan dengan Lebih Mudah!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto" style="background-color: #144B9A;">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"
                    style="color: #144B9A;"><i class="bi bi-play-circle" style="color: #144B9A;"></i><span>Watch
                        Video</span></a>
            </div>
        </div>
    </section><!-- End Clients Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="background-color: #485664; margin-top: 10px;">
            <div class="container" data-aos="fade-up">
                <div class="flex" style="background-color: #485664;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('HeroBiz/mockup-1.png') }}" class="img-fluid animated fill-shadow"
                                alt="Gambar DIKO POS">
                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
                            <ul class="list-group" style="color: #fff;">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Pelayanan terbaik dengan kejujuran dan profesionalisme dalam setiap
                                        transaksi.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Layanan simpan pinjam yang terintegrasi dengan sistem inventori, proyek, dan
                                        penggajian.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Keamanan operasional dengan hak akses menggunakan fitur tertentu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Fitur Diko POS</h2>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    @foreach ($posts as $post)
                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <h4>{{ $post->judul_icon1 }}</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->


                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Kemudahan Akses Pembayaran</h3>
                                <p class="fst-italic">
                                    Anggota koperasi untuk melakukan pembayaran atau transaksi sekali bayar dengan mudah.
                                    Ini dapat mencakup pembelian saham, pembayaran pinjaman, atau pembelian produk dan
                                    layanan lainnya yang ditawarkan oleh koperasi.
                                    Memungkinkan anggota untuk melihat riwayat transaksi mereka, sehingga mereka dapat
                                    melacak semua pembayaran dan transaksi yang telah mereka lakukan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik
                        kami akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat,
                        Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <!-- <img src="{{ url('HeroBiz') }}/assets/img/register.jpg" class="img-fluid" alt=""> -->
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Master</h3>
                                </a>
                                <p> Mengelola data-data inti yang mencakup informasi produk atau layanan yang ditawarkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos3.pngg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos3.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembelian</h3>
                                </a>
                                <p>Mencatat tahapan penting dalam menghasilkan pendapatan dan memastikan pelanggan
                                    mendapatkan layanan yang mereka inginkan dengan cara aman dan efisien.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Penjualan</h3>
                                </a>
                                <p>Membantu menyimpan riwayat penjualan pengguna yang memungkinkan mereka untuk melihat
                                    stock yang telah terjual.</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Transaksi Stock</h3>
                                </a>
                                <p>Mencatat pinjaman nasabah, menghitung total tabungan nasabah dan keterangan mutasi
                                    anggota</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembukuan</h3>
                                </a>
                                <p>Membantu bisnis dalam melacak pendapatan, biaya, laba, dan arus kas</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->



<!-- HTML Modal Structure -->
@foreach ($posts as $index => $post)
<div class="modal fade" id="modal{{ $index + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle{{ $index + 1 }}"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalContent{{ $index + 1 }}"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach



                    <!-- HTML -->
<section id="plugin-menu" class="plugin-menu">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Our Plugin Menu</h2>
        </div>

        <div id="carouselExample" class="carousel slide text-center" data-ride="carousel">
            <div class="carousel-inner">
                @php $isFirstSlide = true; @endphp
                @foreach ($posts as $index => $post)
                    <div class="carousel-item @if($isFirstSlide) active @endif">
                        <div class="row">
                            <div class="col-sm">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->judul }}"
                                        class="small-logo mx-auto p-2 image-trigger"
                                        data-modal="#modal{{ $index + 1 }}"
                                        data-title="{{ $post->judul }}"
                                        data-content="{{ $post->isi }}">
                                @else
                                    No Image
                                @endif
                            </div>
                        </div>
                    </div>
                    @php $isFirstSlide = false; @endphp
                @endforeach
            </div>

            <!-- Previous and Next Buttons with Adjusted Padding -->
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"
                style="color: black; left: -10%;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next"
                style="color: black; right: -10%;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            </a>
        </div>
    </div>
</section>

<!-- Modal Popup -->
@foreach ($posts as $index => $post)
<div class="modal fade" id="modal{{ $index + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle{{ $index + 1 }}"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalContent{{ $index + 1 }}"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Menggunakan versi yang umum digunakan -->
<!-- Menggunakan versi yang umum digunakan (tanpa atribut integrity) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!-- Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to set the size of the logos
        function setLogoSize(logoClass, width, height) {
            const logos = document.querySelectorAll(logoClass);
            logos.forEach((logo) => {
                logo.style.width = width;
                logo.style.height = height;
            });
        }

        // Set the size of the logos (you can adjust the width and height values)
        setLogoSize(".small-logo", "100px", "100px");

        // Function to display the modal with the specified content
        function showModal(modalId, title, content) {
            var modal = new bootstrap.Modal(document.getElementById(modalId));

            // Tambahkan kelas show secara manual
            var modalElement = document.getElementById(modalId);
            modalElement.classList.add('show');

            document.getElementById('modalTitle' + modalId.slice(-1)).innerText = title;
            document.getElementById('modalContent' + modalId.slice(-1)).innerText = content;

            modal.show();
        }

        // Add click event listeners for each logo
        @foreach ($posts as $index => $post)
            document.querySelector(".col-sm:nth-child({{ $index + 1 }}) .small-logo").addEventListener("click", function () {
                showModal("modal{{ $index + 1 }}", "{{ $post->judul }}", "{{ $post->isi }}");
            });
        @endforeach
    });
</script>

        </section><!-- End Services Section -->
    @endsection
