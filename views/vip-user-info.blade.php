@extends('hanoivip::layouts.app') 
@section('title', 'VIP information') 
@section('content')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="wrapper__post-event">
	<div class="wrapper">
		<div class="container" style="color: white; margin-left: 30px;">
    		<div class="row" style="margin-bottom: 0px;">
    		
        		<div class="col-sm-6 col-md-8">
        			<h4>{{Auth::user()->getAuthIdentifierName()}}</h4>
        			<i class="glyphicon">VIP:</i> 
        			<img src="/images/vip{{$info->level}}.png"/><br />
        			<i class="glyphicon">VIP expires: {{empty($info->expires) ? "never" : Carbon::parse($info->expires)->format('d/M/Y m:H')}}</i> <br />
        			<div class="progress" style="color:black">
        				Need {{$info->nextLevelPoint - $info->point}} points
        				<div class="progress-bar" role="progressbar" style="width: {{$info->percentage}}%"
        					aria-valuenow="{{$info->point}}" aria-valuemin="{{$info->curLevelPoint}}"
        					aria-valuemax="{{$info->nextLevelPoint}}"></div>
        			</div>
        		</div>	
        	</div>
        </div>

        <div class="container" style="color: white; margin-left: 30px;">
    		<div class="row" style="margin-bottom: 0px;">
              <h2>VIP previleges</h2>
              
              <div class="col-sm-6 col-md-8">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                  
                    <div class="carousel-inner">
                      <div class="{{$info->level<=1?'item active':'item'}}">
                      	<h3>Level 1 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                      </div>
                
                      <div class="{{$info->level==2?'item active':'item'}}">
                      <h3>Level 2 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                      </div>
                    
                      <div class="{{$info->level==3?'item active':'item'}}">
                      <h3>Level 3 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                      </div>
                      
                      <div class="{{$info->level==4?'item active':'item'}}">
                      <h3>Level 4 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                        <p>Get the second VIPcode every month</p>
                      </div>
                      
                      <div class="{{$info->level==5?'item active':'item'}}">
                      <h3>Level 5 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                        <p>Get the second VIPcode every month</p>
                        <p>Access our webshop</p>
                      </div>
                      
                      <div class="{{$info->level==6?'item active':'item'}}">
                      <h3>Level 6 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                        <p>Get the second VIPcode every month</p>
                        <p>Access our webshop</p>
                        <p>In-game notifications</p>
                      </div>
                      
                      <div class="{{$info->level==7?'item active':'item'}}">
                      <h3>Level 7 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                        <p>Get the second VIPcode every month</p>
                        <p>Access our webshop</p>
                        <p>In-game notifications</p>
                        <p>Get the third VIPcode every month</p>
                      </div>
                      
                      <div class="{{$info->level==8?'item active':'item'}}">
                      <h3>Level 8 privileges</h3>
                        <p>Get 01 VIPcode every month</p>
                        <p>Quick and exclusive support from our GM</p>
                        <p>Get into VIP list in homepage</p>
                        <p>Get the second VIPcode every month</p>
                        <p>Access our webshop</p>
                        <p>In-game notifications</p>
                        <p>Get the third VIPcode every month</p>
                        <p>Get into "Handsome" list in homepage</p>
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
             </div>
        </div>
      
</div></div>
@endsection