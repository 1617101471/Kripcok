@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="pic-gallery" class="chipsofic-content-block gallery-block">
        <div class="container">
              <div class="row">
                 <div class="col-md-12">
                       <div class="section-title text-center">
                            <h1>Picture Gallery</h1>
                            <div class="chipsofic-subtitle">Check our aweomse product images</div>
                       </div>
                   </div>
                </div>
        </div>
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row wow fadeInUp">
                    <!-- Gallery 1st Row Start -->
                    @foreach($galeris as $data)
                    <div class="col-sm-6 col-md-3">
                        <a title="Lorem Ipsum 01" class="gallery-lightbox" href="{{asset('assets/img/gambar/' .$data->gambar)}}">
                            <i class="fa fa-plus">
                            </i> <img src="{{asset('assets/img/gambar/' .$data->gambar)}}" alt=""></a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection