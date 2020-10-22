<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->


<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
         style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-5 pr-md-5">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <span class="subheading">Consultation</span>
                    <h2 class="mb-4">Free Consultation</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there
                        live the blind texts.</p>
                </div>
                <form method="POST" action="{{route('drcare-appointments-store')}}" class="appointment-form ftco-animate" autocomplete="off">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required autocomplete="new-first-name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required autocomplete="new-last-name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="service_type_id" id="" class="form-control" required>
                                        <option value="" disabled class="text-dark" selected>
                                            Select Your Service
                                        </option>
                                        @foreach($serviceTypes as $serviceType)
                                            <option value="{{$serviceType->id}}"  class="text-dark">
                                                {{$serviceType->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input required name="phone" type="tel" class="form-control" placeholder="Phone" autocomplete="new-phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input name="date" required type="text" class="form-control appointment_date" placeholder="Date" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="time" class="form-control" name="time" id="validationCustom05" placeholder="Time" required="">
                    
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="message" required id="" cols="30" rows="2" class="form-control"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 p-5 bg-counter aside-stretch">
                <h3 class="vr">About Dr.Care Facts</h3>
                <div class="row pt-4 mt-1">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Years of Experienced</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="4500">0</strong>
                                <span>Happy Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="84">0</strong>
                                <span>Number of Doctors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Number of Staffs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
