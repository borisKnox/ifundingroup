@extends('frontend.lenders.master')


@section('superTitle', 'LENDERS')
@section('subTitle', 'Lender Eligibility Criteria?')

@section('contents')
    <h3>Lender Eligibility Criteria</h3>
    <p>
        Funding is a mature, new-age financial instrument for discerning investors. It is for those who can go beyond
        conventional wisdom and traditional routes of investment to make independent and well-judged risk assessments.
        It allows Lenders to have greater control over their money and provides an investment route where they do not
        have to share their interest incomes with intermediaries.
    </p>
    <p>
        We, at Funding, seek to facilitate convenient lending opportunities for everyone. The platform provides the
        simplest and fastest method of registering as a lender, to anyone who is willing to lend. Our criterions are
        most basic and simple.
    </p>
    <p class="text-left">
        A Lender has to:
    <ul class="list-group text-left">
        <li class="list-group-item">Indian Citizen</li>
        <li class="list-group-item">At least 18 years of age</li>
        <li class="list-group-item">Have a valid bank account in India.</li>
        <li class="list-group-item">Have a PAN card.</li>
        <li class="list-group-item">Agree to abide by Funding Policies.</li>
        <li class="list-group-item">Adhere to Lender Code of conduct</li>
    </ul>

    <strong>Institutional lenders</strong>

    <li>Only RBI listed finance companies or Companies formed under the Indian Companies Act are eligible to apply
        We at Funding are committed to Client confidentiality and the security of all information provided to us. We
        use this confidential information strictly for official purposes. We encourage all to please read Funding
        Policy and Terms and Conditions carefully.
    </li>
    </p>
    <p>
        Simply click on the <a href="{{ route('register') }}">SIGN UP</a> icon to your right, and register through the
        simple step by step process as
        instructed. Go ahead and take the first step to make <strong>every % counts!</strong>
    </p>




@endsection


