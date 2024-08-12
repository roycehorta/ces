<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h2>CERTIFICATE OF HONOR</h2>
    <p>
        This is to certify that {{ $student->name }} with Learner Reference Number {{ $student->lrn }},
        graduated from this school with HONORS in the {{ $student->school_year_start }}-{{ $student->school_year_end }} academic year.
        As a result, he is in the top 10% of the {{ $student->batch }} graduating class.
    </p>
    <p>
        This certification is being issued upon the request of the above-named person for enrollment purposes.
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
        <strong>{{ $student->principal_name }}</strong><br>
        Principal III
    </p>
</body>
</html>
