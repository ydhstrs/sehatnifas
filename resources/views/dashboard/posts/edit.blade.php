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
        <h1 class="h2">Halaman Detail Profil Pengguna</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
      <div class="container">
      <div class="table-responsive col-lg-10">
        @csrf
          <div class="form-outline mb-4">
            <label for="name" class="form-label"> Nama </label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
              value="{{$usere->name}}" required autocomplete="name" disabled>
            </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example17">{{ __('Email Address') }}</label>
                                              <input id="email" type="email"
                                                  class="form-control @error('email') is-invalid @enderror" name="email"
                                                  value="{{$usere->email}}" required autocomplete="email" disabled>
                                        </div>
                                        
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Umur') }}</label>
                                            <input id="age" type="age"
                                                class="form-control @error('age') is-invalid @enderror" name="age"
                                                value="{{$usere->age}}" required autocomplete="age" disabled>
                                        </div>
                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $age }}</strong>
                                        </span>
                                        @enderror
                                        <!-- end new form -->
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Pendidikan Terakhir') }}</label>
                                            <input id="lastEducation" type="lastEducation"
                                                class="form-control @error('lastEducation') is-invalid @enderror" name="lastEducation"
                                                value="{{$usere->lastEducation}}" required autocomplete="lastEducation" readonly    >
                                        </div>
                                        @error('lastEducation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $lastEducation }}</strong>
                                        </span>
                                        @enderror
                                        <!-- end new form -->
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Pekerjaan') }}</label>
                                            <input id="profession" type="profession"
                                                class="form-control @error('profession') is-invalid @enderror" name="profession"
                                                value="{{$usere->profession}}" required autocomplete="profession" disabled>
                                        </div>
                                        <!-- end new form -->
                                                                                <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Agama   ') }}</label>
                                            <input id="profession" type="profession"
                                                class="form-control @error('profession') is-invalid @enderror" name="profession"
                                                value="{{$usere->agama}}" required autocomplete="profession" disabled>
                                        </div>
                                        <!-- end new form -->
                                        
                                        <!-- new form -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Jumlah Anak') }}</label>
                                            <input id="numberOfChildren" type="numberOfChildren"
                                                class="form-control @error('numberOfChildren') is-invalid @enderror" name="numberOfChildren"
                                                value="{{$usere->numberOfChildren}}" required autocomplete="numberOfChildren" disabled>
                                        </div>
                                                                             <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Anak Ke') }}</label>
                                            <input id="currentChildren" type="currentChildren"
                                                class="form-control @error('currentChildren') is-invalid @enderror" name="currentChildren"
                  value="{{$usere->currentChildren}}" required autocomplete="currentChildren" disabled>
            </div>
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