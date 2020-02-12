<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\UserCustom;
use App\ContactTask;
use App\ContactCampaign;

class ContactController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $item = null;
        $type = 'contact';
        $title = 'Add Contact';
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
        Contact::create($data);

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact) {
        return $this->edit($contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact) {
        $item = $contact;
        $tasks = ContactTask::where('contactcontactmain_id' , $contact->id)->get();
        $emails = ContactCampaign::where('contactcontactmain_id' , $contact->id)->get();
        $campaigns = ContactCampaign::where('contactcontactmain_id' , $contact->id)->whereNotNull('sentdate')->get();
        $billings = [];
        $type = 'contact';
        $title = 'View / Edit Contact';
        $ucustoms = UserCustom::first();
        $labels = getLabels($ucustoms);
        return view('client.show', compact('item', 'type', 'labels', 'title', 'ucustoms', 'tasks', 'emails', 'campaigns', 'billings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact) {

        $data = $request->except(['_method', '_token']);

        if (isset($data['relatedclient_id'])) {
        if ($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
            $contact->relatedclient_id = $data['relatedclient_id'];
        }
        $contact->save();
        
        Contact::where('id', $contact->id)->update($data);

        return redirect()->route('contacts.edit', ['contact' => $contact->id])->with('success', "Contact updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact) {
        return redirect()->route('contacts.index')->with('error', "No deleting allowed.  Make the record Inactive to appear at bottom of list.");
    }

}
