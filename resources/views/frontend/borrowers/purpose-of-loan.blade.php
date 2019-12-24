@extends('frontend.lenders.master')


@section('superTitle', 'Borrowers')
@section('subTitle', 'Why Borrow On Funding?')

@section('contents')


    <div class="mid_cmpnp fl">
        <h3><strong>Purpose of Loan</strong></h3>

        <p>Funding does not consider any cause to be unworthy for a loan. There are no set restrictions on the reason
            for seeking a loan, other than the obvious condition that the money is not to be used for any illegal or
            prohibited purpose under Indian laws. Loan requests are for many purposes like:</p>

        <ul class="text-left">
            <li>for undertaking a professional course</li>
            <li>to provide for child’s education</li>
            <li>for weddings and family functions</li>
            <li>for financing a vacation</li>
            <li>to refinance Credit Card dues</li>
            <li>for down payments for cars, bikes etc</li>
            <li>for home purchase, renovations and refurbishing</li>
            <li>to consolidate ongoing loans</li>
            <li>to cover for the period while moving from one job to another (subject to valid offer letter available
                from the new company)
            </li>
            <li>for any medical emergencies</li>
        </ul>

        <p>The list is not exhaustive as life can put forth various kinds of challenges that could require sudden fund
            requirements and hence the need to borrow.</p>

        <p><a href="{{ route('register') }}">SIGN UP </a>now, to post requirement for a loan and scout for
            benefactor(s) because <strong>every % counts!</strong></p>
    </div>

@endsection


