<?php

namespace App\Http\Controllers;

use App\Repositories\SubscriptionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class SubscriptionController extends Controller
{
    /**
     * @var SubscriptionRepository
     */
    public $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {

        $this->subscriptionRepository = $subscriptionRepository;
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
            $validator = Validator::make($request->all(), [
                'email'   => 'required|email|unique:subscriptions,email'
            ]);

            if ($validator->fails()) {
                switch($validator->errors()->messages()['email'][0]){
                    case "validation.required":
                        return "Email Id is required.";
                        break;
                    case "validation.unique":
                        return "OK";
                    default:
                        return "Please enter correct email id";
                }

            }
            $this->subscriptionRepository->store($request->all());

            //  Send mail to admin
            \Mail::send('emails.subscribe', array(

                'email'      => $request->get('email'),

            ), function ($message) use ($request) {

                $message->from($request->email);
                $message->to( $request->get('email'), 'E6WebSolutions')->subject('E6WebSolution Contact Mail');
            });

            //
//            return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
            return "OK";
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function subscribe(Request $request){

    }
}
