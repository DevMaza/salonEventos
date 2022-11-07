<?php

namespace App\Http\Controllers;

use App\Models\Serivicio;
use Illuminate\Http\Request;

/**
 * Class SerivicioController
 * @package App\Http\Controllers
 */
class SerivicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serivicios = Serivicio::paginate();

        return view('serivicio.index', compact('serivicios'))
            ->with('i', (request()->input('page', 1) - 1) * $serivicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serivicio = new Serivicio();
        return view('serivicio.create', compact('serivicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Serivicio::$rules);

        $serivicio = Serivicio::create($request->all());

        return redirect()->route('serivicios.index')
            ->with('success', 'Serivicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serivicio = Serivicio::find($id);

        return view('serivicio.show', compact('serivicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serivicio = Serivicio::find($id);

        return view('serivicio.edit', compact('serivicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Serivicio $serivicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serivicio $serivicio)
    {
        request()->validate(Serivicio::$rules);

        $serivicio->update($request->all());

        return redirect()->route('serivicios.index')
            ->with('success', 'Serivicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $serivicio = Serivicio::find($id)->delete();

        return redirect()->route('serivicios.index')
            ->with('success', 'Serivicio deleted successfully');
    }
}
