<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Nnjeim\World\WorldHelper;

class user extends Controller
{

    public function index(WorldHelper $world){

       $contries=$world->countries()->data;

       $cities=$world->cities([
        'filters' => [
            'country_id' => 182,
        ],
       ])->data;

        return view('welcome',compact(['contries','cities']));
    }

    public function print(){
        $data=ModelsUser::paginate(10);
       $view='pdf';
        $pdf = Pdf::loadView($view, ['user'=>$data]);

        return $pdf->download('user.pdf');
    }
}