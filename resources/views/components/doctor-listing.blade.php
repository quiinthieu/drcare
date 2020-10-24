<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($doctors as $doctor)
                <div class="col-md-6 col-lg-3 ftco-animate mb-3">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{$doctor->photo}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. {{$doctor->name}}</h3>
                            <span
                                class="position mb-2">{{\Illuminate\Support\Facades\DB::table('doctor_types')->find($doctor->doctor_type_id)->name}}</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="https://twitter.com/" target="_blank"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="https://www.linkedin.com/feed/" target="_blank"><span class="icon-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="https://www.instagram.com/" target="_blank"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$doctors->links()}}
    </div>
</section>
