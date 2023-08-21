<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index()
    {
        $suportes = Suporte::all();
        return view('admin.suporte.index', compact('suportes'));
    }

    public function create()
    {
        return view('admin.suporte.create');
    }

    public function store(Request $request)
    {
        $data              = $request->all();
        $data['id_status'] = 'a';
        Suporte::create($data);

        return redirect()->route('admin.suporte.index');
    }

    public function show(string|int $id)
    {
        $suporte = Suporte::find($id);

        return view('admin.suporte.show', compact('suporte'));
    }
}
