<?php

namespace App\Http\Controllers;
// agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Soporte;
use Inertia\Inertia;

class SoporteController extends Controller
{
  


    public function index()
    {
        $soporte = Soporte::paginate(5);
        // Renderiza la vista utilizando Inertia y pasa la colección de inventarios
        return Inertia::render('soporte', ['soporte' => $soporte]);
    }

}
