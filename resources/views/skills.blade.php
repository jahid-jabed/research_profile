@extends('layouts.app')

@section('title')
    Skills
@endsection

@section('banner')
    
@endsection

@section('content')  
	<!-- skills -->
	<div class="about skills">
		<div class="container">
			<div class="w3ls-title">
				<h2 class="agileits-title">My skills</h2>
			</div>
			<div class="skill-agileinfo">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut. Proin id diam id nisi sagittis pellentesque sed sit amet eros.</p>
				<div class="skill-grids">
					<div class="col-md-4 col-sm-4 skills-w3lsleft">
						<h4>Extra Skills</h4>
						<ul>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>vitae sagittis mauris</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Sed fermentum turpis</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Quisque faucibus diam</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Nunc eleifend vehicula</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>vitae sagittis mauris</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Sed fermentum turpis</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Quisque faucibus diam</li>
							<li><i class="fa fa-check-square-o" aria-hidden="true"></i>Nunc eleifend vehicula</li>
						</ul>
					</div>
					<div class="col-md-8 col-sm-8 skills-w3lsright">
						<h4>Technical Skills</h4>
						<div class="skillbar" data-percent="98">
							<span class="skillbar-title" style="background:#e08808;">HTML5</span>
							<p class="skillbar-bar" style="background: #ff9d0d;"></p>
							<span class="skill-bar-percent"></span>
						</div>
						<!-- End Skill Bar --> 
						<div class="skillbar" data-percent="99">
							<span class="skillbar-title" style="background:#0396d8;">CSS3</span>
							<p class="skillbar-bar" style="background:#03A9F4;"></p>
							<span class="skill-bar-percent"></span>
						</div>
						<!-- End Skill Bar --> 
						<div class="skillbar" data-percent="95">
							<span class="skillbar-title" style="background:#9226a4;">jQuery</span>
							<p class="skillbar-bar" style="background:#b32eca;"></p>
							<span class="skill-bar-percent"></span>
						</div>
						<!-- End Skill Bar --> 
						<div class="skillbar" data-percent="70">
							<span class="skillbar-title" style="background:#028679;">PHP</span>
							<p class="skillbar-bar" style="background: #009688;"></p>
							<span class="skill-bar-percent"></span>
						</div>
						<!-- End Skill Bar -->  
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- Stats --> 
				<div class="stats news-w3layouts">  
					<div class="stats-info agileits-w3layouts">
						<div class="col-sm-3 col-xs-6 stats-grid">
							<div class="stats-img">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
							<p>Happy Clients</p>
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000' data-delay='.5' data-increment="100">157000</div>
						</div>
						<div class="col-sm-3 col-xs-6 stats-grid">
							<div class="stats-img w3-agileits">
								<i class="fa fa-clone" aria-hidden="true"></i>
							</div>
							<p>Our Events</p>
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8' data-increment="1">850</div>
						</div>
						<div class="col-sm-3 col-xs-6 stats-grid">
							<div class="stats-img w3-agileits">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>	
							<p>Projects</p> 
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='80000' data-delay='.5' data-increment="100">80000</div>
						</div>
						<div class="col-sm-3 col-xs-6 stats-grid">
							<div class="stats-img w3-agileits">
								<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							</div>
							<p>Awards</p>
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='269' data-delay='8' data-increment="1">269</div>
						</div>
						<div class="clearfix"></div>
					</div> 
				</div> 
				<!-- //Stats -->   
			</div> 
		</div> 
	</div>
	<!-- //skills -->
@endsection