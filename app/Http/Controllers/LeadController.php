<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;
use App\UserCustom;
use App\LeadTask;
use App\LeadCampaign;

class LeadController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $leads = Lead::all();
        return view('lead.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $item = null;
        $type = 'lead';
        $title = 'Add Lead';
        $ucustoms = UserCustom::first();
        $labels = getLabels($ucustoms);
        return view('client.show',compact('item', 'type', 'labels', 'title', 'ucustoms'));
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
        $lead = Lead::create($data);

        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead) {
        return $this->edit($lead);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead) {
        $item = $lead;
        $tasks = LeadTask::where('contactleadmain_id' , $lead->id)->get();
        $emails = LeadCampaign::where('contactleadmain_id' , $lead->id)->get();
        $campaigns = LeadCampaign::where('contactleadmain_id' , $lead->id)->whereNotNull('sentdate')->get();
        $billings = [];
        $type = 'lead';
        $title = 'View / Edit Lead';
        $ucustoms = UserCustom::first();
        $labels = getLabels($ucustoms);
        return view('client.show', compact('item', 'type', 'labels', 'title', 'ucustoms', 'tasks', 'emails', 'campaigns', 'billings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead) {

        $data = $request->except(['_method', '_token']);

        if (isset($data['relatedclient_id'])) {
        if ($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
        $lead->relatedclient_id = $data['relatedclient_id'];
        }
        $lead->save();
        
        Lead::where('id', $lead->id)->update($data);
        
        return redirect()->route('leads.edit', ['lead' => $lead->id])->with('success', "Lead updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead) {
        return redirect()->route('leads.index')->with('error', "No deleting allowed.  Make the record Inactive to appear at bottom of list.");
    }

}
