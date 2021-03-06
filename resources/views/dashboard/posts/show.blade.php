<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .button {
  border: none;
  color: white;
  padding: 6px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">

@include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <form method="get" action="/dashboard/posts">
    <button class="button button2">Kembali</button>
  </form>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Detail Jawaban Pengguna</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
      <div class="container">
      <div class="table-responsive col-lg-10">

        @foreach ($answeres as $answere)
        <div class="col">
          <label for="firstName" class="form-label">{{ $loop->iteration}}. {{ $answere->kuesioners->soal}}</label>
        <div class="col">
          <input type="radio" id="opsi1" @if ($answere->answere==1)
          checked 
          @else
            disabled
          @endif>
          <label for="html">{{$answere->kuesioners->opsi1}}</label><br>
       
          <input type="radio" id="opsi2" @if ($answere->answere==2)
          checked 
          @else
            disabled
          @endif>
          <label for="css">{{$answere->kuesioners->opsi2}}</label><br>

          <input type="radio" id="opsi3" @if ($answere->answere==3)
          checked 
          @else
            disabled
          @endif>
          <label for="javascript">{{$answere->kuesioners->opsi3}}</label><br>

          <input type="radio" id="opsi4" @if ($answere->answere==4)
          checked 
          @else
            disabled
          @endif>
          <label for="javascript">{{$answere->kuesioners->opsi4}}</label>

        </div>
        </div>
        <br/>
        @endforeach

      </div>
    </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
  </body>
</html>
