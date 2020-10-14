<!-- An unexamined life is not worth living. - Socrates -->
<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-blue">{{$totalAppointments}}</h4>
                    <h6 class="text-muted m-b-0">Appointments</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="feather icon-clock f-28"></i>
                </div>
            </div>
        </div>
        <div class="card-footer bg-c-blue">
            <div class="row align-items-center">
                <div class="col-9">
                    <a class="text-white m-b-0" href="{{route('admin-appointments')}}">View</a>
                </div>
                <div class="col-3 text-right">
                    <i class="feather icon-trending-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>
