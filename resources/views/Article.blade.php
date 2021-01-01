@extends('layouts.Master')

@section('title', 'Article')

@section('content')
<div style="background-color: #B0E0E6">

  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('./home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Article</li>
  </ol>
</nav>

  <!-- Page Content -->
  <div class="container" style="background-color: #B0E0E6">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Kuliner Malang</h1>

      </div>    

      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="card mb-3">
          <img src="{{asset('storage/'.$article->imageurl)}}" class="card-img-top" alt="">
          <div class="card-body" style="background-color: #B0C4DE">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{$article->content}}</p>
            <p class="card-text"><small class="text-muted">{{ $article-> created_at }}</small></p>
          </div>
        </div>

        
      </div>
      <!-- /.row -->

    </div>
  </div>
  <!-- /.container -->
  @endsection