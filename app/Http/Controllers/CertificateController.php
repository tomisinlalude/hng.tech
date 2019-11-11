<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use PDF;

class CertificateController extends Controller
{

  public function printPDF()
     {
        // This  $data array will be passed to our PDF blade
        $data = [
           'title' => 'First PDF for Medium',
           'heading' => 'Hello from 99Points.info',
           'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
             ];

         $pdf = PDF::loadView('pdf_view', $data);
         return $pdf->download('medium.pdf');
     }

  public function index() {
    // $data = [
    //    'title' => 'First PDF for Medium',
    //    'heading' => 'Hello from 99Points.info',
    //    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
    //      ];
    $pdf =  PDF::loadView('certificate.intermediate_cert');
    return $pdf->stream();
    // PDF::loadHTML("<h1>test</h1>")->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
  //
  // return  $pdf->stream('download.pdf');
    // dd($users);
    // $users = \App\Hnginternship::all();
    // foreach ($users as $key => $value) {
    //   dd($value->fullname);
    // }
      // return view('certificate.intermediate_cert');
  }

  public function certificate(\Illuminate\Http\Request $request) {


              return redirect('/certification/');



  }


  public function export($slug) {

      $pdf = PDF::loadView('certificate', $name);
      return $pdf->stream('download.pdf');
  }

}
