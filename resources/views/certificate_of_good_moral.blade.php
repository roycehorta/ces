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
    <h2 style="text-align: center; font-family: Arial, sans-serif; font-size: 20px;">CERTIFICATE OF GOOD MORAL CHARACTER</h2>
    <br>
    <div class="content" style="line-height: 1.15;">
        <p style="text-indent: 24px;">
            
            This is to certify that <strong>{{ $student->name }}&nbsp; {{ $student->middlename }}&nbsp;{{ $student->lastname }} &nbsp;</strong> with a <strong>Learner Reference Number</strong> {{ $student->lrn }} </strong>, is a graduate of this school in the School Year <?php echo $student->school_year_start; ?>-<?php echo $student->school_year_end; ?>.
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Records show that she/he is a person of good moral character and bears no record of misdemeanor on file.
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is being issued upon the request of the above-named person for whatever legal purpose it may serve.
        </p>
        <br>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued this <?php echo date('jS \Day \of F, Y'); ?> at Cayambanan Elementary School, Cayambanan, <br>
         Urdaneta City, Pangasinan.
        </p>
        <br>
        <br><br><br>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $student->adviser; ?></strong><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Class Adviser
        </p>
        <br><br><br>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Certified true and correct:<br><br><br>
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;<strong>ROWENA C. MANABAT, EdD</strong><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Principal III
        </p>
    </div>    
    
    <br><br><br><br><br><br>
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
