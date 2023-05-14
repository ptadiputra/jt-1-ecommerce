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
                                <img src="{{ asset('pengguna/html/images/blog/foto.jpg') }}" alt="">
                            </div>
                            
                            <!-- Info panel -->
                            <div class="info-panel">
                                <ul>
                                    <li></li>
                                    <li><a></a></li>
                                    <li><a></a></li>
                                </ul>
                            </div>
                            
                            <!-- Header -->
                            <div class="header">
                                <h1>
                                    Tentang GO Iridescent
                                </h1>
                            </div>
                            
                            <!-- Item body -->
                            <div class="item-body">
                                <p>
                                    GO Iridescent adalah Grup Order yang menjual berbagai barang yang diimpor langsung
                                </p>
                                <p>
                                    dari Korea Selatan. GO Iridescent bertempat di Bandung, Indonesia yang sudah berdiri
                                </p>
                                <p>
                                    sejak Agustus 2020.
                                </p>
                                <p>
                                  
                                </p>
                                <p>
                                    
                                </p>
                                <p>
                                    
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