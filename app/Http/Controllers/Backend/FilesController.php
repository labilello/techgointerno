<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    const ORDERFILESDIRECTORY = 'orderfiles';
    const CLOUDFILESDIRECTORY = 'cloudfiles';

    public function orderFiles($order, $filename) {
        $storagePath = self::ORDERFILESDIRECTORY . '/' . $order . '/' . $filename;
        if(! Storage::exists( $storagePath ) ) return response()->view('errors.404', [], 404);

        return response()->download( storage_path('app/' . $storagePath ) );
    }

    public function cloudFiles($directory) {
        $storagePath = $directory;
        if(! Storage::exists( $storagePath ) ) return response()->view('errors.404', [], 404);

        return response()->download( storage_path('app/' . $storagePath ) );
    }
}
