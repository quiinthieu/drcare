<!-- Be present above all else. - Naval Ravikant -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 ftco-animate d-flex align-items-stretch">
                    <div class="blog-entry shadow d-flex flex-column">
                        <a href="{{route('blog-single')}}" class="block-20"
                           style="background-image: url('{{$article->thumbnail}}');">
                            <div class="meta-date text-center p-2">
                                <span class="day">23</span>
                                <span class="mos">January</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">{{$article->title}}</a></h3>
                            <p>{{$article->subtitle}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">{{$article->author}}</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$articles->links()}}
{{--        <div class="row no-gutters my-5">--}}
{{--            <div class="col text-center">--}}
{{--                <div class="block-27">--}}
{{--                    <ul>--}}
{{--                        <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>--}}
{{--                        <li class="active"><span>1</span></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#">4</a></li>--}}
{{--                        <li><a href="#">5</a></li>--}}
{{--                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
