<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    public function generateCertificates(Request $request)
    {
        $services = $request->input('services', []);

        $student = Student::find($request->student_id);

        foreach ($services as $service) {
            switch ($service) {
                case 'certificate_good_moral':
                    $pdf = $this->generateCertificateOfGoodMoral($student);
                    $filename = $this->generateUniqueFilename($student->name, 'certificate_good_moral.pdf');
                    $pdf->save(storage_path('certificates/' . $filename));
                    $this->openInChrome(storage_path('certificates/' . $filename));
                    break;
                case 'certificate_honor':
                    $pdf = $this->generateCertificateOfHonor($student);
                    $filename = $this->generateUniqueFilename($student->name, 'certificate_honor.pdf');
                    $pdf->save(storage_path('certificates/' . $filename));
                    $this->openInChrome(storage_path('certificates/' . $filename));
                    break;
                case 'certificate_enrollment':
                    $pdf = $this->generateCertificateOfEnrollment($student);
                    $filename = $this->generateUniqueFilename($student->name, 'certificate_enrollment.pdf');
                    $pdf->save(storage_path('certificates/' . $filename));
                    $this->openInChrome(storage_path('certificates/' . $filename));
                    break;
            }
        }
        return redirect()->back()->with('success', 'Certificates generated successfully!');
    }

    private function generateCertificateOfGoodMoral($student)
    {

        $pdf = PDF::loadView('certificate_of_good_moral', compact('student'));
        return $pdf;
    }

    private function generateCertificateOfHonor($student)
    {
        $pdf = PDF::loadView('certificate_of_honor', compact('student'));

        return $pdf;
    }

    private function generateCertificateOfEnrollment($student)
    {
        // Generate the PDF for Certificate of Enrollment
        // Modify the code here to generate the certificate using the provided template or design your own

        $pdf = PDF::loadView('certificate_of_enrollment', compact('student'));
        // Modify the PDF generation code according to your requirements
        // ...

        return $pdf;
    }
    
    private function generateUniqueFilename($name, $originalFilename)
    {
        $filename = Str::slug($name) . '_' . time() . '_' . $originalFilename;
        return $filename;
    }
    
    private function openInChrome($filePath)
    {
        exec('start chrome "' . $filePath . '"');
    }
}
