<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('frontend.contact', compact('contacts'));
    }

    public function contact_store(Request $request){
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'comment' => 'required'
        ]);

        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comment = $request->comment;
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }

    public function contact(){

        $contacts = Contact::orderBy('created_at','DESC')->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    public function destroy(Contact $contact)
{
    $contact->delete();
    
    // Redirect to the admin contacts listing page instead
    return redirect()->route('contacts.admin')
        ->with('success', 'Contact message deleted successfully');
}

}
