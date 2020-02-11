<?php

namespace App\Http\Controllers;

use App\Prospect;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospects = Prospect::all();
        return view('prospect.index', compact('prospects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospect.create', ['item' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname1' => ['required',],
            'lastname1' => ['required'],
        ]);
        $data = $request->all();
        if($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
        $prospect = Client::create($data);
        
        return redirect()->route('prospects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        return view('prospect.show', ['item' => $prospect]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        return view('prospect.show', ['item' => $prospect]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        $request->validate([
            'firstname1' => ['required',],
            'lastname1' => ['required'],
        ]);
        
        $data = $request->except(['_method', '_token']);
        
        if($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
        
        Prospect::where('id', $prospect->id)->update($data);
        return redirect()->route('prospects.edit', ['prospect' => $prospect->id])->with('success', "Prospect updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        //
    }
}
