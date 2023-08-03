@extends('pages/main')

@section('content')
<div class="container">
<div class="row">
    @foreach($tampildata as $booking)
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h4>{{$booking->nama_merk}}</h4>
                <p>{{$total}}</p>
                <h5>Tanggal {{$booking->tanggal_awal}} </h5>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection