<!--@if(count($errors)>0)
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <ul>
                @foreach($errors->all()as $error)
                    <div class="alert alert-warning" role="alert">{{$error}}</div>
                @endforeach
            </ul>
        </div>
    </div>
@endif!-->
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        </div>
    </div>
@endif
@if(Session::has('error'))
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-warning" role="alert">{{Session::get('error')}}</div>
        </div>
    </div>
@endif