<?php

namespace App\Http\Controllers;
use App\Repository\InscriptionRepository;
use App\Http\Requests\ValidateForm;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index(){
        return view('inscription.form');
    }

    public function create(ValidateForm $request){
        $validatedData = $request->validated();
        $this->InscriptionRepository->create($validatedData);
    }
}
