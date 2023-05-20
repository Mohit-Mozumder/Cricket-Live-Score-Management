@if(Session::has('success'))
    <div class="alert alert-success text-center  animated-alert">
        <div id="flash-notice"><b>{{ Session::get('success') }}</b></div>
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger text-center  animated-alert">
        <div id="flash-notice"><b>{{ Session::get('error') }}</b></div>
    </div>
@elseif ($errors->any())
 @foreach ($errors->all() as $error)
    <div class="alert alert-danger text-center animated-alert">
        <b>{{ $error }}</b>
    </div>
@endforeach
@endif