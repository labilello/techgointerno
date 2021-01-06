<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OtherWarranty;
use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function addwarranty(Request $request) {
        $warranty = new Warranty([
            'name' => $request->input('name'),
            'warranty_group_id' => $request->input('group'),
            'devices' => $request->input('devices', array() ),
            'actions' => $request->input('actions', array() ),
            'documents' => $request->input('documents', array() ),
            'externalContact' => $request->input('externalContact', array() ),
            'internalLinks' => $request->input('internalLinks', array() )
        ]);

        $warranty->save();

        if($request->input('internalContact') !== null)
            foreach ($request->input('internalContact') as $contactID)
                $warranty->internalContacts()->attach( $contactID );
    }

    public function addotherwarranty(Request $request) {
//        dd($request->input());

        $otherWarranty = new OtherWarranty([
            'name' => $request->input('name'),
            'phones' => $request->input('phones'),
            'emails' => $request->input('emails'),
            'pages' => $request->input('pages')
        ]);

        $otherWarranty->save();
    }
}
