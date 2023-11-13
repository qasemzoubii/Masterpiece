<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contact::latest()->paginate(5);
        return view('admin.pages.contact.index', compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Store the data in the 'contacts' table
        $contact = new Contact;
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        // Add other fields if needed
        $contact->save();

        // Optionally, you can add a success message to the session
        return redirect('/contact')->with('message_sent', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'message' => $request->message

        ];

        Mail::to($request->email)->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully');
}
}