@extends('frontend.lenders.master')


@section('superTitle', 'Borrowers')
@section('subTitle', 'Why Borrow On Funding?')

@section('contents')


    <div class="mid_cmpnp fl">
        <h3><strong>Repayments</strong></h3>

        <p>The first EMI is payable by cheque. Thereafter, repayments– EMI and pre-closure – are made through an online,
            automated procedure. This is a faster and simpler method wherein monthly EMIs and repayments happen online
            via Electronic Money Transfer without the need to issue numerous cheques to each lender. This process is
            enabled using NACH mandate collected along with other documents at the time of listing the loan. Every month
            the entire EMI amount is collected directly, through auto-debit, from the borrower’s salary account into
            Escrow Account from where it is disbursed to respective lenders after consolidation.</p>

        <h3><strong><strong><strong>Fees</strong></strong></strong></h3>

        <p>We charge a one-time filing fee of Rs. 500/- from Borrowers which is due at the time of registration. This
            fee is non-refundable, except in case the borrower’s location cannot be serviced by Funding.</p>

        <p>Once the loan agreement is closed, prior to disbursement, a non-refundable processing fee based on loan
            amount, tenure and interest rate is charged. The Borrower understands and agrees that Funding is entitled
            to debited the Processing Fee from the total loan amount before transferring the sum to borrower’s bank
            account. Please find the indicative processing fees structure below. However, the actual Processing fees
            will be communicated through email to each borrower at the time of listing the loan on the platform.</p>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>Rate of Interest on loan</td>
                <td class="rtecenter">&gt;10-14%</td>
                <td class="rtecenter">&gt;14-18%</td>
                <td class="rtecenter">&gt;18-22%</td>
                <td class="rtecenter">&gt;22-26%</td>
                <td class="rtecenter">&gt;26-30%</td>
                <td class="rtecenter">&gt;30%</td>
            </tr>
            <tr>
                <td>Max Processing fees*</td>
                <td>2.50% - 6.50%</td>
                <td>2.90% - 6.90%</td>
                <td>3.30% - 7.30%</td>
                <td>3.70% - 7.70%</td>
                <td>4.10% - 8.10%</td>
                <td>4.50% - 8.50%</td>
            </tr>
            </tbody>
        </table>

        <p>*Service tax/GST/other taxes to be charged additionally as applicable</p>

        <p>The Processing Fee is subject to change as per Funding’s discretion and shall be updated on the website. All
            fees and/or any charges incurred post listing and funding of the borrower's loan requirement is
            non-refundable.</p>

        <p>For more details, <a href="{{ route('contactus') }}">CONTACT US </a>and feel free to interact with all your queries.</p>

        <h3><strong><strong><strong>Pre-Payment of Loan</strong></strong></strong></h3>

        <p>A borrower can choose to pre-pay the entire loan amount without any penalty after three months from the date
            of disbursal of the loan. Prior to three months, in order to safeguard Lender’s interest, pre-closure can be
            done after paying balance interest due to lenders for a period of three months from the date of disbursal.
            This is payable to Lenders.A one-time non-refundable pre-payment fees of Rs. 500/- will be charged by
            Funding to the Borrower.</p>

        <h3><strong><strong><strong>Non-Payment</strong></strong></strong></h3>

        <p><span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">Borrowers are morally and legally obliged to pay all dues in a timely manner. In case the EMI is not paid on the scheduled time, a penal interest @ 18 p.a.&nbsp;will be charged.&nbsp;These charges are applicable for each instance of delayed repayment. Funding will also charge a collection penalty of Rs. 500/- per delayed payment as per schedule of charges below:</span>
        </p>

        <p><strong
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><span
                    style="box-sizing: border-box; text-decoration-line: underline; margin-bottom: 0px !important;">Days delayed</span>&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><strong
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><span
                    style="box-sizing: border-box; text-decoration-line: underline;">&nbsp;Fee/EMI</span></strong><br
                style="box-sizing: border-box; margin-bottom: 0px !important;">
            <br style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">1-90&nbsp;days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rs 500</span><br
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <br style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">91-180 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rs 1000</span><br
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <br style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">181-365 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Rs 2500&nbsp;</span><br
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <br style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">Beyond 365 days, the Collection penalty charges would be Rs 1000/EMI/month.</span><br
                style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">So, Funding encourages all borrowers to make timely payments to avoid penalty charges.</span>
        </p>

        <p>
            <br style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
            <span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">In the worst-case scenario, if Funding has to issue a legal notice to a defaulting borrower on behalf of the lenders then a charge of Rs. 500/- per legal notice will be payable by the borrower to Funding.</span>
        </p>

        <h3><strong>Other Fees</strong></h3>

        <p>To maintain efficiency, the repayment process is being handled by Funding through a system-driven, automated
            mechanism. Hence, we discourage borrowers from changing their EMI date or bank account details through which
            an ongoing loan repayment process is carried on. However, under certain unforeseen circumstance this may be
            inevitable.In such a scenario, borrowers must inform us in writing on support@Funding.com and pay a
            nominal, non-refundable fee of Rs.500/- per bank account swap and/or per EMI date change.</p>

        <p>Borrowers are obliged to maintain details of their loan including statement of accounts. In case, they need
            Funding’s assistance in this regard then a non-refundable fee of Rs. 100/- per statement of accounts will
            be charged.</p>

        <h3><strong><strong><strong>Refund Policy</strong></strong></strong></h3>

        <p>All fees and charges are non-refundable. The&nbsp;one-time listing fees of Rs. 500/- is non-refundable,
            except in case the borrower’s location cannot be serviced by Funding.</p>

        <p>Please note that Funding provides a complimentary e-book (worth Rs. 600/-) to all rejected applicants. The
            e-book provides suggestions on how a loan seeker can improve his/her credit profile.</p>

        <h3>&nbsp;</h3>

        <p>Funding.com only facilitates a virtual meeting place between Borrowers and Lenders on its online platform.
            The decision to lend money to a borrower is entirely at the discretion of the Lenders and Funding does not
            guarantee that a borrower will receive any loans from the Lenders. Funding merely aids and assists Lenders
            and Borrowers listed on its website to make and receive loans and charges a service fee from Lenders and
            Borrowers for such assistance. Funding is only an ‘Intermediary’ under the provisions of the Information
            Technology Act, 1999.</p>
    </div>

@endsection


