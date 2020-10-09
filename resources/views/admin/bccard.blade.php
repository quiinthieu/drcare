@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ card ] start -->
        <div class="col-md-6 col-xl-4">
            <h5>Body Content</h5>
            <hr>
            <div class="card">
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Titles, Text, and Links</h5>
            <hr>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#!" class="card-link">Card link</a>
                    <a href="#!" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Header and Footer</h5>
            <hr>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#!" class="btn  btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h5>Left Align</h5>
                    <hr>
                    <div class="card text-left">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#!" class="btn  btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5>Center Align</h5>
                    <hr>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#!" class="btn  btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5>Right Align</h5>
                    <hr>
                    <div class="card text-right">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#!" class="btn  btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Image Caps</h5>
            <hr>
            <div class="card mb-3">
                <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Image Caps [ Bottom ]</h5>
            <hr>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <img class="img-fluid card-img-bottom" src="{{asset('storage/admin/images/slider/img-slide-6.jpg')}}" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <h5>Image Overlays</h5>
            <hr>
            <div class="card bg-dark">
                <img class="img-fluid card-img" src="{{asset('storage/admin/images/slider/img-slide-7.jpg')}}." alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-white">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5 class="mt-4">Card Styles</h5>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white bg-primary ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-secondary ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-danger ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-warning ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-light">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5>Card Groups</h5>
            <hr>
            <div class="card-group">
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-4.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5 class="mt-4">Card Decks</h5>
            <hr>
            <div class="card-deck">
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-4.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <h5 class="mt-4">Card Columns</h5>
            <hr>
            <div class="card-columns">
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title that wraps to a new line</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button class="btn  btn-primary">View More</button>
                        <button class="btn  btn-danger">Delete</button>
                    </div>
                </div>
                <div class="card">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('storage/admin/images/slider/img-slide-3.jpg')}}g" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-c-blue text-white text-center">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                            <footer class="blockquote-footer text-white">
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img" src="{{asset('storage/admin/images/slider/img-slide-2.jpg')}}" alt="Card image">
                </div>
                <div class="card text-right">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ card ] end -->
    </div>
@endsection
