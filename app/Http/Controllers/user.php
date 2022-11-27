<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class user extends Controller
{

    public function index(){
        $user=ModelsUser::paginate(10);

        return view('welcome',compact('user'));
    }

    public function print(){
        $data=ModelsUser::paginate(10);
       $view='pdf';
        $pdf = Pdf::loadView($view, ['user'=>$data]);

        return $pdf->download('user.pdf');
    }
}