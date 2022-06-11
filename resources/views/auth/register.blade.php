<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">

</head>

<body>
    <section class="vh-100 py-2 px-2">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('storage/images/register_image.png') }}" alt="login form"
                                    class="img-fluid align-items-end" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">Sehat Nifas</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your
                                            account</h5>

                                        <div class="form-outline mb-4">

                                            <label for="name"
                                                class="form-label">{{ __('Name') }}</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Umur') }}</label>
                                            <input id="age" type="age"
                                                class="form-control @error('age') is-invalid @enderror" name="age"
                                                value="{{ old('age') }}" required autocomplete="age" autofocus>
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
                                                value="{{ old('lastEducation') }}" required autocomplete="lastEducation" autofocus>
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
                                                value="{{ old('profession') }}" required autocomplete="profession" autofocus>
                                        </div>
                                        @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $profession }}</strong>
                                        </span>
                                        @enderror
                                        <!-- end new form -->
                                        <!-- new form -->
                                       <!-- end new form -->
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Pekerjaan') }}</label>
                                            <input id="profession" type="profession"
                                                class="form-control @error('profession') is-invalid @enderror" name="profession"
                                                value="{{ old('profession') }}" required autocomplete="profession" autofocus>
                                        </div>
                                        @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $agama }}</strong>
                                        </span>
                                        @enderror
                                        <!-- end new form -->
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Agama') }}</label>
                                            <input id="agama" type="agama"
                                                class="form-control @error('agama') is-invalid @enderror" name="agama"
                                                value="{{ old('agama') }}" required autocomplete="agama" autofocus>
                                        </div>
                                        <!-- end new form -->
                                        <!-- new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label"
                                                for="form2Example17">{{ __('Anak Ke') }}</label>
                                            <input id="currentChildren" type="currentChildren"
                                                class="form-control @error('currentChildren') is-invalid @enderror" name="currentChildren"
                                                value="{{ old('currentChildren') }}" required autocomplete="currentChildren" autofocus>
                                        </div>
                                        @error('currentChildren')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $currentChildren}}</strong>
                                        </span>
                                        @enderror
                                        <!-- end new form -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-outline mb-4">
                                        <label for="password-confirm"
                                        class="form-label">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="">
                                            <button class="customButton buttonRounded custom-bg-blue w-100"
                                                type="submit">{{ __('Register') }}</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>