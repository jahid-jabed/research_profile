@extends('layouts.app')

@section('title')
    About
@endsection

@section('banner')
    
@endsection

@section('content')
<div class="about">
    <div class="container">
        <div class="w3ls-title">
            <h2 class="agileits-title">About Me</h2>
        </div>
        <div class="about-agileinfo"> 
            <div class="col-md-4 col-sm-4 about-left ">
                <img src="{{ asset('images/img1.jpg') }}" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-8 col-sm-8 about-right wthree">
                <h3>Hi, i'm <span>Wikolia Mark </span></h3>
                <h4>Web Designer & Developer </h4>
                <ul class="address">
                    <li>
                        <ul class="agileits-address-text ">
                            <li><b>D.O.B :</b></li>
                            <li>23-06-1980</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="agileits-address-text">
                            <li><b>PHONE : </b></li>
                            <li>+00 111 222 3333</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="agileits-address-text">
                            <li><b>ADDRESS :</b></li>
                            <li>756 global Place, North Sydney, Canada.</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="agileits-address-text">
                            <li><b>E-MAIL :</b></li>
                            <li><a href="mailto:example@mail.com"> mail@example.com</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="agileits-address-text">
                            <li><b>WEBSITE :</b></li>
                            <li><a href="http://w3layouts.com">www.myresume.com</a></li>
                        </ul>
                    </li>
                </ul> 
                <div class="social-wthree-icons">
                    <ul>
                        <li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                        <li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li> 
                    </ul>
                    <div class="clearfix"> </div>
                </div> 
                <div class="hire-w3lgrids">
                    <a href="#" class="wthree-more nina" data-text="DOWNLOAD CV"> 
                        <span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>d</span> <span>c</span><span>v</span>					
                    </a> 
                    <a href="#" class="wthree-more w3more1 nina" data-text="hire me"> 
                        <span>h</span><span>i</span><span>r</span><span>e</span> <span>m</span><span>e</span>
                    </a>
                </div>  
            </div> 
            <div class="clearfix"> </div> 
            <div class="about-text agileits-w3layouts"> 
                <p> Aliquam aliquet sapien quis mauris semper suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh sed accumsan quam. 
                Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut.<br>Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh sed accumsan quam. 
                uspendisse laoreet sem sit amet dolor luctus pellentesque Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut eleifend tellus at interdum elementum.</p>
            </div>
        </div> 
    </div>
</div>
@endsection
