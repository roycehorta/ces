<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
        }
        .logo-left {
            float: left;
        }
        .logo-right {
            float: right;
        }
        .footer {
            font-size: 11px;
            text-align: center;
        }
        .content {
            font-size: 16px;
        }
        .content p {
            margin: 0;
        }
        .content p.name {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <p>
            Republic of the Philippines<br>
            <strong>DEPARTMENT OF EDUCATION</strong><br>
            Region I<br>
            <strong>SCHOOLS DIVISION OFFICE OF URDANETA CITY</strong><br>
            <strong>Cluster 6</strong><br>
            <strong>CAYAMBANAN ELEMENTARY SCHOOL</strong><br>
            <strong>School ID: 102291</strong><br>
            <strong>Cayambanan, Urdaneta City, Pangasinan 2428</strong>
        </p>
        <hr>
    </div>
    <br>
    <center><h2>CERTIFICATE OF HONOR</h2></center>
    <br>
    <div class="content" style="line-height: 1.15;">
        <p>
            This is to certify that <strong>{{ $student->name }}&nbsp; {{ $student->middlename }}&nbsp;{{ $student->lastname }} &nbsp;</strong> with a <strong>Learner Reference Number</strong> {{ $student->lrn }},
            graduated from this school <strong>{{ $student->acad_standing }}</strong> in the {{ $student->school_year_start }}-{{ $student->school_year_end }} academic year.
            As a result, he is in the top 10% of the {{ $student->batch }} graduating class.
        </p>
        <br>
        <p>
            This certification is being issued upon the request of the above-named person for enrollment purposes.
        </p>
        <br>
        <p>
            Issued this {{ date('jS \Day \of F, Y') }} at Cayambanan Elementary School, Cayambanan, Urdaneta City, Pangasinan.<br>
        </p>
        <br><br><br><br><br>
        <p>
            <strong>{{ $student->adviser }}</strong><br>
            Class Adviser
        </p>
        <br><br><br><br><br
        <p>
            Certified true and correct:
        </p>
        <br>
        <p>
           <strong>ROWENA C. MANABAT, EdD</strong><br>
           
        </p>
        <p>&nbsp;Principal III</p>
    </div>    
    
    <br><br><br><br><br>
    <p>*Not valid without a school dry seal.</p>
    <hr>
    <div class="footer">
        <p>
            Zone 3 Barangay Cayambanan, Urdaneta City, Pangasinan<br>
            Contact No. 09163308747<br>
            102291@deped.gov.ph
        </p>
    </div>
</body>
</html>
