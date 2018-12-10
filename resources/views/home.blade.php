@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>SLANA JELA</h3>
        <div class="col-md-12">
            {{--{{dd($meals)}}--}}
            @foreach($meals as $meal)
            <div class="col-md-3 card">
                <img class="card-img-top" src="{{ \Illuminate\Support\Facades\URL::to('/') }}/img/pita.jpg"/>
                <div class="card-body">
                    <h4>{{$meal['name']}}</h4>
                    <h3 style="float: right">{{$meal['price']}}KM/kg</h3>
                    <a class="btn btn-danger" style="color: white">Buy</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
