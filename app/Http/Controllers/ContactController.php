<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Auth;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create', ['item' => null]);
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
        Contact::create($data);
        
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contact.show', ['item' => $contact, 'type' => 'contact']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contact.show', ['item' => $contact, 'type' => 'contact']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'firstname1' => ['required',],
            'lastname1' => ['required'],
        ]);
        
        $data = $request->except(['_method', '_token']);
        
        if($data['relatedclient_id'] == 'none')
            $data['relatedclient_id'] = null;
        
        Contact::where('id', $contact->id)->update($data);
        $contact->relatedclient_id = $data['relatedclient_id'];
        $contact->save();
        
        return redirect()->route('contacts.edit', ['contact' => $contact->id])->with('success', "Contact updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
