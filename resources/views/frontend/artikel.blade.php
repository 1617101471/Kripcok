@extends('layouts.guest')
@section('content')
<div scroll-spy="true" id="our-blog" class="chipsofic-content-block section-gray">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Blog</h1>
                        <div class="chipsofic-subtitle">Read the latest news about our product</div>
                   </div>
               </div>
            </div>
            
            <div class="row wow fadeInLeft">
              @foreach($artikels as $data)
                <div class="col-sm-4">
                    <a data-toggle="modal" data-target="#blog-content-1" class="single-blog-item">
                        <div class="blog-preview blog-bg-1"></div>
                        <h3>{{$data->judul}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{ $data->created_at}}</li>
                                <li><i class="fa fa-thumb-tack"></i>{{$data->user->name}}</li>
                            </ul>
                        </div>
                        <p>{!! $data->content !!}</p>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog Preview Area End -->
    
    <!-- Blog Single Area Start -->
    
    <!-- Blog 1 Content  Start-->
      <div class="modal fade" id="blog-content-1" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          @foreach($artikels as $data)
          <div class="modal-content">
            <div class="modal-body blog-single-modal">  
                  <h3>{{$data->judul}}</h3>
                    <div class="post-meta">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i>{{ $data->created_at}}</li>
                            <li><i class="fa fa-thumb-tack"></i>{{$data->user->name}}</li>
                        </ul>
                    </div>
                <img src="{{ asset('/assets/img/gambar/' .$data->galeri->gambar)}}" alt="">
                <p>{!! $data->content !!}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection