<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<div class="col-sm-6">
    <div class="card support-bar overflow-hidden">
        <div class="card-body pb-0">
            <h2 class="m-0">{{$totalDiseases}}</h2>
            <span class="text-c-blue">Diseases</span>
            <p class="mb-3 mt-3">In which</p>
        </div>
        <div class="card-footer bg-primary text-white">
            <div class="row text-center">
                @foreach($diseaseTypes as $diseaseType)
                    <div class="col">
                        <h4 class="m-0 text-white">{{\App\Models\Disease::all()->where('disease_type_id', $diseaseType->id)->count()}}</h4>
                        <span>{{$diseaseType->name}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
