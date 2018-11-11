@extends('layouts.app')

@section('content')
<div class="container">
    <a  href=""><span><i class="fa fa-caret-square-o-left pagination-buttons"></i></span></a>
    <a  href=""><span><i class="fa fa-caret-square-o-right pagination-buttons"></i></span></a>
    <span><h1 class="display-5 text-center">Вересень 17 - Вересень 24</h1></span>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('layouts.day', ['weekday'=> 'Понеділок', 'day' => '17'])
            @include('layouts.day', ['weekday'=> 'Вівторок', 'day' => '18'])
            @include('layouts.day', ['weekday'=> 'Середа', 'day' => '19'])

        </div>
        <div class="col-md-6">
            @include('layouts.day', ['weekday'=> 'Четвер', 'day' => '20'])
            @include('layouts.day', ['weekday'=> "П'ятниця", 'day' => '21'])
            @include('layouts.day', ['weekday'=> 'Субота', 'day' => '22'])
        </div>
    </div>
</div>
@endsection
