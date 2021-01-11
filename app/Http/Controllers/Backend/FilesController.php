<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class FilesController extends Controller
{
    const ORDERFILESDIRECTORY = 'orderfiles';
    const CLOUDFILESDIRECTORY = 'cloudfiles';

    public function orderFiles($order, $filename) {
        $storagePath = self::ORDERFILESDIRECTORY . '/' . $order . '/' . $filename;

        try {
            return response()->file( storage_path('app/' . $storagePath ) );
        } catch (FileNotFoundException $exception) {
            return response()->view('errors.404', [], 404);
        }
    }

    public function cloudFiles($directory) {
        try {
            return response()->file( storage_path('app/' . $directory ) );
        } catch (FileNotFoundException $exception) {
            return response()->view('errors.404', [], 404);
        }
    }
}
