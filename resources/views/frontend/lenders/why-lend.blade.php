@extends('frontend.lenders.master')


@section('superTitle', 'LENDERS')
@section('subTitle', 'Why Lend?')

@section('contents')
    <h3>Why Lend?</h3>
    <p>
        In today’s environment where investments seldom generate expected returns and most of our savings placed with
        institutions like banks go into paying service charges to them, Funding offers a unique opportunity to lend
        money directly to pre-verified borrowers and earn extra income on idle money.
    </p>
    <p>

        The Funding model provides better rates of interest than the traditional model because it removes the
        intermediaries and connects the lenders directly to the end users – the borrowers. Traditionally, banks and
        other financial institutions collect money (through savings accounts or deposits like fixed or recurring) at low
        interest rates (say 6-10%) and lend it to borrowers at much higher rates (18-36%). This margin goes into paying
        for the high costs they incur like thousands of employees to pay salaries to and hundreds of swanky branches to
        maintain and so on. Funding brings borrowers and lenders directly in touch with each other, removes
        intermediary cost and enables borrowers to access faster and cheaper credit and enable lenders to make greater
        returns on funds lying idle in bank deposits.
    </p>
    <p>
        It is a simple win-win situation so go ahead <a href="{{ route('register') }}">SIGN UP</a> and start lending because <strong>every % counts!</strong>
    </p>
    <p>
        If you have any queries, <a href="{{ route('contactus') }}">CONTACT US</a> and we would be happy to speak to you.
    </p>




@endsection


