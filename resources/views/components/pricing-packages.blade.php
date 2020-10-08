<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<div class="row">
    @foreach(\App\Models\ServiceType::all() as $serviceType)
        <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
                <div>
                    <h3 class="mb-4">{{$serviceType->name}}</h3>
                    <p><span class="price">${{number_format($serviceType->price, 2)}}</span> <span class="per">/ session</span></p>
                </div>
                <ul>
                    @foreach(\App\Models\Service::all()->where('service_type_id', $serviceType->id) as $service)
                        <li>{{$service->name}}</li>
                    @endforeach
                </ul>
                <p class="button text-center"><a href="{{route('appointments.create')}}" class="btn btn-primary px-4 py-3">Book Service</a></p>
            </div>
        </div>
    @endforeach
{{--    <div class="col-md-3 ftco-animate">--}}
{{--        <div class="pricing-entry pb-5 text-center">--}}
{{--            <div>--}}
{{--                <h3 class="mb-4">Basic</h3>--}}
{{--                <p><span class="price">$24.50</span> <span class="per">/ session</span></p>--}}
{{--            </div>--}}
{{--            <ul>--}}
{{--                <li>Diagnostic Services</li>--}}
{{--                <li>Professional Consultation</li>--}}
{{--                <li>Tooth Implants</li>--}}
{{--                <li>Surgical Extractions</li>--}}
{{--                <li>Teeth Whitening</li>--}}
{{--            </ul>--}}
{{--            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-3 ftco-animate">--}}
{{--        <div class="pricing-entry pb-5 text-center">--}}
{{--            <div>--}}
{{--                <h3 class="mb-4">Standard</h3>--}}
{{--                <p><span class="price">$34.50</span> <span class="per">/ session</span></p>--}}
{{--            </div>--}}
{{--            <ul>--}}
{{--                <li>Diagnostic Services</li>--}}
{{--                <li>Professional Consultation</li>--}}
{{--                <li>Tooth Implants</li>--}}
{{--                <li>Surgical Extractions</li>--}}
{{--                <li>Teeth Whitening</li>--}}
{{--            </ul>--}}
{{--            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-3 ftco-animate">--}}
{{--        <div class="pricing-entry active pb-5 text-center">--}}
{{--            <div>--}}
{{--                <h3 class="mb-4">Premium</h3>--}}
{{--                <p><span class="price">$54.50</span> <span class="per">/ session</span></p>--}}
{{--            </div>--}}
{{--            <ul>--}}
{{--                <li>Diagnostic Services</li>--}}
{{--                <li>Professional Consultation</li>--}}
{{--                <li>Tooth Implants</li>--}}
{{--                <li>Surgical Extractions</li>--}}
{{--                <li>Teeth Whitening</li>--}}
{{--            </ul>--}}
{{--            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-3 ftco-animate">--}}
{{--        <div class="pricing-entry pb-5 text-center">--}}
{{--            <div>--}}
{{--                <h3 class="mb-4">Platinum</h3>--}}
{{--                <p><span class="price">$89.50</span> <span class="per">/ session</span></p>--}}
{{--            </div>--}}
{{--            <ul>--}}
{{--                <li>Diagnostic Services</li>--}}
{{--                <li>Professional Consultation</li>--}}
{{--                <li>Tooth Implants</li>--}}
{{--                <li>Surgical Extractions</li>--}}
{{--                <li>Teeth Whitening</li>--}}
{{--            </ul>--}}
{{--            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
