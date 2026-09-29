<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();

        return view('tenant.index', compact('tenants'));
    }

    public function create()
    {
        return view('tenant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rental' => 'required',
            'subdomain' => 'required|unique:tb_tenant,subdomain',
            'alamat' => 'nullable',
            'telepon' => 'nullable',
            'email' => 'nullable|email',
            'status' => 'required',
        ]);

        Tenant::create([
            'nama_rental' => $request->nama_rental,
            'subdomain' => $request->subdomain,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('tenant.index')
            ->with('success', 'Tenant berhasil ditambahkan.');
    }
}