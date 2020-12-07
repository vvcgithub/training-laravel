<?php
// This Laravel basic tutorial is made for VVC I.T Team

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// using the "DB" class, this will help you call models and create custom 
// queries to fetch from the database. For the database settings, go to ".env" file and
// and provide your database credentials.
use DB;

class SampleController extends Controller
{
    // this is the index.blade.php page created inside the resources/views/sample
    public function index() {

        // the "sample." is a folder name coming from the resources/views/sample
        // this is the way of calling a blade file inside a view folder
        return view('sample.index');
    }

    // *********************
    // REMINDER: The implementation below "sample_post_1" is excempted in using CSRF TOKEN.
    // CSRF TOKEN is used for security purpose which must ALWAYS be included in submit a form
    // or sending an object going to the backend.
    // 
    // To exempt a link from requiring CSRF token, the link should be registered inside "Middleware/VerifyCsrfToken.php".
    // *********************
    // This is method is a sample to post data from the frontend 
    // and request json data output from this sample backend
    public function sample_post_1(Request $request) {

        // the two values "firstname" and "lastnames" are passed by the frontend scripts.js file
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');

        // using response()->json, this will produce an object output that will be used by your javascript implementation
        return response()->json([
            'fname' => $fname,
            'lname' => $lname
        ]);
    }

    // *********************
    // REMINDER: The implementation below "sample_post_2" is NOT EXEMPTED in using CSRF TOKEN.
    // CSRF TOKEN is used for security purpose which must ALWAYS be included in submit a form
    // or sending an object going to the backend.
    //
    // Failure to include a CSRF in the frontend will produce an ERROR CODE 419 in the javascript console.
    // *********************
    // This is method is a sample to post data from the frontend 
    // and request json data output from this sample backend
    public function sample_post_2(Request $request) {

        // the two values "firstname" and "lastnames" are passed by the frontend scripts.js file
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');

        // using response()->json, this will produce an object output that will be used by your javascript implementation
        return response()->json([
            'fname' => $fname,
            'lname' => $lname
        ]);
    }    

    // This is method is a sample to fetch or request json data from this sample backend
    public function sample_get() {
        
        // using response()->json, this will produce an object output that will be used by your javascript implementation
        return response()->json([
            'name' => 'Juan Tamad'
        ]);
    }

    // This is a sample method using a DB class to create a custom query.
    // The departments method is registered in routes/web.php.
    public function departments() {

        // using a DB class, you can create a custom SQL query instead of using a Laravel model
        $depts = DB::select("select * from departments");

        // this is method is a sample to post data from the frontend 
        // and request json data output from this sample backend
        return view('sample.dept_list', ['depts' => $depts]);
    }

    // This is a sample method using a DB class to create a custom query
    // The departments_api method is registered in routes/api.php.
    // To call this via POSTMAN, just use the localhost url and add "/api/departments".
    public function departments_api() {

        $depts = DB::select("select * from departments");

        // using response()->json, this will produce an object output that will be used by your javascript implementation
        return response()->json($depts);
    }
}
