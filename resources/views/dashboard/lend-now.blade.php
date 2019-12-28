@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class="active"><a href="{{ route('lendNow') }}" >Lend now</a></li>
		<li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
		@if($user->role=='admin')
        <li class=""><a href="{{ route('appsetting') }}" >App setting</a></li>
        @endif
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <h2 style='margin-top:30px;text-align:center;color:#337ab7;'>Welcome To iFounding Group!</h2>
            <h6 style='text-align:center;color:black;margin-top:10px;'>Browse our open investments below</h6>
            <div class="row" align='center'>
				<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
					
				</div>
				<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
					<div class="bootstrap-select fm-cmp-mg">
						<select class="selectpicker">
								<option>Interest high to low</option>
								<option>Date recent to past</option>
							</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
					
				</div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="row">
						@if(count($loans)!=0)
							@foreach($loans as $loan)
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style='margin-top:15px;'>
								<div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
									<div class="contact-win">
										<div class="contact-img">
											@if($loan->prj_file==null)
											<img src="/nokia/img/post/1.jpg" alt="">
											@else
											<img style='height:60px;' src="/upload/{{$loan->prj_file}}" alt="">
											@endif
										</div>
									</div>
									<div class="contact-ctn">
										<div class="contact-ad-hd">
											<h2>{{$loan->firstname}} {{$loan->lastname}}</h2>
											<p class="ctn-ads">{{$loan->city}}, {{$loan->address}}</p>
										</div>
										<p>{{$loan->prjname}}</p>
									</div>
									<div class="social-st-list">
										<div class="social-sn">
											<h2>INTEREST RATE:</h2>
											<p>{{$loan->itsrate}}%</p>
										</div>
										<div class="social-sn">
											<h2>LTV:</h2>
											<p>{{$loan->ltv}}%</p>
										</div>
										<div class="social-sn">
											<h2>TERM (MONTHS):</h2>
											<p align='center'>{{$loan->trmon}}</p>
										</div>
									</div>
									<div class="contact-data">
										<p><i class="notika-icon notika-calendar"></i><span>35 days left</span></p>
										<p><i class="notika-icon notika-bar-chart"></i>${{$loan->prj_target}} USD goal</p>
										<div class="skill">
											<div class="progress progress-bt">
												<div class="lead-content">
												<div class="progress-bar" data-progress="55%" style="width: 55%;height:5px;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>55%</span> </div>
											</div>
										</div>
									</div>
									<div style='margin-top:3px;' class="" align='center'>
										<a href='{{url("dashboard/invest/".$loan->id)}}' class="btn btn-primary notika-btn-primary btn-xs waves-effect">Invest Now<i class="notika-icon notika-down-arrow"></i></a>
										
									</div>
								</div>
							</div>
							
						
                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a data-toggle="tab" href="#menu1" aria-expanded="true"><i class="notika-icon notika-dollar"></i> High Interest Lending</a></li>
                                <li><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="notika-icon notika-credit-card"></i> Lending Fee Free</a></li>
                                <li><a data-toggle="tab" href="#menu3" aria-expanded="false"><i class="notika-icon notika-app"></i> Withdraw</a></li>
                                <li><a data-toggle="tab" href="#menu4" aria-expanded="false"><i class="notika-icon notika-app"></i> Membership</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="tab-content tab-custom-st">
                                    <div id="menu1" class="tab-pane fade active in">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>Your money should make you more money. Eurn up to 11.60% on your money. This percentage is subject to change at any time.</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>We don't believe in changing you fees to use own money. That said, our fee structure is subject to change at any time. </h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>All you need is a payment option, view our payment option to Withdraw your interet lending rates with a fast speed withdraw vs interest</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu4" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>Access to loans, and much more simply by registering, doing to your dashboard, Go to lend now and view your rates. Registeration is easy and fast.</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                
				</div>
				@endforeach
				@endif
            </div>
        </div>
    </div>
@endsection