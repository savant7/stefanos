<?php

namespace App\Http\Controllers;

use App\Prospect;
use Illuminate\Http\Request;
use App\UserCustom;
use App\ProspectTask;
use App\ProspectCampaign;

class ProspectController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $prospects = Prospect::all();
        return view('prospect.index', compact('prospects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $item = null;
        $type = 'prospect';
        $title = 'Add Prospect';
        $ucustoms = UserCustom::first();
        $labels = getLabels($ucustoms);
        return view('client.show', compact('item', 'type', 'labels', 'title', 'ucustoms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'firstname1' => ['required',],
            'lastname1' => ['required'],
        ]);
        $data = $request->all();
        if ($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
        Prospect::create($data);

        return redirect()->route('prospects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect) {
        return $this->edit($prospect);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect) {
        $item = $prospect;
        $tasks = ProspectTask::where('contactprospectmain_id' , $prospect->id)->get();
        $emails = ProspectCampaign::where('contactprospectmain_id' , $prospect->id)->get();
        $campaigns = ProspectCampaign::where('contactprospectmain_id' , $prospect->id)->whereNotNull('sentdate')->get();
        $billings = [];
        $type = 'prospect';
        $title = 'View / Edit Prospect';
        $ucustoms = UserCustom::first();
        $labels = getLabels($ucustoms);
        return view('client.show', compact('item', 'type', 'labels', 'title', 'ucustoms', 'tasks', 'emails', 'campaigns', 'billings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect) {

        $data = $request->except(['_method', '_token']);

        if (isset($data['relatedclient_id'])) {
        if ($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
            $prospect->relatedclient_id = $data['relatedclient_id'];
        }
        $prospect->save();
        
        Prospect::where('id', $prospect->id)->update($data);
        
        return redirect()->route('prospects.edit', ['prospect' => $prospect->id])->with('success', "Prospect updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect) {
        return redirect()->route('prospect.index')->with('error', "No deleting allowed.  Make the record Inactive to appear at bottom of list.");
    }

}
