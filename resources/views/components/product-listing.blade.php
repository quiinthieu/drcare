<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry shadow d-flex flex-column">
                        <a href="#" class="block-20"
                           style="background-image: url('{{json_decode($product->photos)[0]}}'); background-size: contain;">

                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">{{$product->name}}</a></h3>
                            <p>{{$product->description}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Add to Cart <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0 lead">
                                    <span class="mr-2">${{number_format($product->price, 2)}}</span>
{{--                                    <span class="meta-chat">{{$product->price}}</span>--}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
