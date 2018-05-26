<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumberRequest;
use App\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function create(Request $request)
    {
        return view('numbers/create', ['number' => new Number([
            'contact_id' => $request->get('forContact')
        ])]);
    }

    public function store(NumberRequest $request)
    {
        try {
            $number = Number::create($request->all());

            flash()->success(sprintf('Number %s (%s) has been created', $number->number, $number->type));
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }

        return redirect(route('contacts.edit', $number->contact));
    }

    public function edit(Number $number)
    {
        return view('numbers/edit', ['number' => $number]);
    }

    public function update(NumberRequest $request, Number $number)
    {
        try {
            $number->update($request->all());

            flash()->success(sprintf('Number %s (%s) has been updated', $number->number, $number->type));
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }

        return redirect(route('contacts.edit', $number->contact));
    }

    public function destroy(Number $number)
    {
        try {
            $title = sprintf('%s (%s)', $number->number, $number->type);
            $contact = $number->contact;
            $number->delete();

            flash()->warning("Number $title has been deleted");

        } catch (\Exception $e) {
            flash()->error($e->getMessage());
        }

        return redirect(route('contacts.edit', $contact));
    }
}
