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
                <p class="button text-center"><a href="{{route('drcare-appointments-create')}}" class="btn btn-primary px-4 py-3">Book Service</a></p>
            </div>
        </div>
    @endforeach
</div>
