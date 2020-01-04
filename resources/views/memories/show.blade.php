
@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" justify-content-center">
        <div class="col-md-10">
            <div class="form-control rounded-2 login-header">{{$memory->title}}</div>
            <form method="POST" action="{{ route('login') }}">    
                <div class="form-group justify-content-center">
                    <div class="form-control rounded-2 col-md-10">
                        {{$memory->description}}
                    </div>
                </div>
                
            </form>   
        </div> 
    </div>
    <div class=" justify-content-center ">
            <a type="submit" href="/m" class="btn btn-light center-block"> {{ __(' بازگشت') }} </a>
        </div>
</div>
@endsection
