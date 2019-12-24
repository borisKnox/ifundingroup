@extends('frontend.how-work.support-master')


@section('superTitle', 'HOW FUNDING GROUP WORK')
@section('subTitle', 'Lenders & Borrowers')

@section('contents')
    <h3>For Lenders</h3>
    <p> Lenders have to follow a simple registration process, pay the registration fees and provide the required
        documents as mentioned on our site. Once the verification is complete, the lender has pre-funded the Lender’s
        Escrow account with the amount he wishes to invest; he can start investing by sending proposals to borrowers.
    </p>
    <p>
        Loan listings are visible on the lender’s dashboard along with relevant financial, credit and personal details
        of each borrower. Lenders can use this information to make an informed choice and send a proposal to fund the
        borrower. Offers are accepted on first come first serve basis. A lender can fund up to 20% of a borrower’s total
        loan requirement.
    </p>
    <p>
        Loan disbursal begins only after the official loan agreement has been signed and the borrower has provided the
        required number of Post-Dated Cheques towards security and repayment of the first EMI. After the loan is
        disbursed, the Lender will receive EMIs on or before the 15th of every month. If a borrower fails to pay an EMI
        within a stipulated time, a penalty is levied on the borrower which is payable directly to the lender.
    </p>
    <p>
        So <a href="{{ route('register') }}">SIGN UP</a> now and start expanding your portfolio because every <strong>every % counts!</strong>
    </p>
    <hr>

    <h3>For Borrowers</h3>

    <P>
        Borrowers have to follow a simple registration process, pay the registration fees and provide the required
        documents as mentioned on our site. As part of the verification process, the team gets in touch with the
        prospective borrowers. On the basis of these documents, every borrower will be identity-verified, credit-checked
        and risk-assessed and our automated system will provide an indication about the Borrower’s capability to
        efficiently repay the loan. The rate of interest ranges from 12% to 28% and the loan tenure from 6 months to 36
        months.
    </P>
    <p>
        Once the loan is listed, multiple lenders can view the listing and send proposals to fund it at the given
        interest rate. A lender can fund up to 20% of a loan requirement. Hence, each loan will be funded by at least 5
        lenders. All proposals are accepted on first come first serve basis. Loan disbursal begins only after minimum
        75% of the borrower’s fund requirements have been fulfilled, Borrower has paid the relevant administrative fee
        to Funding, he has signed the loan agreement with all the lenders and provided requisite number of post-dated
        cheques towards security and EMIs payable to each lender.
    </p>
    <p>
        The borrower has to make all EMI payments by the due date fixed between 1-15th of every month. Any failure to do
        so within the stipulated time invites a penal interest per lender of 24% per annum on the due amount for the
        duration of delay or Rs. 50/-, whichever is more + Rs. 250/- towards dishonor of a cheque payable directly to
        the Lender(s). In addition to that, an admin fee of Rs. 500/- will be charged to the defaulting borrower by
        Funding.com. We encourage timely payments to avoid penalty.


    </p>
    <p>So go on and <a href="{{ route('register') }}">SIGN UP</a> now to try out this new business opportunity because
        <strong>every % counts!</strong></p>

    <hr>

    <h3>The Agreement</h3>

    <p>
        Once the lender and borrower have reached a mutual agreement, Funding facilitates the signing of a
        legally-binding agreement between the borrower and the lenders.
    </p>
    <p>
        We use a tech-enabled, paper-less and presence-less process wherein the borrower and lenders sign the
        legally-binding agreement online. The agreement is available online on the borrower and lender’s Funding
        account. They login to their respective accounts, read and understand the terms and conditions mentioned,
        “digitally sign” by clicking on the acceptance box under the agreement and the process is complete. The
        agreement is then sent to both the borrowers and lenders through email for their records. The process, though
        legally binding just like a physical agreement, is faster and more efficient ensuring faster flow of loan amount
        from lender to borrower.
    </p>
    <p>
        So go on and <a href="{{ route('register') }}">SIGN UP</a> now to try out this new business opportunity because <strong>every % counts!</strong>
    </p>

    </p>
@endsection


