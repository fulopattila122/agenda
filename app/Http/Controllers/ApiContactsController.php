<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\Contacts as ContactsResource;
use Illuminate\Http\Request;

class ApiContactsController extends Controller
{
    public function index()
    {
        return new ContactsResource(Contact::all());
    }
}
