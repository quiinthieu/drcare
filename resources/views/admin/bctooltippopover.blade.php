@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ tooltip ] start -->
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tooltip</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn  btn-danger" data-toggle="tooltip" data-placement="top" title="tooltip on top">Top</button>
                    <button type="button" class="btn  btn-primary" data-toggle="tooltip" data-placement="left" title="tooltip on left">Left</button>
                    <button type="button" class="btn  btn-success" data-toggle="tooltip" data-placement="right" title="tooltip on right">Right</button>
                    <button type="button" class="btn  btn-warning" data-toggle="tooltip" data-placement="bottom" title="tooltip on bottom">Bottom</button>
                    <button type="button" class="btn  btn-info" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Html Tooltip</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Popover</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn  btn-danger" data-toggle="popover" data-placement="top" title="" data-content="top by popover" data-original-title="popup on top">Top</button>
                    <button type="button" class="btn  btn-primary" data-toggle="popover" data-placement="left" title="popup on left" data-content="left by popover">Left</button>
                    <button type="button" class="btn  btn-success" data-toggle="popover" data-placement="right" title="popup on right" data-content="right by popover">Right</button>
                    <button type="button" class="btn  btn-warning" data-toggle="popover" data-placement="bottom" title="popup on bottom" data-content="bottom by popover">Bottom</button>
                    <button type="button" class="btn  btn-info" data-toggle="popover" data-html="true" data-placement="top" title="<em>popup</em> <u>with</u> <b>HTML</b>" data-content="popup by HTML">Html popup</button>
                </div>
            </div>
        </div>
        <!-- [ tooltip ] end -->
    </div>
@endsection
