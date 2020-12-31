@extends('Layouts.Master')

@section('title', 'Home')

@section('content')
<div style="background-color: #B0E0E6">

<!-- Page Content -->
<div class="container" style="background-color: #B0E0E6">

  <div class="row" >

    <div class="col-lg-3" >

      <h1 class="my-4">Kuliner Malang</h1>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://www.itrip.id/wp-content/uploads/2019/11/Bakso-President.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.itrip.id/wp-content/uploads/2019/11/Pos-Ketan-Legenda.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.itrip.id/wp-content/uploads/2019/11/Bakso-Bakar-Pahlawan-Trip.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.itrip.id/wp-content/uploads/2019/11/Pecel-Kawi.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.itrip.id/wp-content/uploads/2019/11/Depot-Tahu-Lontong-Lonceng.jpg" alt="Fifth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          @foreach ($article as $artic)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{('storage/'.$artic->imageurl)}}" alt=""></a>
              <div class="card-body" style="background-color: #B0C4DE">
                <h4 class="card-title">
                  <p>{{ $artic->title }}</p>
                </h4>
                <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
              </div>
              <div class="card-footer" style="background-color: #778899">
                <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Read More &rarr;</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->