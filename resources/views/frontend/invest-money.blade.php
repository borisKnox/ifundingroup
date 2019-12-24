@extends('frontend.layout.master')

@section('title'.'Invest your money page')

@section('content')


@section('login')
    @if(!$user)
        <li class="nav-item mt-3 ml-3 pb-3">
            <a class="badge badge-dark" href="{{ route('login') }}">Login</a>
            <a class="badge badge-dark ml-1" href="{{ route('register') }}">Sign up</a>
        </li>
    @else
        <li class="nav-item mt-2 ml-5">
            <a class="btn btn-secondary" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
    @endif
@endsection


@section('header')
    <header class="investor_masthead"
            style="background-image: url('{{ asset('frontend-assets/images/investor.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 mt-5">
                    <h1 class="font-weight-bold text-white display-sm-3 mt-5">Earn a projected <br>return of
                        4.5 - 6.5% <br>per year</h1>
                    <h3 class="text-white font-weight-bold pt-4"> Join thousands of investors earning for their future
                        by lending to businesses through Ifundingroup.</h3>

                    <div class="row mt-5">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                    style="font-size: 20px">Open an ISA account</a>
                            </button>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-7 pl-sm-0 pl-3 mt-sm-0 mt-4">
                            <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                    style="font-size: 20px">Open an Classic account</a>
                            </button>
                        </div>

                    </div>

                    <div class="row pt-5">
                        <div class="col-sm-12">
                            <h3 class="text-center border w-sm-75 w-100 text-white font-weight-light p-2">
                                Capital at risk. Your actual return may be higher or lower and capital is at risk. Not
                                covered by the Financial Services Compensation Scheme.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection

<section>
    <div class="container-fluid">
        <div class="row text-white font-weight-bold shadow" id="silent-features">
            <div class="col-sm-3 text-center">
                <i class="fa fa-check-circle-o fa-3x"></i>
                <p>Unsecured loans <br>
                    £10k – £500k</p>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fa fa-check-circle-o fa-3x"></i>
                <p>Rates from <br> 1.9% per year</p>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fa fa-check-circle-o fa-3x"></i>
                <p>Get a decision in <br> as little as 5 hours</p>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fa fa-check-circle-o fa-3x"></i>
                <p>No fees for full <br>early repayment</p>
            </div>
        </div>
    </div>

    <!--end header content-->

    <!--page content-->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center font-weight-bold master-color display-4 pb-3">How lending works</h1>
                <p class="text-center fa-2x">At Ifundingroup you lend directly to established small British businesses.
                    They get the funds they need to grow, and you can earn attractive returns as they pay you back each
                    month.</p>
                <p class="text-center">
                    We have two types of accounts, ISA and Classic. They work in the same way, however the ISA account
                    allows you to earn interest tax-free. Your tax-free entitlement depends on your circumstances and
                    may change.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6">
                <h1 class="pr-sm-5 pr-0"> ISA account</h1>
                <table align="center">
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <button class="btn btn-xl master-bg my-4"><a href="#" class="text-white" style="font-size: 20px">Open
                        your ISA account</a></button>
                <br><br>
                or<a href="{{ route('investMoney') }}" class="fa-lg text-dark border-bottom"> Learn more about our ISA
                    account</a>
            </div>
            <div class="col-sm-6">

                <h1 class="pr-sm-5 pr-0"> Classic account</h1>
                <table align="center">
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <button class="btn btn-xl master-bg my-4"><a href="{{ route('register') }}" class="text-white"
                                                             style="font-size: 20px">Open your Classic account</a>
                </button>

            </div>
        </div>
    </div>

    <div class="container-fluid my-5 bg-light">
        <div class="row">
            <div class="col-md-4 my-auto text-center">
                <img src="{{ asset('frontend-assets/images/telegraph_logo.svg') }}">
            </div>
            <div class="col-md-8">
                <p class="lead fa-2x font-weight-bold">"<b>Ifundingroup has been the most lucrative</b> [peer-to-peer platform]. Since I
                    joined in August 2012, drip feeding cash in, my returns, after all fees and bad debt adjustment,
                    have been 6.2pc"</p>
                <p class="text-left text-dark">-Martin Lewis, writing in The Daily Telegraph, 2013</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center font-weight-bold master-color display-4 pb-3">Choose your lending option</h1>
                <p class="text-center fa-2x">To help you get the return you’re looking for, you can choose between two
                    lending options. They are available for both our Classic and ISA accounts, and you can switch
                    options at any time by logging in online.</p>
                <hr class="w-75 bg-light">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6">
                <h1 class="pr-sm-5 pr-0"> Balanced</h1>
                <h1 class="pr-sm-5 pr-0 fa-3x master-color"> 4.5 - 6.5%<sup class="master-color">1</sup></h1>
                <table>
                    <tr>
                        <td>
                            <p class="fa-2x my-4"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-4 font-weight-light pl-3">You lend to the full range of creditworthy
                                businesses to build a balanced portfolio</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-4"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-4 font-weight-light pl-3">This option has a higher projected return, with a
                                higher estimated bad debt rate</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </div>


            <div class="col-sm-6">

                <h1 class="pr-sm-5 pr-0"> conservative</h1>
                <h1 class="pr-sm-5 pr-0 fa-3x master-color"> 4.3 - 4.7%<sup class="master-color">1</sup></h1>
                <table>
                    <tr>
                        <td>
                            <p class="fa-2x my-4"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-4 font-weight-light pl-3">You lend to the full range of creditworthy
                                businesses to build a balanced portfolio</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-4"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-4 font-weight-light pl-3">This option has a higher projected return, with a
                                higher estimated bad debt rate</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
            <h5 class="text-center font-weight-light">Whichever lending option you choose, you’ll automatically lend
                your funds to relevant businesses. We’ll also collect and reinvest your monthly repayments.</h5>
            <hr class="w-75 my-4">
            <table class="text-justify">
                <tr>
                    <td class="align-text-top">1.</td>
                    <td class="pl-0 pl-sm-3"><h5 class="font-weight-light mb-4 text-center">The rates shown are the annual projected
                            returns, after fees and bad debts but before tax, that a diversified investor could earn
                            with either lending option. Your actual return may be higher or lower than projected, for
                            example due to the performance of the individual loans your funds are matched with, or a
                            change in macroeconomic conditions. By lending to businesses your capital is at risk. Not
                            covered by the Financial Services Compensation Scheme. See the full calculation here</h5>
                    </td>
                </tr>
                <tr>
                    <td class="align-text-top text-center">2.</td>
                    <td class="pl-0 pl-sm-3"><h5 class="font-weight-light mb-4">Interest earned is after fees and bad
                            debt, but before tax.</h5></td>
                </tr>
            </table>
        </div>
    </div>

    <!--our easy steps-->
    <div class="container-fluid p-sm-5 my-5 bg-light">
        <!--our easy steps-->
        <div class="row">
            <div class="col-sm-6 bg-white">
                <h1 class="font-weight-bold master-color fa-2x pb-3">Simple to use at every steps</h1>
                <h4 class="font-weight-light text-justify">To help you get the return you’re looking for, you can choose
                    between two lending options. They are available for both our Classic and ISA accounts, and you can
                    switch options at any time by logging in online.</h4>
                <div id="review-main">
                    <p id="steps">
                        <b class="border-bottom">Open your online account</b><br><br>
                        Set up your account in minutes and transfer money from your debit card.</p>
                    <p id="steps">
                        <b class="border-bottom"><br><br>Start lending automatically</b><br><br>
                        Our automatic lending tool allows you to lend small amounts to hundreds of different businesses.
                    </p>
                    <p id="steps">
                        <b class="border-bottom">Receive monthly repayments</b><br><br>
                        You’ll typically receive repayments with interest each month from the businesses you’ve lent to.
                    </p>
                    <p id="steps">
                        <b class="border-bottom"><br><br>Repayments are reinvested</b><br><br>
                        By keeping our lending tool switched on, your repayments will then be lent out again to help
                        maximise your earnings.</p>

                </div>
            </div>
            <div class="col-sm-6 p-3">
                <h1 class="fa-2x Vertical">Here to help if you need us</h1>
                <h5 class="font-weight-light">Call or email our experienced team and they can help answer any questions
                    you have.</h5>
                <h1><span class="fa fa-user-circle-o master-color"></span> 020 7401 9111</h1>
            </div>
        </div>
        <!--END our easy steps-->
    </div>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center display-4 font-weight-bold master-color">Fees and tax</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-4">
                <h3 class="font-weight-bold">Projected returns are after our fee</h3>
                <h5 class="font-weight-light">
                    Your projected return already covers the 1% annual servicing fee.
                </h5>
            </div>
            <div class="col-sm-4">
                <h3 class="font-weight-bold">Earn tax-free with the ISA account</h3>
                <h5 class="font-weight-light">
                    All interest earned in an ISA account is tax-free4, helping to boost your earnings.<br><br>
                    Your tax-free entitlement depends on your circumstances and may change.
                </h5>
            </div>
            <div class="col-sm-4">
                <h3 class="font-weight-bold">Projected return is before tax</h3>
                <h5 class="font-weight-light">
                    With Classic accounts, tax is not deducted from your earnings, but we’ll provide you with a tax
                    statement you can download if you need it for your tax return.
                </h5>
            </div>
        </div>

    </div>

    <div class="container-fluid master-bg">
        <div class="row p-5">
            <div class="col-sm-6 text-white my-auto">
                <h1 class="font-weight-bold fa-2x"><span class="fa fa-quote-left"></span>The funds have helped us move
                    our business forward<span class="fa fa-quote-right"></span></h1>
                <h4 class="font-weight-light">Previously reliant on distributors, Tom at Bobbin Bicycles borrowed to
                    start selling directly to customers via their website.</h4>
            </div>
            <div class="col-sm-6 bg-white p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/smart_worker.jpg') }}">
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center display-4 font-weight-bold master-color p-2">How we manage risk</h1>
                <h4 class="font-weight-light">
                    Only established businesses who have passed our rigorous credit assessment process can borrow
                    through Ifundingroup.<br><br>
                    However, it’s important to remember that some businesses will not be able to fully repay their loan.
                    We call this a bad debt, and it’s already accounted for in your projected return.<br><br>
                    We reduce the impact of bad debt in 3 key ways:<br><br>
                </h4>
                <hr class="w-100 bg-light">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-3">Rigorous assessment with advanced technology</h4>
                        <h4 class="font-weight-light">
                            Diversification, where you spread your lending across many businesses, is the best way to
                            earn a stable return. To help you build a well diversified portfolio, we suggest lending
                            £2,000 or more, as this allows you to:
                        </h4>
                        <table>
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Lend to at least 200 businesses</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Lend no more than 0.5% of your total to each
                                        one</h4>
                                </td>
                            </tr>
                        </table>
                        <h4 class="font-weight-light">
                            86% of investors who have diversified like this for a year or more have earned 4% or more.
                            If you’d like to start with less, the minimum initial transfer is £1,000. Correct as of 30th
                            June 2019.
                        </h4>
                    </div>
                    <div class="col-sm-6 p-3 master-bg">
                        <img class="img-fluid" src="{{ asset('frontend-assets/images/Risk-management.jpg') }}">
                    </div>

                </div>
                <hr class="w-100">
                <h4 class="mb-3">We collect debts for you</h4>
                <h4 class="font-weight-light">
                    When a business is unable to fully repay their loan, we handle everything for you. Our collections
                    and recoveries team work to recover as much as possible for you, and have won awards in their field
                    for the outstanding recoveries they make for investors.
                </h4>
                <hr class="w-100">
                <h3 class="text-center">Open your account and start lending to hundreds of businesses today.</h3>
                <div class="row my-4">
                    <div class="col-sm-6 text-sm-right text-center">
                        <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                style="font-size: 20px">Open an ISA account</a></button>
                    </div>
                    <div class="col-sm-6 text-sm-left text-center">
                        <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                style="font-size: 20px">Open an ISA account</a></button>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light my-4 py-4">
        <div class="row">
            <div class="col-sm-3 text-center">
                <h1 class="text-center master-color fa-2x font-weight-bold pb-2">72,000 jobs</h1>
                <h5 class="font-weight-light"> Unlocked in 2018</h5>
            </div>
            <div class="col-sm-3 text-center">
                <h1 class="text-center master-color fa-2x font-weight-bold pb-2">£5.8 billion</h1>
                <h5 class="font-weight-light"> Lent to UK businesses</h5>
            </div>
            <div class="col-sm-3 text-sm-right text-center my-auto">
                <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                        style="font-size: 20px">Open an ISA account</a></button>
            </div>
            <div class="col-sm-3 text-sm-left text-center my-auto">
                <button class="btn btn-xl master-bg"><a href="{{ route('register') }}" class="text-white" style="font-size: 20px">Open
                        a Classic account</a></button>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-sm-5 p-0">
            <div class="col-sm-4">
                <h1 class="fa-lg">Here to help if you need us</h1>
                <h5 class="font-weight-light">Call or email our experienced team and they can help answer any questions
                    you have.</h5>
                <h1><span class="fa fa-user-circle-o master-color"></span> 020 7401 9111</h1>
            </div>
            <div class="col-sm-4">
                <h3>Investor guide</h3>
                <h4 class="font-weight-light">Download our guide to using our ISA and becoming an investor</h4>
                <a href="#!" class="text-dark font-weight-bold"><u>Download the guide</u></a>
            </div>
            <div class="col-sm-4">
                <h3>Key features and risks</h3>
                <h4 class="font-weight-light">Find out more about the key features and risks of lending through an ISA
                    or Classic account</h4>
                <a href="#!" class="text-dark font-weight-bold"><u>Download</u></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="font-weight-light text-center my-5">
                    We are proud members of the Peer-to-Peer Finance Association, which is a self-regulatory body for
                    the sector to promote high standards of conduct and consumer protection.
                </h5>
            </div>
        </div>
    </div>
</section>
@endsection
