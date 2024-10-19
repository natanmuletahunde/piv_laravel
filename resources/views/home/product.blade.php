<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Products
            </h2>
        </div>
        <div class="row">

        @foreach ($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                
                        <div class="img-box">
                            <img src="products/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                <!-- Use $product here, not $products -->
                                {{ $products->title }}
                            </h6>
                            <h6>
                                Price
                                <span>
                                    <!-- Use $product here, not $products -->
                                    $ {{ $products->price }}
                                </span>
                            </h6>
                        </div>
           


                        <div style="padding:10px;">
                            <a class="btn btn-danger" href="{{url('product_details',$products->id)}}">Details</a>

                        <a  class="btn btn-primary " href=""> Add to Cart </a>
                        </div>

                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
