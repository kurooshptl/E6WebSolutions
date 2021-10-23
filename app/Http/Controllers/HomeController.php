<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use App\Repositories\ContactUsRepository;
use App\Repositories\PortfolioRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * @var PortfolioRepository
     */
    public $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {

        $this->blogRepository = $blogRepository;
    }

    public function index(){
        try{
            $blogs = $this->blogRepository->getBlogsWithLimit(3);
            return view('home')->with(compact('blogs'));
        }catch(\Exception $e){
            Log::error($e->getMessage());
        }
    }
}
