<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cayambanan ES</title>
    <link href="{{ URL('images/logo.jpg') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/syle.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            /* background-color: white; Set background color to white */
            background: linear-gradient(to top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0), rgba(250, 250, 250, 0.4)), url("{{ URL('assets/images/banner.jpg') }}");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: fit-content;
            overflow-x: hidden;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 30px;
        }

        .toggle {
            margin-right: 500px;
        }
    </style>

</head>

<body class="antialiased"><br>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8">
                <!-- Increase the column size to make the card wider -->
                <div class="card" style="width: 1000px; opacity: 0.8;">
                    <!-- Adjust the width of the card -->
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL('assets/images/logo.jpg') }}" alt="Cayambanan Elementary School"
                                class="mx-auto mt-4" style="max-width: 100px;">
                        </div>
                        <a href="/schools" class="btn btn-danger mb-3">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <center>
                            <h5>PRINCIPAL'S INFORMATION</h5>
                        </center>
                        <br>
                        {{-- {{ route('schools.update', $schools->id) }}
                        /principals/{{$principal->principal_id}} --}}
                        <!-- Corrected line with updated URL -->
                        <form action="/principals/{{ $principal->id }}" method="POST" class="delete-link"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <a href="#" onclick="confirmDelete(event)">
                                <i class="bx bx-trash"></i>
                            </a>
                        </form>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $principal->name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middlename" name="middlename"
                                    value="{{ $principal->middlename }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    value="{{ $principal->lastname }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" name="position"
                                    value="{{ $principal->position }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rank" class="form-label">Rank</label>
                                <input type="text" class="form-control" id="rank" name="rank"
                                    value="{{ $principal->rank }}">

                            </div>
                            <br>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary" style="height: 50px; width: 600px;">UPDATE
                                PRINCIPAL'S INFORMATION</button>
                        </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
