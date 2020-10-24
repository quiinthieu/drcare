@if (count($errors) >0)
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>

@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif