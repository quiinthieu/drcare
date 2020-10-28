<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{$article->title}}</h2>
                <p>
                    <img src="{{asset($article->thumbnail)}}" alt="" class="img-fluid">
                </p>
               
                @foreach(json_decode($article->content) as $paragraph)
                    <p>{{$paragraph}}</p>
                @endforeach
                <div class="about-author d-flex p-4 bg-light mb-5 mt-5">
                    <div class="bio mr-5">
                        <img src="{{asset('storage/drcare/images/person_1.jpg')}}" alt="" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>{{$article->author}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa
                            sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3>Category</h3>
                    <ul class="categories">
                        @foreach(\App\Models\DiseaseType::all() as $diseaseType)
                            <li>
                                <a href="#">{{$diseaseType->name}} <span>({{\App\Models\Research::all()->where('disease_type_id', $diseaseType->id)->count()}})</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Related Research</h3>
                    @foreach(\App\Models\Research::all()->where('disease_type_id', $article->disease_type_id)->take(3) as $article)
                        <div class="block-21 mb-4 d-flex">
                            <a href="{{route('drcare-research-article', ['id' => $article->id])}}" class="blog-img mr-4" style="background-image: url({{asset($article->thumbnail)}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">{{$article->title}}</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> {{date('m/d/y', strtotime($article->published_at))}}</div>
                                    <div><span class="icon-person"></span> {{$article->author}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
{{--                <div class="sidebar-box ftco-animate">--}}
{{--                    <h3>Archives</h3>--}}
{{--                    <ul class="categories">--}}
{{--                        <li><a href="#">December 2018 <span>(30)</span></a></li>--}}
{{--                        <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>--}}
{{--                        <li><a href="#">September 2018 <span>(6)</span></a></li>--}}
{{--                        <li><a href="#">August 2018 <span>(8)</span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
