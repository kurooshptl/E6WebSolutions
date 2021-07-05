<?php

namespace App\Http\Controllers;

use App\Repositories\ContactUsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

/**
 * Class ContactUsFormController
 * @package App\Http\Controllers
 */
class ContactUsFormController extends Controller
{
    /**
     * @var ContactUsRepository
     */
    public $contactUsRepository;

    /**
     * ContactUsFormController constructor.
     *
     * @param ContactUsRepository $contactUsRepository
     */
    public function __construct(ContactUsRepository $contactUsRepository)
    {

        $this->contactUsRepository = $contactUsRepository;
    }

    // Store Contact Form data

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        try {
            // Form validation
            $validator = Validator::make($request->all(), [
                'name'    => 'required',
                'email'   => 'required|email',
                'phone'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'message' => 'required'
            ]);
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }

            //  Store data in database
//        Contacts::create($request->all());

            $this->contactUsRepository->store($request->all());

            //  Send mail to admin
            \Mail::send('emails.contact', array(
                'name'       => $request->get('name'),
                'email'      => $request->get('email'),
                'phone'      => $request->get('phone'),
                'user_query' => $request->get('message'),
            ), function ($message) use ($request) {

                $message->from($request->email);
                $message->to('kurooshptl@gmail.com', 'Admin')->subject('E6WebSolution Contact Mail');
            });

            //
            return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
