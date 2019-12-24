@extends('frontend.lenders.master')


@section('superTitle', 'Borrowers')
@section('subTitle', 'Why Borrow On Funding?')

@section('contents')
    <div class="mid_cmpnp fl">
        <h3><strong>The Process</strong></h3>

        <p><strong>Registration and Loan Listing</strong></p>

        <p>The registration process is quick and easy. A Borrower simply clicks on the Sign up Now icon, enters some
            basic information, pays the registration fees and uploads the documents required.</p>

        <p>Based on these documents, every borrower will be identity-verified, credit-checked and risk-assessed and our
            automated system will provide an indication about the Borrower’s capability to efficiently repay the loan.
            The rate of interest ranges from 12% to 28% and the loan tenure from 6 months to 36 months. With the aim to
            include those with limited credit history, Funding has launched the Unrated Borrowers category. This
            segment of Unrated Borrowers is listed at higher interest rates.</p>

        <p><strong>Loan Funding</strong></p>

        <p>Once the loan is listed, multiple lenders can view the listing and send proposals to fund it at the suggested
            interest rate. To secure the interests of the Lender we have proposed a system where a lender can fund up to
            20% of a loan requirement. Hence, each loan will be funded by at least 5 lenders. All proposals are accepted
            on first come first serve basis.</p>

        <p><strong>Loan Disbursal</strong></p>

        <p>Loan disbursal begins only after:</p>

        <ol class="text-left">
            <li>Minimum 75% funding of the loan amount has been achieved</li>
            <li>Official loan agreement between Lender and Borrower has been signed</li>
            <li>Borrower has provided the required number of Post-Dated Cheques</li>
            <li>Funding will inform the lender through email to proceed with the disbursal after ensuring all checks
                are complete.
            </li>
            <li>Applicable one-time Administrative Fees is deducted by Funding from the loan amount before disbursal of
                amount to the borrower
            </li>
        </ol>

        <p><strong>The Agreement</strong></p>

        <p>Funding facilitates the online signing of a legally-binding agreement between the Borrower and the Lenders.
            The agreement is available online on the borrower and lender’s Funding account. They login to their
            respective accounts, read and understand the terms and conditions mentioned, “digitally sign” by clicking on
            the acceptance box under the agreement and the process is complete. The agreement is then sent to both the
            borrowers and lenders through email for their records. The process, though legally binding just like a
            physical agreement, is faster and more efficient ensuring faster flow of loan amount from lender to
            borrower.</p>

        <p><strong>Cheques</strong></p>

        <p>Along with the agreement, borrower must provide post-dated cheques towards security. NACH mandate is used to
            electronically transfer funds between lenders and borrowers.</p>

        <p>Once the agreements are signed and PDCs received, the loan amount is transferred through electronic transfer
            from the Lender’s escrow account to the Borrower’s bank account. The one-time administrative fee is debited
            by Funding from the loan amount before transferring.</p>

        <p>So, go ahead <a href="{{ route('register') }}">SIGN UP</a> and take the first step to make&nbsp;<strong>every
                % counts!</strong></p>
    </div>



@endsection


