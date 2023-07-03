@extends('users.master')

@section('content')
  <!-- Categories Section Begin -->

<!-- Categories Section End -->
<section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="users/12.webp" style="height:900px auto;witdh:00px">
                   
                </div>
            </div>
           
            </div>
        </div>
    </div>
</section>
<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="users/T12-POSM-Banner-Event-SS-Fb-Ads.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="users/cover_baner_web.jpg" alt="">
                </div>
            </div
            </div>
        </div>
    </div>
</section>
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản Phẩm Mới Nhất </h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
            </div>
        </div>
        <div class="row property__gallery">
        @auth
            @foreach($data as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" >
                    <a href="{{ route('home.product', $item->id) }}">
                    <img href="{{ route('home.product', $item->id) }}" src="{{$item ->image}}" alt="Girl in a jacket">
                    </a>
                      
                        <ul class="product__hover">
                        
                            <li><a href="{{ route('love',['id_user'=> Auth::user()->id,'id_product'=>$item->id ]) }}"><span class="icon_heart_alt"></span></a></li>

                            <li><a href="{{ route('home.themcart', [Auth::user()->id,$item->id]) }}"><span class="fa fa-shopping-cart"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('home.product', $item->id) }}">{{$item->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">{{ number_format($item->price, 0) }} VND</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @foreach($data as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" >
                            <a href="{{ route('home.product', $item->id) }}">
                    <img href="{{ route('home.product', $item->id) }}" src="{{$item ->image}}" alt="Girl in a jacket">
                    </a>
                    <div class="label new"> new</div>
                        <ul class="product__hover">
                        
                            <li><a href="{{ route('home.product', $item->id) }}"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{ route('home.product', $item->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a class="product__price"  href="{{ route('home.product', $item->id) }}">{{$item->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">{{ number_format($item->price, 0) }} VND</div>
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
</section>

<section class="banner set-bg" data-setbg="users/1222.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        
                    </div>
                    <div class="banner__item">
                       
                    </div>
                    <div class="banner__item">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản Phẩm Nổi Bật</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
            </div>
        </div>
        <div class="row property__gallery">
        @auth
            @foreach($data1 as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" >
                    <a href="{{ route('home.product', $item->id) }}">
                    <img href="{{ route('home.product', $item->id) }}" src="{{$item ->image}}" alt="Girl in a jacket">
                    </a>
                         <div class="label new"> Sản Phẩm Nổi Bật</div>
                        <ul class="product__hover">
                        
                            <li><a href="{{ route('love',['id_user'=> Auth::user()->id,'id_product'=>$item->id ]) }}"><span class="icon_heart_alt"></span></a></li>

                            <li><a href="{{ route('home.themcart', [Auth::user()->id,$item->id]) }}"><span class="fa fa-shopping-cart"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('home.product', $item->id) }}">{{$item->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">{{ number_format($item->price, 0) }} VND</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @foreach($data1 as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" >
                    <a href="{{ route('home.product', $item->id) }}">
                    <img href="{{ route('home.product', $item->id) }}" src="{{$item ->image}}" alt="Girl in a jacket">
                    </a> <div class="label new"> Sản Phẩm Nổi Bật</div>
                        <ul class="product__hover">
                           
                            <li><a href="{{ route('home.product', $item->id) }}"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{ route('home.product', $item->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('home.product', $item->id) }}">{{$item->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">{{ number_format($item->price,0) }} VND</div>
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
</section>

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="users/T12-POSM-Banner-Event-SS-Fb-Ads.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Summer 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->

@endsection
