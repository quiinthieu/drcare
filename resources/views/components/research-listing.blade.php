<!-- Be present above all else. - Naval Ravikant -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 ftco-animate d-flex align-items-stretch">
                    <div class="blog-entry shadow d-flex flex-column">
                        <a href="{{route('drcare-research-article', ['id' => $article->id])}}" class="block-20"
                           style="background-image: url('{{$article->thumbnail}}');">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{date('d', strtotime($article->published_at))}}</span>
                                <span class="mos">{{date('M', strtotime($article->published_at))}}</span>
                                <span class="yr">{{date('Y', strtotime($article->published_at))}}</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="{{route('drcare-research-article', ['id' => $article->id])}}">{{$article->title}}</a></h3>
                            <p>{{$article->subtitle}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{route('drcare-research-article', ['id' => $article->id])}}" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0 font-italic">
                                    {{$article->author}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$articles->links()}}
    </div>
</section>
