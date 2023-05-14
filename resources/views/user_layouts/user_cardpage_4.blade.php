@extends('user_layouts.user_master')
@section('content')
<div class="container">
    <!-- 
    STEPS
    =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12">
            
            <ul class="steps row">
                <li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        1
                    </div>
                    <span>
                        Confirm 
                    </span>
                    Shopping cart
                    
                    <span class="dir-icon hidden-xs">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        2
                    </div>
                    <span>
                        Checkout
                    </span>
                    your address

                    <span class="dir-icon">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        3
                    </div>
                    <span>
                        Confirmation
                    </span>
                    proof of payment
                    
                    <span class="dir-icon hidden-sm hidden-md">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                    <div class="icon number bg-blue">
                        4
                    </div>
                    <span>
                        Confirm
                    </span>
                    your order
                </li>
            </ul>
        </div>
    </div>
    <!-- END: STEPS -->

    <!-- 
    CONTENT
    =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12 col-md-12 col-lg-12 get-height">
            <div class="sdw-block">
                <div class="wrap bg-white">
                    <!-- Authirize form -->
                    <div class="row auth-form">
                        <!-- Header & nav -->
                        <div class="col-md-12">
    
                            <!-- Header -->
                            <h1 class="header text-uppercase text-center">
                                Tracking Barang Pesanan
                            </h1>
                            <!-- 
                            Progres barang
                            =============================================== -->
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    {{-- <h1 class="text-uppercase text-blue" style="font-weight: bolder; padding-bottom: 70px; font-size: 100px">
                                        Transaksi Berhasil
                                    </h1> --}}
                                    @if ($data_transaksi->status == 'canceled' || $data_transaksi->status == 'expired' || $data_transaksi->status == 'verified' || $data_transaksi->status == 'unverified' || $data_transaksi->status == 'delivered'  || $data_transaksi->status == 'success' )
                                        @if ($data_transaksi->status == 'verified' || $data_transaksi->status == 'unverified' || $data_transaksi->status == 'delivered'  || $data_transaksi->status == 'success' )
                                            @if ($data_transaksi->status == 'verified' || $data_transaksi->status == 'unverified' )
                                                <ul class="steps row block" style="margin-left: 205px">
                                                    <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span class="text-blue">
                                                            Pesanan
                                                            <br>
                                                            Diproses
                                                        </span>
            
                                                        <span class="dir-icon">
                                                            <i class="icofont icofont-stylish-right text-yellow"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span>
                                                            Sedang
                                                            <br>
                                                            Dikirim
                                                        </span>
                                                        
                                                        <span class="dir-icon hidden-sm hidden-md">
                                                            <i class="icofont icofont-stylish-right"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                                                        <span>
                                                            Sampai
                                                            <br>
                                                            Tujuan
                                                        </span>
                                                    </li>
                                                </ul>
                                            @endif
                                            @if ($data_transaksi->status == 'delivered')
                                                <ul class="steps row block" style="margin-left: 205px">
                                                    <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span class="text-blue">
                                                            Pesanan
                                                            <br>
                                                            Diproses
                                                        </span>
            
                                                        <span class="dir-icon">
                                                            <i class="icofont icofont-stylish-right"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span class="text-blue">
                                                            Sedang
                                                            <br>
                                                            Dikirim
                                                        </span>
                                                        
                                                        <span class="dir-icon hidden-sm hidden-md">
                                                            <i class="icofont icofont-stylish-right text-yellow"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                                                        <span>
                                                            Sampai
                                                            <br>
                                                            Tujuan
                                                        </span>
                                                    </li>
                                                </ul>
                                            @endif
                                            @if ($data_transaksi->status == 'success')
                                                <ul class="steps row block" style="margin-left: 205px">
                                                    <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span class="text-blue">
                                                            Pesanan
                                                            <br>
                                                            Diproses
                                                        </span>
            
                                                        <span class="dir-icon">
                                                            <i class="icofont icofont-stylish-right"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="active hidden-xs col-sm-4 col-md-4 col-lg-3">
                                                        <span class="text-blue">
                                                            Sedang
                                                            <br>
                                                            Dikirim
                                                        </span>
                                                        
                                                        <span class="dir-icon hidden-sm hidden-md">
                                                            <i class="icofont icofont-stylish-right"></i>
                                                        </span>
                                                    </li>
            
                                                    <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                                                        <span class="text-green">
                                                            Sampai
                                                            <br>
                                                            Tujuan
                                                        </span>
                                                    </li>
                                                </ul>

                                            @endif
                                            @else
                                            <h1 class="text-uppercase text-blue" style="font-weight: bolder; padding-bottom: 70px; font-size: 100px">
                                                Proses transaksi gagal
                                            </h1>
                                        @endif
                                    @else
                                        <h1 class="text-uppercase text-blue" style="font-weight: bolder; padding-bottom: 70px; font-size: 100px">
                                            {{ $deadline }}
                                        </h1>
                                    @endif
                                    <!-- / Kembali ke halaman utama -->
                                    <div class="form-group ">
                                        <button type="button" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">
                                            {{-- <i class="mdi mdi-file-restore btn-icon-prepend "></i>      --}}
                                            <a href="/" style="color: black;">Kembali ke halaman utama</a>
                                        </button>
                                    </div>


                                    @if ($data_transaksi->status == 'success')
                                        <!-- Form -->
                                        <div class="add-comment row">

                                            <!-- Header -->
                                            <h3 class="header">Add new product feedback</h3>

                                            <form class="form-horizontal" method="POST" action="/produk/review">
                                                @csrf
                                                <div class="form-group text-center">
                                                    {{-- <label for="inputText" class="col-sm-3 control-label">Enter your message</label> --}}
                                                    <div class="col-sm-12">
                                                        {{-- <label for="exampleFormControlSelect1">Rating</label> --}}
                                                        <select name="product_id" class="form-control" id="exampleFormControlSelect1" style="padding: 0px ">
                                                            <option selected disabled>Choose Product</option>
                                                            @foreach ($data_transaksi->produk as $produk)
                                                                
                                                                <option value="{{ $produk->id }}">{{ $produk->product_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        {{-- <label for="exampleFormControlSelect1">Rating</label> --}}
                                                        <select name="rate" class="form-control" id="exampleFormControlSelect1" style="padding: 0px ">
                                                            <option selected disabled>Rating</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>

                                                        <select name="rate" class="form-control" id="exampleFormControlSelect1" style="padding: 0px ">
                                                            <option selected disabled>Ulasan 1</option>
                                                            <option value="1">Pesanan sampai dengan baik</option>
                                                            <option value="2">Kecepatan pengiriman sesuai</option>
                                                            <option value="3">Harga barang sesuai estimasi</option>
                                                            <option value="4">Pesanan yang diterima lengkap</option>
                                                            <option value="5">Kondisi barang baru</option>
                                                        </select>

                                                        <select name="rate" class="form-control" id="exampleFormControlSelect1" style="padding: 0px ">
                                                            <option selected disabled>Ulasan 2</option>
                                                            <option value="1">Pesanan sampai dengan baik</option>
                                                            <option value="2">Kecepatan pengiriman sesuai</option>
                                                            <option value="3">Harga barang sesuai estimasi</option>
                                                            <option value="4">Pesanan yang diterima lengkap</option>
                                                            <option value="5">Kondisi barang baru</option>
                                                        </select>

                                                        <select name="rate" class="form-control" id="exampleFormControlSelect1" style="padding: 0px ">
                                                            <option selected disabled>Ulasan 3</option>
                                                            <option value="1">Pesanan sampai dengan baik</option>
                                                            <option value="2">Kecepatan pengiriman sesuai</option>
                                                            <option value="3">Harga barang sesuai estimasi</option>
                                                            <option value="4">Pesanan yang diterima lengkap</option>
                                                            <option value="5">Kondisi barang baru</option>
                                                        </select>
                                                      </div>
                                                    <div class="col-sm-12">
                                                        <textarea name="content" class="form-control" id="inputcomment" cols="30" rows="2"></textarea>
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-7">
                                                        <button type="submit" class="btn btn-primary btn-material">
                                                            <span class="body">Send message</span>
                                                            <i class="icon icofont icofont-check-circled"></i>
                                                        </button>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group ">
                                                    <button type="submit" class="btn btn-primary btn-material">
                                                        <span class="body">Send message</span>
                                                        <i class="icon icofont icofont-check-circled"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    @endif

                                    <!-- /END: Kembali ke halaman utama -->
                                </div>
                            </div>
                            <!-- END: Progres barang -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT -->

</div>
@endsection