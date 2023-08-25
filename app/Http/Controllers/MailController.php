<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailNotify;


class MailController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'subject' => 'aboud test gmail',
    //         'body' => 'Hello this is test email'
    //     ];
    //     try {
    //         Mail::to('3bodynasser72@gmail.com')->send(new mailNotify($data));
    //         return response()->json(['Great Check Your email box']);
    //     } catch (Exception $th) {
    //         return response()->json(['sorry something went wrong box']);
    //     }
    // }
}
