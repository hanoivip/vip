@extends('hanoivip::layouts.app') 
@section('title', 'Thông tin VIP') 
@section('content')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="well well-sm">
				<div class="row">
					<div class="col-sm-6 col-md-8">
						<h4>{{Auth::user()->getAuthIdentifierName()}}</h4>
						<i class="glyphicon">Cấp độ VIP: {{$info->level}}</i> 
						<img src="/images/vip{{$info->level}}.png"/><br />
						<i class="glyphicon">Hạn VIP: {{empty($info->expires) ? "vĩnh viễn" : Carbon::parse($info->expires)->format('d/M/Y m:H')}}</i> <br />
						<div class="progress">
							Cần {{$info->nextLevelPoint - $info->point}} điểm
							<div class="progress-bar" role="progressbar" style="width: {{$info->percentage}}%"
								aria-valuenow="{{$info->point}}" aria-valuemin="{{$info->curLevelPoint}}"
								aria-valuemax="{{$info->nextLevelPoint}}"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
  <h2>Chính sách VIP</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
  
    <div class="carousel-inner">
      <div class="{{$info->level<=1?'item active':'item'}}">
        <p>01 VIP code hàng tháng</p>
      </div>

      <div class="{{$info->level==2?'item active':'item'}}">
        <p>01 VIP code hàng tháng</p>
        <p>Có hỗ trợ riêng từ GM</p>
      </div>
    
      <div class="{{$info->level==3?'item active':'item'}}">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
      
      <div class="{{$info->level==4?'item active':'item'}}">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
      
      <div class="{{$info->level==5?'item active':'item'}}">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
      
      <div class="{{$info->level==6?'item active':'item'}}">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
      
      <div class="{{$info->level==7?'item active':'item'}}">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection