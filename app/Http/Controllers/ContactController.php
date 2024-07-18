<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactForm;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class ContactController extends Controller
{
    public function contactmail(ContactRequest $request)
    {
        try {
            $toEmail = $request->contactEmail . '@coppacocktails.com';
            logger($toEmail);

            $contactMail = new SendMail($request);
            Mail::to($toEmail)->send($contactMail);

            session(['type' => 'success']);
            return redirect('/contact-coppa-cocktails');

        } catch (\Exception $e){
            logger($e);
            return redirect('/contact-coppa-cocktails')
                ->withErrors(['generalerror' => 'Algo ha salido mal, inténtalo de nuevo'])
                ->withInput()
                ->with([
                    'message' => 'Algo ha salido mal, inténtalo de nuevo',
                    'type' => 'danger'
                ]);
        }
    }

}
