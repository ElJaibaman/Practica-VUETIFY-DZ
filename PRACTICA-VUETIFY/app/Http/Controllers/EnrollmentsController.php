<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use Inertia\Inertia;

class EnrollmentsController extends Controller
{
    //
        public function index()
        {
            //
    
            //echo "Hola desde el controlador de Enrollments";
            //$enrollments = Enrollment::all();
            //dd($enrollments);
            //return inertia::render('Enrollments/Index', [
            //    //'enrollments' => $enrollments
            //]);

                return inertia::render('Enrollment/Index');
        }
    
        public function create()
        {
            //
            return inertia::render('Enrollment/Create');
        }
}
