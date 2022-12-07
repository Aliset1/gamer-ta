<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

/**
 * Class IndividualController
 * @package App\Http\Controllers
 */
class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individuals = Individual::paginate();

        return view('individual.index', compact('individuals'))
            ->with('i', (request()->input('page', 1) - 1) * $individuals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $individual = new Individual();
        return view('individual.create', compact('individual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Individual::$rules);

        $individual = Individual::create($request->all());

        return redirect()->route('individuals.index')
            ->with('success', 'Individual created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $individual = Individual::find($id);

        return view('individual.show', compact('individual'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $individual = Individual::find($id);

        return view('individual.edit', compact('individual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Individual $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Individual $individual)
    {
        request()->validate(Individual::$rules);

        $individual->update($request->all());

        return redirect()->route('individuals.index')
            ->with('success', 'Individual updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $individual = Individual::find($id)->delete();

        return redirect()->route('individuals.index')
            ->with('success', 'Individual deleted successfully');
    }
}
