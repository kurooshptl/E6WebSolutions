<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use App\Repositories\ContactUsRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * @var BlogRepository
     */
    public $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {

        $this->blogRepository = $blogRepository;
    }

    public function show(Request $request,$id){
        try{
            $blog = $this->blogRepository->show((int)$id);

            $blog->created_at_date =  Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d F');


            return view('blog-single')->with(compact('blog'));
        }catch(\Exception $e){
            dd($e->getMessage());
            Log::error($e->getMessage());
        }
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
//                return Redirect::back()->withInput()->withErrors($validator);
                return "Please enter correct values";
            }

            //  Store data in database
//        Contacts::create($request->all());

            $this->blogRepository->store($request->all());

            //  Send mail to admin
            \Mail::send('emails.contact', array(
                'name'       => $request->get('name'),
                'email'      => $request->get('email'),
                'phone'      => $request->get('phone'),
                'user_query' => $request->get('message'),
            ), function ($message) use ($request) {

                $message->from($request->email);
                $message->to('e6websolutions@gmail.com', 'E6WebSolutions')->subject('E6WebSolution Contact Mail');
            });

            //
//            return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
            return "OK";
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function subscribe(Request $request){
        $validator = Validator::make($request->all(), [
            'email'   => 'required|email'
        ]);
        if ($validator->fails()) {
           return "Please enter email id";
        }
        $this->blogRepository->store($request->all());
    }
}
