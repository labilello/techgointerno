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
            abort(404, 'No hemos podido acceder al archivo solicitado. Intente nuevamente mas tarde o contactese con un administrador.');
        }
    }

    public function cloudFiles($directory) {
        try {
            return response()->file( storage_path('app/' . $directory ) );
        } catch (FileNotFoundException $exception) {
            abort(404, 'No hemos podido acceder al archivo solicitado. Intente nuevamente mas tarde o contactese con un administrador.');
        }
    }
}
