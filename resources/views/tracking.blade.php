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
                                    Tracking
                                </h1>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Input Tracking Number</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Tracking Number">
                            </div>

                            <button type="button" class="btn btn-primary">Track</button>
                            <!-- Item body -->
                            <div class="item-body">
                                <p>
                                    Silahkan masukkan nomor resi barang Anda pada kolom yang sudah disediakan
                                </p>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- END: MAIN INFO -->
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection