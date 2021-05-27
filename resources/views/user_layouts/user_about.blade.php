@extends('user_layouts.user_master')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    
                    <!--
                    MAIN INFO
                    =============================================== -->
                    <div class="row blog-item-page">
                        
                        <div class="col-md-12">
                            
                            <!-- Image -->
                            <div class="image">
                                <img src="{{ asset('pengguna/html/images/blog/img-01-big.jpg') }}" alt="">
                            </div>
                            
                            <!-- Info panel -->
                            <div class="info-panel">
                                <ul>
                                    <li>27 Mei 2020</li>
                                    <li><a>Anggota Kelompok</a></li>
                                    <li><a>Budhi</a></li>
                                </ul>
                            </div>
                            
                            <!-- Header -->
                            <div class="header">
                                <h1>
                                    Tentang Dapur Online
                                </h1>
                            </div>
                            
                            <!-- Item body -->
                            <div class="item-body">
                                <p>
                                    1. Ida Bagus Dwiweka Naratama (1905551080)
                                    Membuat modul 4 & 5 dengan Marvell Hasea Tampubolon (1905551063)
                                </p>
                                <p>
                                    2. I Gede Budhi Arta Kusuma Giri (1905551075)
                                    Membuat modul 2 & 3 dengan Christopher Edwin Sirait (1905551166)
                                </p>
                                <p>
                                    3. Marvell Hasea Tampubolon (1905551063)
                                    Membuat modul 4 & 5 dengan Ida Bagus Dwiweka Naratama (1905551080)
                                </p>
                                <p>
                                    4. Meita Dianty (1905551011)
                                    Membuat modul 1 & Laporan dengan Putu Ary Silvia Maharani (1905551013)
                                </p>
                                <p>
                                    5. Putu Ary Silvia Maharani (1905551013)
                                    Membuat modul 1 & Laporan dengan Meita Dianty (1905551011)
                                </p>
                                <p>
                                    6. Putu Ary Silvia Maharani (1905551013)
                                    Membuat modul 1 & Laporan dengan Meita Dianty (1905551011)
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END: MAIN INFO -->
                </div>

                <!-- Asside -->
                <div class="visible-lg col-md-4 col-lg-3 asside">

                    <!-- Asside nav -->
                    <div class="asside-nav bg-white hidden-xs">
                        <div class="header text-uppercase text-white bg-blue">
                            Category
                        </div>

                        <ul class="nav-vrt bg-white">
                            @foreach ($data_kategori as $listkategori)
                            <li class="active">
                                <a href="/kategori/{{ $listkategori->id }}" class="btn-material">{{ $listkategori->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- / Asside nav -->
                </div><!-- ./ Asside -->
            </div>
        </div>
    </div>
</div>
@endsection