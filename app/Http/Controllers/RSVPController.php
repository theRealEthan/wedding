<?php

class RSVPController extends Controller
{
    public function saveData(Request $request)
    {
        $data = $request->all();
        $rsvp = new RSVP();
        $rsvp->name = $data['name'];
        $rsvp->email = $data['email'];
        $rsvp->phone = $data['phone'];
        $rsvp->attending = $data['attending'];
        $rsvp->save();
        return response()->json(['success' => 'Data is successfully added']);
    }

}
