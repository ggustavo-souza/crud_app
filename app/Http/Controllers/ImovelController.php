<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imovels = Imovel::latest()->paginate(10);
        return view("imovels.index", compact("imovels"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("imovels.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'endereco' => 'required|string|max:255',
            'descricao' => 'required|string',
            'proprietario' => 'required|string',
            'foto' => 'string',
        ]);

        Imovel::create($request->all());

        return redirect()->route('imovels.index')
            ->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(Imovel $imovel)
    {
        return view('imoveis.show', compact('imovel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imovel $imovel)
    {
        return view("imovels.edit", compact('imovel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imovel $imovel)
    {
        $request->validate([
            'endereco' => 'required|string|max:255',
            'descricao' => 'required|string',
            'proprietario' => 'required|string',
            'foto' => 'string',
        ]);

        $imovel->update($request->all());

        return redirect()->route('imoveis.index')
                        ->with('success','Imóvel atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imovel $imovel)
    {
        $imovel->delete();

        return redirect()->route('imoveis.index')
                            ->with('success','Imóvel deletado com sucesso!');

    }
}
