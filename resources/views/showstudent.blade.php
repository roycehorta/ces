<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cayambanan ES</title>
    <link href="{{ URL('images/logo.jpg') }}" rel="icon">
    <link rel="stylesheet" href="{{asset('css/syle.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
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
        .form-fields-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .form-fields-container .form-group {
            flex-basis: calc(50% - 10px);
        }

    </style>

</head>
<body class="antialiased"><br>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8"> <!-- Increase the column size to make the card wider -->
                <div class="card" style="width: 1000px; height: 950px; opacity: 0.8;"> <!-- Adjust the width of the card -->
                    <div class="card-body">
                        
                        <br>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <a href="/student" class="btn btn-danger mb-3">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <form id="certificateForm" method="POST" action="{{ route('generate.certificates') }}">
                                <button type="submit" class="btn btn-primary mb-3">
                                    <i class="fas fa-print"></i> Generate Certificates
                                </button>
                            </div>
                            <br>
                            <div class="form-fields-container">
                                @csrf
                                <input type="hidden" name="student_id" value="{{ $student->id }}">
                                <div class="form-group">
                                    <label for="services">Choose Services:</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="certificate_good_moral" id="certificate_good_moral">
                                        <label class="form-check-label" for="certificate_good_moral">Certificate of Good Moral Character</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="certificate_honor" id="certificate_honor">
                                        <label class="form-check-label" for="certificate_honor">Certificate of Honor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="certificate_enrollment" id="certificate_enrollment">
                                        <label class="form-check-label" for="certificate_enrollment">Certificate of Enrollment</label>
                                    </div>
                                </div>
                            </form>
                            
                            </div>
                          </div><br>
                        <hr>       
                        <div class="text-center">
                            <img src="{{ URL('assets/images/logo.jpg') }}" alt="Cayambanan Elementary School" class="mx-auto mt-4" style="max-width: 100px;">
                        </div>                 
                        <center><h5>VIEW STUDENT RECORD</h5></center>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="lrn" class="form-label">Learner Reference Number</label>
                                <input type="text" class="form-control" id="lrn" name="lrn" value="{{ $student->lrn }}" disabled>
                            </div>                                
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middlename" value="{{ $student->middlename }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastname" value="{{ $student->lastname }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="top" class="form-label">Academic Award</label>
                                <input type="text" class="form-control" id="top" name="acad_standing" value="{{ $student->acad_standing }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rank" class="form-label">Class Rank</label>
                                <input type="text" class="form-control" id="rank" name="top" value="{{ $student->top }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="form137" class="form-label">Form 137</label>
                                <input type="file" class="form-control" name="file_form137" value="{{ $student->file_form137 }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="moralRecord" class="form-label">Moral Record</label>
                                <input type="text" class="form-control" id="moralRecord" name="moral_record" value="{{ $student->moral_record }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="adviser" class="form-label">Adviser</label>
                                <input type="text" class="form-control" id="adviser" name="adviser" value="{{ $student->adviser }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printCertificates() {
            document.getElementById("certificateForm").submit();
        }
    </script>
</body>
</html>
