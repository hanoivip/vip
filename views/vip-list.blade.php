@extends('hanoivip::layouts.app') 
@section('title', 'Danh sach VIP') 
@section('content')

<div class="wrapper__post-event">
	<div class="wrapper">
		<div class="container" style="color: white; margin-left: 30px;">
    		<div class="row" style="margin-bottom: 0px;">
	
@if (!empty($list))
    @foreach ($list as $vip)
    PlayerID: {{$vip->userId}} Level: {{$vip->level}}
    @endforeach
@else
<p>Danh sach VIP dang cap nhat! Moi thu lai sau</p>
@endif

</div></div></div></div>

@endsection