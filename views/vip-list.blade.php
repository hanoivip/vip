@extends('hanoivip::layouts.app') 
@section('title', 'Danh sach VIP') 
@section('content')

<div class="wrapper__post-event">
	<div class="wrapper">
		<div class="container" style="color: white; margin-left: 30px;">
    		<div class="row" style="margin-bottom: 0px;">
	
@include('hanoivip::vip-list-partial, ['list' => $list])

</div></div></div></div>

@endsection