@extends('layouts.app')

@section('content')
<div class="container">
    <a  href=""><span><i class="fa fa-caret-square-o-left pagination-buttons"></i></span></a>
    <a  href=""><span><i class="fa fa-caret-square-o-right pagination-buttons"></i></span></a>
    <span><h1 class="display-5 text-center">Листопад 5 - Листопад 11</h1></span>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('layouts.day', ['weekday'=> 'Понеділок', 'day' => '5', 'd' => 'mon','date'=>'2018-11-05'])
            @include('layouts.day', ['weekday'=> 'Вівторок', 'day' => '6', 'd' => 'tue','date'=>'2018-11-06'])
            @include('layouts.day', ['weekday'=> 'Середа', 'day' => '7', 'd' => 'wed','date'=>'2018-11-07'])

        </div>
        <div class="col-md-6">
            @include('layouts.day', ['weekday'=> 'Четвер', 'day' => '8', 'd' => 'thu','date'=>'2018-11-08'])
            @include('layouts.day', ['weekday'=> "П'ятниця", 'day' => '9', 'd' => 'fri','date'=>'2018-11-09'])
            @include('layouts.day', ['weekday'=> 'Субота', 'day' => '10', 'd' => 'sat','date'=>'2018-11-10'])
        </div>
    </div>
</div>
@endsection
