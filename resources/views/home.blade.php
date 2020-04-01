@extends('layout.calque')
@section('title','home page')
@section('route','/login')
@section('page','LOGIN')

@section('container')
<div class="container mt-5 pt-5 text-center">
     <i class="fas fa-desktop" style="font-size: 60px;"></i>
       <h1 class="text-uppercase" style="font-weight:bold;font-family:monospace;">Total Machines: {{$nball}}</h1>
       <hr>
    </div>


    <div class="container mt-5">
    
       <div class="row">
      @foreach($dep as $d)
      <div class="col-md-3 ">

       <div class="card bg-dark text-white mb-3">
          <div class="card-header text-center text-uppercase" style="font-family: monospace;font-size:17px">
               {{$d['label_d']}}
          </div>
          <div class="card-body text-center">
               <h5 class="card-title"> <i class="fas fa-desktop fa-lg" ></i></h5>
               @foreach($nbmd as $key=>$nbm)
                 @if($nbm['id'] == $d['id'])
               <p class="card-text"> {{$nbm['number']}}</p>
               <!-- hené el count mata3tinech 0 ki ykoun famma departement bléch machine alors 3malna
               condition ki yousel el a5er el boucle (langueur ta3 tableau) yrajja3 0 -->
                        @break;
                  @elseif($key == count($nbmd)-1)
                  <p class="card-text"> 0 </p>
                 @endif
               @endforeach

               <h5 class="card-title"> <i class="fas fa-exclamation-triangle text-danger"></i></h5>
                @foreach($nbad as $key=>$nba)
                 @if($nba['id'] == $d['id'])
               <p class="card-text">{{$nba['number']}}</p>
                 @break;
                 @elseif($key == count($nbad)-1)
                  <p class="card-text">0</p>
                 @endif

                @endforeach

          </div>
       </div>
    
       </div>
       @endforeach
    </div>
   

   </div>
@endsection
