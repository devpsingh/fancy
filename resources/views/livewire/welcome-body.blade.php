<div>
    
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                      
						
                    </div>
					
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

	    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>OUR PRODUCTS</h1>
                    </div>
                    <p class="text-center">Our popular products are so beautyful to see that the shoppers are easily attracted to them.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center pt-4">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">New Arrival</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @if(!empty('demand'))
                        @foreach($demand as $demands)
                            <?php $images=json_decode($demands['thumbnail_path']); ?>
                @if($demands['available']==1) 
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ asset('products/'.$images[0])}}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="{{url('/view/product/'.$demands->id)}}">Quick View</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$demands['product_name']}}</h4>
                            <h5><i class="fas fa-pound-sign"></i> {{$demands['price']}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                    @endforeach
                @endif
                
            @if(!empty('new'))
                    @foreach($new as $demands)
                        <?php $images=json_decode($demands['thumbnail_path']); ?>
                @if($demands['available']==1)      
                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ asset('products/'.$images[0])}}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="{{url('/view/product/'.$demands->id)}}">Quick View</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$demands['product_name']}}</h4>
                            <h5> <i class="fas fa-pound-sign"></i> {{$demands['price']}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            @endif
            </div>
        </div>
    </div> 
    <!-- End Products  -->
	
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Catagory</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Catagory</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Catagory</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	

    <!-- Start Instagram Feed  -->
    <div class="fab-logo">
        <div class="container">
            <div class="row">
                <div class="fab-logo-owl owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/logo1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Instagram Feed  -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-angle-up"></i></a>

</div>
