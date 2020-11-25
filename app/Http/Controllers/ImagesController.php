<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    const ORDERFILESDIRECTORY = 'orderfiles';

    public function orderFiles($order, $filename) {
        $storagePath = self::ORDERFILESDIRECTORY . '/' . $order . '/' . $filename;
        if(! Storage::exists( $storagePath ) ) return response()->view('errors.404', [], 404);

//        return response()->file( storage_path('app/' . $storagePath ) );
        return response()->download( storage_path('app/' . $storagePath ) );
    }
}
