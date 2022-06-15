<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Daftar Hasil Kusioner Pengguna</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">

                    </div>
                </div>
                <div class="container">
                    <div class="table-responsive col-lg-10">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nilai Test</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Lihat Tes</th>
                                    <th scope="col">Lihat Profil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userInputs as $userInput)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    </td>
                                    <td>{{ $userInput->user->name }}</td>
                                    <td>{{ $userInput->user->email }}</td>
                                    <td>{{ $userInput->hasil_jawaban}}</td>
                                    @if ( $userInput->status ==0)
                                         <td>Pre</td>
                                    @else
                                         <td>Post</td>
                                    @endif
                                   
                                    <td>
                                        <a href="/dashboard/posts/{{ $userInput->id }}" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                    </td>
                                    <td>
                                        <a href="/dashboard/posts/{{ $userInput->user->id }}/edit" class="badge bg-warning"><span
                                                data-feather="eye"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>