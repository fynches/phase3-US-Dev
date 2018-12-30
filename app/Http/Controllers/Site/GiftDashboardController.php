<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Gift;
use App\GiftPage;
use App\Offer;
use App\Company;
use App\Templates;
use DB;
use Session;
use Route;
use App\ActivityLog;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Laravel\Socialite\Facades\Socialite;
use Yajra\Datatables\Datatables;
use App\Site;
use App\GiftPurchase;
use App\Experience;
use App\FundingReport;
use App\Testimonial;
use App\StaticBlock;

class GiftDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	
    }

   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            
        $user = Auth::user();
        
	    $giftPages = GiftPage::where('user_id',$user->id)->get();
	    
    	return view('site.gift-dashboard.index', compact('giftPages'));
        }
	} 
	
	public function gifted()
	{
	    if (Auth::check()) {
            
        $user = Auth::user();
        
	    $purchases =  GiftPurchase::where('status', 2)->get();
	    
    	return view('site.gift-dashboard.gifted', compact('purchases'));
        }
	}   
    
}
