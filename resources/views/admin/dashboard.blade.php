@extends('layouts.admin', ['pageHeader' => 'Dashboard'])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <x-total-diseases />
                <x-total-services />
                <x-total-doctors />
                <x-total-appointments />
                <x-total-products />
                <x-total-research />
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Doctors Statistics</h5>
                        </div>
                        <div class="card-body">
                            <div id="pie-chart-1" active="{{\App\Models\Doctor::where('status', true)->count()}}" inactive="{{\App\Models\Doctor::where('status', false)->count()}}" style="width:100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Products Statistics</h5>
                        </div>
                        <div class="card-body">
                            <div id="pie-chart-2" active="{{\App\Models\Product::where('status', true)->count()}}" inactive="{{\App\Models\Product::where('status', false)->count()}}" style="width:100%"></div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5>Category Statistics</h5>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div id="radialBar-chart-2"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
