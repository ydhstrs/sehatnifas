@extends('layouts.app')

@section('content')
<div class="container mb-5">
 <div class="py-5 text-center ">
      <h2>Kusioner Pengetahuan Sehat Nifas</h2>
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
                <input type="radio" id="opsi1" name="jawaban{{$loop->iteration}}" value="1">
                <label for="html">{{$kusioner->opsi1}}</label><br>
  
                <input type="radio" id="opsi2" name="jawaban{{$loop->iteration}}" value="2">
                <label for="css">{{$kusioner->opsi2}}</label><br>
  
                <input type="radio" id="opsi3" name="jawaban{{$loop->iteration}}" value="3">
                <label for="javascript">{{$kusioner->opsi3}}</label><br>
  
                <input type="radio" id="opsi4" name="jawaban{{$loop->iteration}}" value="4">
                <label for="javascript">{{$kusioner->opsi4}}</label>

                <input hidden name="kusionerId{{$loop->iteration}}" value="{{$kusioner->id}}">
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
@endsection