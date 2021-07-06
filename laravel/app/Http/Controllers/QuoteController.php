<?php

namespace App\Http\Controllers;

use App\Repositories\QuoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    /**
     * @var QuoteRepository
     */
    public $quoteRepository;


    public function __construct(QuoteRepository $quoteRepository)
    {

        $this->quoteRepository = $quoteRepository;
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

            $data = $request->all();
            // Form validation
            $validator = Validator::make($data, [
                'name'                       => 'required',
                'email'                      => 'required|email',
                'contact'                    => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'company_location'           => 'required',
                'company_services'           => 'required',
                'company_number_of_employee' => 'required|numeric',
                'company_demographic'        => 'required',
                'competitors_position'       => 'required',
                'brand_message_detail'       => 'required',
            ]);
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }

            //  Store data in database
//        Contacts::create($data);
            $data ['design'] = isset($data['design']) && $data['design'] == 'on';
            $data ['development'] = isset($data['development']) && $data['development'] == 'on';
            $data ['marketing'] = isset($data['marketing']) && $data['marketing'] == 'on';

            $this->quoteRepository->store($data);

            //  Send mail to admin
            \Mail::send('emails.quote', array(
                'name'                       => $data['name'],
                'email'                      => $data['email'],
                'contact'                    => $data['contact'],
                'company_name'               => $data['company_name'],
                'company_location'           => $data['company_location'],
                'company_services'           => $data['company_services'],
                'company_number_of_employee' => $data['company_number_of_employee'],
                'company_demographic'        => $data['company_demographic'],
                'design'                     => $data['design'] ? 'Yes' : 'No',
                'development'                => $data['development'] ? 'Yes' : 'No',
                'marketing'                  => $data['marketing'] ? 'Yes' : 'No',
                'competitors_position'       => $data['competitors_position'],
                'brand_message_detail'       => $data['brand_message_detail'],
            ), function ($message) use ($request) {

                $message->from($request->email);
                $message->to(config('constants.email_id'), 'E6WebSolutions')->subject('E6WebSolution Quote Mail');
            });

            //
            return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
