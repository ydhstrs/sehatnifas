@extends('layouts.app')



@section('content')

@if ($user_result_count>=2)
    <div class="container py-5 center">
    <center>
        <img src="{{ asset('storage/images/done.svg') }}" alt="Done image" class="img-fluid center"
            style="height: 400px" />
        <div class="container py-4">
            <h1>Ibu Telah Menyelesaikan Pre Test dan Post Test</h1>

        </div>
@else
    
<div class="container mb-5">
 <div class="py-5 text-center ">
      <h2>Kusioner Pengetahuan Sehat Nifas</h2>
      @if ($user_result_count==0)
             <p class="lead">Pre Test</p>   
      @else
                <p class="lead">Post Test</p
      @endif
      <p class="lead">Ayo Ibu jawab pertanyaan pertanyaan berikut</p>
    </div>


      <div class="col card p-5">
        <form class="needs-validation"  method="POST" action="{{ Route('insertKusioner') }}">
          @csrf
          @method('POST')
            <div>
              @foreach ($kusioners as $kusioner)
              <div class="col">
                <label for="firstName" class="form-label">{{ $loop->iteration}}. {{ $kusioner->soal}}</label>
              <div class="col">
                <input type="radio" id="opsi1" name="jawaban{{$loop->iteration}}" value="1" required>
                <label for="html">{{$kusioner->opsi1}}</label><br>
  
                <input type="radio" id="opsi2" name="jawaban{{$loop->iteration}}" value="2" required>
                <label for="css">{{$kusioner->opsi2}}</label><br>
  
                <input type="radio" id="opsi3" name="jawaban{{$loop->iteration}}" value="3" required>
                <label for="javascript">{{$kusioner->opsi3}}</label><br>
  
                <input type="radio" id="opsi4" name="jawaban{{$loop->iteration}}" value="4" required>
                <label for="javascript">{{$kusioner->opsi4}}</label>

                <input hidden name="kusionerId{{$loop->iteration}}" value="{{$kusioner->id}}" required>
              </div>
              </div>
              <br/>
              @endforeach
  
            <hr class="my-4">
            <input hidden id="opsi3" name="jumlah_soal" value="{{$kusioners->count()}}">
            <button  class="customButton buttonRounded custom-bg-blue h6 w-100"type="submit">Kirim Jawaban</button>
            </div>
        </form>
      </div>
    </div>
@endif

@endsection