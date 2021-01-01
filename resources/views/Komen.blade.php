@extends('layouts.Master')

@section('title',' Komen ')

@section('content')

<br><br><br>
<!-- Page Content -->
<div class="container">
  
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('./resep') }}">Resep</a></li>
      <li class="breadcrumb-item active" aria-current="page">Komen</li>
    </ol>
  </nav>

  <div class="row">


    <!-- Post Content Column -->

    <div class="col-lg-12">

      <div class="card">
        <div class="card-header" style="background-color: #5F9EA0">
          {{ $komen->title }}
        </div>
        <div class="card-body" style="background-color: #F0FFFF">
          <blockquote class="blockquote mb-0">
            <p>{{ $komen->content }}</p>
          </blockquote>
        </div>
      </div>


    </div>

  </div>
  <!-- /.row -->

</div>
<br><br><br>
@endsection