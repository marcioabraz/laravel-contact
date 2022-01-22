<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function login()
    {
        $contact = Contact::all();
        return view('login');
    }

    public function index()
    {
        $user = auth()->user();
        //dd($user->id, $user->name, $user-> email);
        $contacts = Contact::where('user_id', '=', $user->id)->get();//se for or deve por orwhere
        return view('contacts.index', compact('user','contacts'));
    }
    public function create()
    {
        return view('/contacts.create');
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        Contact::create([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'user_id'=>$user->id
         ]);
         return redirect('/contacts');
    }

    public function show($id)
    {
        $user = auth()->user();
        $contact = contact::find($id);
        if ($contact->user_id == $user->id){
            return view('contacts.show', compact('contact'));
        }
        else{
            return view('contacts.notshow');
        }
        
    }
    public function edit($id)
    {
        $user = auth()->user();
        $contact = contact::find($id);
        if ($contact->user_id == $user->id){
            return view('contacts.edit', compact('contact'));
        }
        else{
            return view('contacts.notedit');
        }
    }
    public function update(Request $request, $id)
    {
        $contact = contact::find($id);
        $contact->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone
        ]);
        return redirect('/contacts');
    }
    public function destroy($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect('/contacts');
    }
    public function notshow(){
        
    }
    
}
