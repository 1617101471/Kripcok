@extends('layouts.guest')
@section('content')
<!-- Welcome Area Start -->
    <div scroll-spy="true" id="about-us" class="chipsofic-content-block">
        <div class="container">
            <div class="row">
               <div class="about-us-section">
                @php
                $artikels = App\Artikel::paginate(1);
                @endphp
                @foreach($artikels as $data)
                    <div class="col-md-6">
                        <h1><span>We are</span> Kripcok</h1>
                        <h2>{{$data->judul}}</h2>
                        <p>{!! $data->content !!}</p>
                        <div class="row">
                            <div class="col-sm-6">
                               <h3><i class="fa fa-ban" aria-hidden="true"></i><span>No</span> Preservatives</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                            <div class="col-sm-6">
                               <h3><i class="fa fa-heartbeat" aria-hidden="true"></i><span>Health</span> Friendly</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                               <h3><i class="fa fa-money" aria-hidden="true"></i><span>Low</span> Cost</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                            <div class="col-sm-6">
                               <h3><i class="fa fa-commenting" aria-hidden="true"></i><span>24/7</span> Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem doloremque ea eum eveniet quas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight">
                        <img src="{{ asset('/assets/img/gambar/' .$data->galeri->gambar)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Area End -->
    
    <!-- Choose Our Chips Area Start -->
    @php
    $produks = App\Produk::paginate(4);
    @endphp
    <div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Choose Your Flavor</h1>
                        <div class="chipsofic-subtitle">Choose any of our chips which better suits your needs</div>
                   </div>
               </div>
            </div>
            
           <div class="choose-our-chips-content-area text-center wow fadeInUp">
                <div class="row">
                  @foreach($produks as $data)
                    <div class="col-sm-6 col-md-3 single-chips-item">
                      <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt="">
                       <h3>{{$data->nama_produk}}</h3>
                       <div class="pricing"><span>Harga:</span>Rp. {{$data->harga}}</div>
                        <p>{!! $data->content !!}</p>
                        <a class="btn chipsofic-small-btn" data-scroll href="{{route('produk')}}">Order Now</a>
                    </div>
                    @endforeach
                </div>
            </div>  
        </div>
    </div>
    <!-- Choose Our Chips Area End -->
    
    <!-- Our Process Area Start -->
    <div scroll-spy="true" class="chipsofic-content-block process-block">
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <a onclick="changeVideo('ctvlUvN6wSE')"><i class="fa fa-play-circle"></i></a>
                        <h1>Check our Process</h1>
                        <div class="chipsofic-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt</div>
                   </div>
               </div>
            </div> 
        </div>
    </div>
    <!-- Video Popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-label="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="iframeYoutube" class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/ctvlUvN6wSE"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Our Process Area End -->
        
    <!-- Gallery Area Start -->
    @php
    $galeris = App\Galeri::paginate(8);
    @endphp
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
                    @foreach($galeris as $data)
                    <div class="col-sm-6 col-md-3">
                        <a title="Lorem Ipsum 01" class="gallery-lightbox" href="{{ asset('assets/img/gambar/' .$data->gambar)}}"><i class="fa fa-plus"></i> <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" alt=""></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    
    <!-- Our Progress Area Start -->
    <div scroll-spy="true" class="chipsofic-content-block counter-block">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Our Progress</h1>
                        <div class="chipsofic-subtitle">Check our progress over the years</div>
                   </div>
               </div>
            </div>
            
           <div class="chipsofic-counter-area text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">37,020</span></h2>
                        <p>Yearly Customer</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">5,01,212</span></h2>
                        <p>Sell Per Year</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">9,210</span></h2>
                        <p>Staff</p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                       <h2><span class="counter">5,001</span></h2>
                        <p>Showroom</p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Our Progress Area End -->
    
    <!-- Meet Our Team Area Start -->
    <div scroll-spy="true" id="our-team" class="chipsofic-content-block">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Meet the Team</h1>
                        <div class="chipsofic-subtitle">Check the People who are working behind this awesome product</div>
                   </div>
               </div>
            </div>      
            <div class="row wow fadeInUp">
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-1.png" alt="">
                            <h3>John Abul</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                   <div class="single-team-item">
                            <img src="assets/img/team-bg-2.png" alt="">
                            <h3>Maria Uradhura</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-3.png" alt="">
                            <h3>Gilbart Hudai</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="single-team-item">
                            <img src="assets/img/team-bg-4.png" alt="">
                            <h3>Khichuri Khabo</h3>
                            <p>Diam nonummy nibh, consectetuer adipiscing elit</p>
                            <ul>
                                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Meet Our Team Area End --> 
    
    <!-- Testimonials Area Start -->
    @php
    $testimonis = App\Testimoni::all();
    @endphp
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
    <!-- Testimonials Area End -->
    
    <!-- Blog Preview Area Start -->
    @php
    $artikels = App\Artikel::paginate(3);
    @endphp
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
      <!-- Blog 1 Content End-->
      
      <!-- Blog Single Area Start -->

    <!-- Newsletter Area Start -->
    <div scroll-spy="true" class="chipsofic-content-block newsletter-block">
        <div class="container">
           <div class="row">
                <div class="col-md-6">
                   <div class="section-title">
                        <h2>Get 20% Off Coupon code</h2>
                        <p>Sign up now and get a 20% off coupon code right on your inbox! Offer is for a limited time, Hurry!</p>
                    </div>
                </div>

               <div class="col-md-6">
                   <div class="newsletter text-center">
                       <form action="https://devshuvo.us18.list-manage.com/subscribe?u=3ae445ebb57b6baab774dac9f&amp;id=377d7fc940" method="post" target="_blank">
                          <div class="row">
                               <div class="col-lg-6"><input class="form-control" id="newsletter-name" type="text" name="YOURNAME" placeholder="Name*"></div>
                               <div class="col-lg-6"><input class="form-control" id="newsletter-email" type="email" name="EMAIL" placeholder="Email*"></div>
                               <div class="col-lg-12"><button class="btn chipsofic-form-btn" type="submit">Subscribe Now</button></div>
                           </div>
                        </form>   
                    </div>
               </div>
           </div>
        </div>
    </div>
    <!-- Newsletter Area End -->
    
    <!-- Purchase Now Area Start -->
    <div scroll-spy="true" id="purchase-now" class="chipsofic-content-block purchase-block">
        <div class="container">
           <div class="row">
                <div class="col-md-12">
                   <div class="section-title text-center">
                        <h1>Purchase Chipsofic Now</h1>
                        <div class="chipsofic-subtitle">Please use any of the two methods below to purchase.</div>
                    </div>

                   <div class="purchase now text-center wow fadeInUp">
                       <div class="row">
                            <div class="col-sm-6">
                                <a class="btn chipsofic-purchase-btn btn-right" href="https://paypal.com/" target="_blank"><ul><li><i class="fa fa-paypal"></i>Purchase from <br><span>Paypal</span><li></ul></a>
                             </div>
                           <div class="col-sm-6">
                                <a class="btn chipsofic-purchase-btn btn-left" href="https://amazon.com/" target="_blank"><ul><li><i class="fa fa-amazon"></i>Purchase from <br><span>Amazon</span><li></ul></a>
                             </div>
                       </div>   
                    </div>
               </div>
           </div>
        </div>
    </div>
    <!-- Purchase Now Area End -->
    <div id="disqus_thread"></div>
                <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://kripcokcoment.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba88a4fc666d426648b09cc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection