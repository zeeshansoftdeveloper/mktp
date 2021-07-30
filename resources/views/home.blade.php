@extends('layouts.app')

@section('content')
<style>
    .bs-example{
        margin: 20px;        
    }
</style>

<div class="container">
    <div class="row justify-content-center">           
        <div class="bs-example">
            <div class="card" style="width: 300px;">
                <img src="{{asset('img/default.svg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">{{Auth::user()->name}}</h5>
                    <p class="card-text">{{ Auth::user()->getRole() }}</p>

                    @if(Auth::user()->getRole()=="admin")
                        <a href="{{route('adminDash')}}" class="btn btn-primary stretched-link">View Profile</a>
                    @elseif(Auth::user()->getRole()=="vendor")
                        <a href="{{route('vendDash')}}" class="btn btn-primary stretched-link">View Profile</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
