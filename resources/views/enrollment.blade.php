<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h2>CERTIFICATE OF ENROLLMENT</h2>
    <p>
        This is to certify that {{ $student->name }} with a Learner Reference Number of {{ $student->lrn }},
        is presently enrolled in this school in {{ $student->acad_standing }} for the school year {{ $student->school_year_start }}-{{ $student->school_year_end }}.
    </p>
    <p>
        This certification is being issued upon the request of the above-named person for whatever legal purpose it may serve.
    </p>
    <p>
        Issued this {{ date('jS \Day \of F, Y') }} at {{ $student->adviser_school }}, {{ $student->adviser_city }}, {{ $student->adviser_province }}.
    </p>
    <br>
    <p>
        <strong>{{ $student->adviser_name }}</strong><br>
        Class Adviser
    </p>
    <br>
    <p>
        Certified true and correct:
    </p>
    <p>
        <strong>{{ $student->name }}</strong><br>
        {{ $student->position }}{{ $student->rank }}
    </p>
</body>
</html>
