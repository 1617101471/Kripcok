@extends('layouts.guest')
@section('content')<br>
<div scroll-spy="true" id="customer-feedback" class="testimonial-slider-wrapper testimonial-bg-1">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Happy Customers</h1>
                        <div class="chipsofic-subtitle">Discover what our Customers have to say</div>
                   </div>
               </div>
            </div>
            <div class="testimonial-slides owl-carousel">
                @foreach($testimonis as $data)
                <div class="testimonial-slide-item-table">
                    <div class="testimonial-slide-item-tablecell"> 
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                                <p>{!! $data->content !!}</p>
                                    <ul class="review-stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                <h4>{{$data->nama}}<span>{{$data->alamat}}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
          @endforeach
            </div>
        </div>
    </div>
@endsection