<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts/index');
    }

    public function create()
    {
        return view('contacts/create', ['contact' => new Contact()]);
    }

    public function store(ContactRequest $request)
    {
        try {
            $contact = Contact::create($request->all());

            flash()->success(sprintf('Contact %s %s has been created', $contact->firstname, $contact->lastname));
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }

        return redirect(route('contacts.edit', $contact));
    }

    public function edit(Contact $contact)
    {
        return view('contacts/edit', ['contact' => $contact]);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        try {
            $contact->update($request->all());

            flash()->success(sprintf('Contact %s %s has been updated', $contact->firstname, $contact->lastname));
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }

        return redirect(route('contacts.index'));
    }

    public function destroy(Contact $contact)
    {
        try {
            $name = sprintf('%s %s', $contact->firstname, $contact->lastname);
            $contact->delete();

            flash()->warning("Contact $name has been deleted");

        } catch (\Exception $e) {
            flash()->error($e->getMessage());
        }

        return redirect(route('contacts.index'));
    }
}
