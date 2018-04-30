<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Importador extends Controller
{
   public function agregarImportador()
   {
   		return view('tmp_Importador/addImport');
   }
}
