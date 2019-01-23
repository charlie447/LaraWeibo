@extends('layouts.default')
@section('content')


  <div class="row" id="headline">
    <h1 class="col-12 text-center">Welcome Home! Charlie.</h1>
  </div>
  <div class="row">

    <div id="carouselDemo" class="carousel slide col-8 offset-2" data-ride="carousel">

    <!-- 指示符 -->
    <ul class="carousel-indicators">
      <li data-target="#carouselDemo" data-slide-to="0" class="active"></li>
      <li data-target="#carouselDemo" data-slide-to="1"></li>
      <li data-target="#carouselDemo" data-slide-to="2"></li>
    </ul>

    <!-- 轮播图片 -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://static.runoob.com/images/mix/img_fjords_wide.jpg">
      </div>
      <div class="carousel-item">
        <img src="http://static.runoob.com/images/mix/img_nature_wide.jpg">
      </div>
      <div class="carousel-item">
        <img src="http://static.runoob.com/images/mix/img_mountains_wide.jpg">
      </div>
    </div>

    <!-- 左右切换按钮 -->
    <a class="carousel-control-prev" href="#carouselDemo" data-slide="prev" role="button">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselDemo" data-slide="next" role="button">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  </div>


  <!-- 注册块 -->
  <div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
    你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.5">Laravel 入门教程</a> 的示例项目主页。
  </p>
  <p>
    一切，将从这里开始。
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
  </p>
</div>


@stop
