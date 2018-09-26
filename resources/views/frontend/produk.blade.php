@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Kripcok Cemilan khas garut</h1>
                        <div class="chipsofic-subtitle">Pilihlah rasa yang sesuai dengan selera anda</div>
                   </div>
               </div>
            </div>
            
           <div class="choose-our-chips-content-area text-center wow fadeInUp">
                <div class="row">
                  @foreach($produks as $data)
                    <div class="col-sm-6 col-md-3 single-chips-item">
                      <img src="{{asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                       <h3>{{$data->nama_produk}}</h3>
                       <div class="pricing"><span>Harga:</span>Rp. {{$data->harga}}</div>
                        <p>{!! $data->content !!}</p>
                        <a class="btn chipsofic-small-btn" data-scroll href="#purchase-now">Order Now</a>
                    </div>
                    @endforeach
                </div>
            </div>  
        </div>
    </div>
@endsection