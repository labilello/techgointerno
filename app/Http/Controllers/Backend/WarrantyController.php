<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
}
