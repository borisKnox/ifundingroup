@extends('dashboard.layout.newdash')
@section('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/metronic/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="/metronic/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
@endsection
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
		<li class="active"><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
		@if($user->role=='admin')
        <li class=""><a href="{{ route('appsetting') }}" >App setting</a></li>
        @endif
    </ul>
@endsection
@section('content')
@if(isset($success)&&$success!='')
<div class="alert alert-success">
	<button class="close" data-dismiss="alert"></button>
	Your Request is successful!
</div>
@endif
<div class='form-row row'>
	<div class='col-md-12 error form-group hide'>
		<div class='alert-danger alert'>Please correct the errors and try
			again.</div>
	</div>
</div>
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-body form">
							<form action="{{route('borrowerRequest')}}" class="form-horizontal" data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="submit_form" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="{{ $user->id }}">
								@csrf
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Account Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Profile Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Billing Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Confirm </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide your account details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">First Name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="firstname"/>
														<span class="help-block">
														Provide your First Name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="lastname"/>
														<span class="help-block">
														Provide your Last Name. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email"/>
														<span class="help-block">
														Provide your email address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Citizen Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="citisencard"/>
														<span class="help-block">
														Provide your Citizen Number </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" data-mask="(999) 999-9999" class="form-control" name="phone"/>
														<span class="help-block">
														Provide your phone number </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															Male </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															Female </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="address"/>
														<span class="help-block">
														Provide your street address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="city"/>
														<span class="help-block">
														Provide your city or town </span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3"> Project Name<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="prjname"/>
														<span class="help-block">
														Provide your project illustraition</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> INTEREST RATE (%)<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="number" class="form-control" name="itsrate"/>
														<span class="help-block">
														Provide your project's interest rate</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> LTV (%)<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="number" class="form-control" name="ltv"/>
														<span class="help-block">
														Provide your project's LTV</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> TERM (MONTHS)<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="number" class="form-control" name="trmon"/>
														<span class="help-block">
														Provide your project's term</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> Loan Expiration<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="DD/MM/YYYY" data-mask='99/9999' maxlength="7" class="form-control" name="prj_expiry_date"/>
														<span class="help-block">
														e.g 11/2020 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> Target Raise(USD)<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="$" class="form-control" name="prj_target"/>
														<span class="help-block">
														1000000 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"> Project Photo<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="file" class="form-control" name="prj_file"/>
														<span class="help-block">
														jpg,png </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="remarks"></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide your billing and credit card details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Method <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="checkbox-list">
															<label>
															<input type="radio" name="paymethod" value="1" data-title="visa"/> visa </label>
															<label>
															<input type="radio" name="paymethod" value="2" data-title="banktransfer"/> banktransfer </label>
														</div>
														<img src='/nokia/img/logo/visa-logo.png' />
														<img src='/nokia/img/logo/bank-transfer-logo.png' />
														<div id="form_payment_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="card_name"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control card-number" name="card_number"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="" class="form-control card-cvc" name="card_cvc"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration Month(MM) <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="MM" data-mask='99' maxlength="7" class="form-control card-expiry-month" name="card_expiry_date"/>
														<span class="help-block">
														e.g 11 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration Year(YYYY) <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="YYYY" data-mask='9999' maxlength="7" class="form-control card-expiry-year" name="card_expiry_date"/>
														<span class="help-block">
														e.g 2020 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Options <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="checkbox-list">
															<label>
															<input type="checkbox" name="payment1" value="1" data-title="Auto-Pay with this Credit Card."/> Auto-Pay with this Credit Card </label>
															<label>
															<input type="checkbox" name="payment2" value="2" data-title="Email me monthly billing."/> Email me monthly billing </label>
														</div>
														<div id="form_payment_error">
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">First Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="firstname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="lastname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3"> Citizen Number:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="citisencard">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
												<h4 class="form-section">Billing</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_name">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_number">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_cvc">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_expiry_date">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Options:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="payment[]">
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> Back </a>
												<a href="javascript:;" class="btn blue button-next">
												Continue <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<a type='button' class="btn green button-submit">
												Submit <i class="m-icon-swapright m-icon-white"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/metronic/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/metronic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/metronic/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/metronic/scripts/form-wizard.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>

$(function() {       
	FormWizard.init();
});
</script>
@endsection