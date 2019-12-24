@extends('frontend.lenders.master')


@section('superTitle', 'LENDERS')
@section('subTitle', 'Returns&Fees')

@section('contents')

    <div class="return-fee mid_cmpnp fl">
        <h3><strong>Returns</strong></h3>

        <p>Unlike in the case of conventional financial institutions, it is not Funding but the Lender who decides how
            much return they want to earn. Interest rate agreements are entirely between lenders and borrowers across
            the platform in which Funding has no intervention. We recommend that investment should be spread, such that
            returns are a weighted average of the individual loan parts. This is explained through an illustration
            below.</p>

        <p>For example, on a loan of Rs. 150,000 spread across 3 borrowers, for a period of 1 year at various interest
            rates; the returns can be as follows:</p>

        <table class="table table-bordered">
            <thead style="background:#eee;font-weight:bold;">
            <tr>
                <th style="border: 1px solid #ddd !important;">Borrower</th>
                <th style="border: 1px solid #ddd !important;">Amount Lent</th>
                <th style="border: 1px solid #ddd !important;">Rate</th>
                <th style="border: 1px solid #ddd !important;">Interest Earning</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mr. X</td>
                <td>Rs.50,000</td>
                <td>12% p.a.</td>
                <td>Rs.3,309</td>
            </tr>
            <tr>
                <td>Mr.Y</td>
                <td>Rs.50,000</td>
                <td>16% p.a.</td>
                <td>Rs.4,439</td>
            </tr>
            <tr>
                <td>Mr.Z</td>
                <td>Rs.50,000</td>
                <td>20% p.a.</td>
                <td>Rs.5,581</td>
            </tr>
            <tr>
                <td><strong>TOTAL</strong></td>
                <td><strong>150,000</strong></td>
                <td><strong>16% p.a.</strong></td>
                <td><strong>Rs.13,329</strong></td>
            </tr>
            </tbody>
        </table>

        <p>So, in the example above the lender is earning on an average 16% interest on total investment. Also, Interest
            earnings can be more or less depending on loan amount split across interest rates. For egs the lender may
            decide to lend only Rs. 20,000/- @ 12% and increase the amount to Rs. 60,000/- @ 16% and to Rs. 70,000/- @
            20%. This will increase the lender’s average return. At Funding, what amount to lend at what interest rate
            is controlled by the lender depending on his/her judgment and negotiating skills.</p>

        <p>Sounds interesting? <a href="{{ route('register') }}">SIGN UP</a> now and start making <strong>&nbsp;every
                % counts!</strong></p>

        <h3><strong>Non-Payment of EMI</strong></h3>

        <p>Though we do our best to manage the risk at every step, defaults may happen. In such a scenario, Funding
            will facilitate the collection through our in-house collection mechanism and also send a legal notice on
            behalf of the lender to the borrower. Expenses incurred for sending legal notices, by recovery agency and
            towards other legal proceedings are borne by the lender.</p>

        <h3><strong>Registration Fees</strong></h3>

        <p>A non-refundable, one-time registration fee of Rs. 1000/- is payable by the lender to Funding at the time of
            Sign Up.</p>

        <h3><strong>Transaction Fees</strong></h3>

        <p>A non-refundable 1% transaction fee from retail investors and 2% from institutional investors is charged on
            the loan amount disbursed. This is deducted after the first EMI is received.</p>

        <h3><strong>Other Fees</strong></h3>

        <p>Lender(s) are obliged to maintain details of their loan including statement of accounts. In case, they need
            Funding’s assistance in this regard then a non-refundable fee of Rs. 500/- per statement of accounts will
            be charged.</p>

        <h3>&nbsp;</h3>

        <p>Funding.com only facilitates a virtual meeting place between Borrowers and Lenders on its online platform.
            The decision to lend money to a borrower is entirely at the discretion of the Lenders and Funding does not
            guarantee that a borrower will receive any loans from the Lenders. Funding merely aids and assists Lenders
            and Borrowers listed on its website to make and receive loans and charges a service fee from Lenders and
            Borrowers for such assistance. Funding is only an ‘Intermediary’ under the provisions of the Information
            Technology Act, 1999.</p>
    </div>


@endsection


