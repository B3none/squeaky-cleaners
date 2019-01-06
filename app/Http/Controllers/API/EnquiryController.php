<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function enquiry(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:64',
            'last_name' => 'required|max:64',
            'email' => 'email',
            'phone' => 'required|numeric|min:11|max:11',
            'message' => 'required|max:512'
        ]);

        $firstName = $request->post('first_name');
        $lastName = $request->post('second_name');
        $email = $request->post('email');
        $phone = $request->post('phone');
        $postcode = $request->post('postcode');
        $message = $request->post('message');
        $newsletter = $request->post('newsletter');

        return json_encode([
            'exampleResponse',
            $firstName,
            $lastName,
            $email,
            $phone,
            $postcode,
            $message,
            $newsletter
        ]);
    }
}
