<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<div class="col-sm-8">
    <div class="card support-bar overflow-hidden">
        <div class="card-body pb-0">
            <h2 class="m-0">{{$totalServices}}</h2>
            <span class="text-c-green">Services</span>
            <p class="mb-3 mt-3">In which</p>
        </div>
        <div class="card-footer bg-success text-white">
            <div class="row text-center">
                @foreach($serviceTypes as $serviceType)
                    <div class="col">
                        <h4 class="m-0 text-white">{{\App\Models\Service::all()->where('service_type_id', $serviceType->id)->count()}}</h4>
                        <span>{{$serviceType->name}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
