@extends('site.redeem.redeem-layout')

@section('header')
    
 <header class="redeem_head">
    <div class="container-fluid cont">
        <div class="row">
            <div class="fheader col-md-8">
                <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	         <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	    </a>
            </div>
            <div class="fheader col-md-4" id="shop_list">
                <div id="div_top_hypers">
                    <ul id="ul_top_hypers">
                        <li><a href="" class="a_top_hypers"> HELP</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/account">ACCOUNT SETTINGS</a></li>
                                <li><a href="/gift-dashboard">DASHBOARD</a></li>
                                <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</header>
@stop

@section('redeem_content')
<!--Layer1-->
<section class="dash_link">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-12">
                <h5><a href="/gift-dashboard">BACK TO DASHBOARD</a></h5>
            </div>
        </div>
    </div>
</section>
<!--Layer2-->
<section class="redeem_gift">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>REDEEM GIFTS</h1>
                <p>Fynches makes it easy for you to redeem your gifts.Simply check your<br> balance and setup your payment account so you can receive gifts</p>
            </div>
        </div>
    </div>
</section>

<!--Layer3-->
<section class="gift_table">
    <div class="container">
        <h5 class="gift_header">GIFT BALANCE</h5>
        <div class="row" id="gift-border">
            <div class="col-md-6 text-left">
                <p>Total Balance</p>
            </div>
            <div class="col-md-6 text-right">
                <p>$118.00</p>
            </div>
        </div>
        
        <div class="row" id="gift-border">
            <div class="col-md-6 text-left">
                <p>72 Hour Hold Balance <a href="#">What does this mean</a></p>
            </div>
            <div class="col-md-6 text-right">
                <p> - $18.00</p>
            </div>
        </div>
        
        <div class="row" id="gift-total">
            <div class="col-md-11 text-right">
                <h5>TOTAL AVAILABLE BALANCE</h5>
            </div>
            <div class="col-md-1 text-left">
                <h5 class="gift_second">$100.00</h5>
            </div>
        </div>
    
    </div>
</section>

<!--Layer4-->
<section class="gift_bank">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 text-left">
                    <div class="col-md-6" style="padding:0px"><h5>BANK INFO <img src="http://fynches.codeandsilver.com/public/front/img/dollar.png" style="width: 10%;margin-top: -10px;"></h5></div>
                </div>    
                <div class="col-md-6 text-right">
                    <img src="http://fynches.codeandsilver.com/public/front/img/stripe.png" style="margin: 10px;">
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>We've partnered with Stripe to make receiving your money safe and easy. All funds are transfered through ACH Electronic Check, and funds arrive in your bank account
                within 5 business days.<br><br>
                Please enter your banking info below. At the bottom of your personal checks,there are three sets of numbers. Your routing number is a set of nine digits
                and your account number is typically 3 - 17 digits.</p>
                
                <div class="col-md-4">
                     <img src="http://fynches.codeandsilver.com/public/front/img/bank.png" style="width: 100%;">
                </div>
                
            </div>
        </div>
        <div class="row" style="padding: 0px 20px;">
            <div class="col-md-6">
                <label>BANK NAME</label>
                <input type="text" class="form-control">
            </div>
        </div>
        
        <div class="row" style="margin: 20px 0px;">
            <div class="col-md-6">
                <label>ROUTING NUMBER (9 digits number)</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label>ACCOUNT NUMBER (3 - 17 digits)</label>
                <input type="text" class="form-control">
            </div>
        </div>
        
        <div class="row text-right">
                <a href="{{url('redeem-success')}}" class="btn common btn-border yellow-submit">REDEEM GIFTS  <i class="fa fa-lock" aria-hidden="true" style="margin: 10px;border: 1px solid;border-radius: 25px;padding: 5px;"></i></a>  
        </div> 
    </div>
</section>
@stop


@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class=" fheader col-sm-12 col-md-3 col-lg-3">
					<a href="javascript:void(0)"><img src="http://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
				</div>
				<div class="fheader col-sm-12 col-md-6 col-lg-6">
					<ul class="f-menu">
						<li><a href="javascript:void(0)">ABOUT</a></li>
						<li><a href="javascript:void(0)">BLOG</a></li>
						<li><a href="javascript:void(0)">CONTACT US</a></li>
						<li><a href="javascript:void(0)">FAQS</a></li>
						<li><a href="javascript:void(0)">FIND A GIFT PAGE</a></li>
					</ul>
				</div>
				<div class="fheader col-sm-12 col-md-3 col-lg-3">
					<ul class="social">
						<li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
					</ul> 
				</div>
			</div>
		</div>
		<div class="footer-btm home-btm">
			<div class="row ">
				<div class="fheader col-md-7 col-lg-7">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="fheader col-md-5 col-lg-5 text-right">
					<ul>
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
						<li><a href="javascript:void(0)">Terms and Conditions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
@stop


