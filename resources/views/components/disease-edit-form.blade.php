<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="row">
    <!-- [ form-element ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="font-weight-bold lead">Disease Name</label>
                                <input id="name" type="text" class="form-control" value="{{$disease->name}}" placeholder="Text">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                                <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                                    <option>1</option>--}}
{{--                                    <option>2</option>--}}
{{--                                    <option>3</option>--}}
{{--                                    <option>4</option>--}}
{{--                                    <option>5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="description" class="font-weight-bold lead">Description</label>
                                <textarea class="form-control" id="description" rows="3">{{$disease->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="statistics" class="font-weight-bold lead">Statistics</label>
                                <textarea class="form-control" id="statistics" rows="3">{{$disease->statistics}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="causes" class="font-weight-bold lead">Causes</label>
                                <textarea class="form-control" id="causes" rows="3">{{$disease->causes}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="symptoms" class="font-weight-bold lead">Symptoms</label>
                                <textarea class="form-control" id="symptoms" rows="3">{{$disease->symptoms}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="preventions" class="font-weight-bold lead">Preventions</label>
                                <textarea class="form-control" id="preventions" rows="3">{{$disease->preventions}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ form-element ] end -->
</div>
