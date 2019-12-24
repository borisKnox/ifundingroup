@extends('frontend.lenders.master')


@section('superTitle', 'Borrowers')
@section('subTitle', 'Borrower Eligibility Criteria')

@section('contents')
    <div class="mid_cmpnp fl">
        <h3><strong>Borrower eligibility criteria</strong></h3>

        <p><strong>A Borrower on Funding must:</strong></p>

        <ol>
            <li>Be a resident of India.</li>
            <li>Have a minimum gross income of INR 2 lacs per annum.</li>
            <li>Provide all the documents mentioned in the checklist.</li>
        </ol>

        <p><strong>QUICK CHECK OF DOCUMENTATION REQUIRED</strong></p>

        <p>Borrowers will be required to provide Funding with following documentation at the time of verification.</p>

        <table border="1" cellpadding="0" cellspacing="0" id="table_even" style="width:100%">
            <tbody>
            <tr>
                <td>1</td>
                <td>Photographs</td>
                <td>2 copies</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Identity Proof (any one of the following)</td>
                <td>
                    <ul>
                        <li>PAN Card</li>
                        <li>Adhaar Card</li>
                        <li>Voter ID</li>
                        <li>Passport</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Date of Birth Proof (any one of the following)</td>
                <td>
                    <ul>
                        <li>PAN Card</li>
                        <li>Passport</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Signature Proof (any one of the following)</td>
                <td>
                    <ul>
                        <li>PAN Card</li>
                        <li>Signature verification from your bank</li>
                        <li>Passport</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Address Proof (any one of the following)</td>
                <td>
                    <ul>
                        <li>Passport</li>
                        <li>Bank Statement&nbsp;</li>
                        <li>Voter ID&nbsp;</li>
                        <li>Electricity Bill (within last 3 months)&nbsp;</li>
                        <li>Post paid Telephone Bill&nbsp;</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Contact Proof (any one of the following)</td>
                <td>
                    <ul>
                        <li>Post paid Mobile Bill (last month)</li>
                        <li>Post paid Landline Bill (last month)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>7(a)</td>
                <td>Bank Statements</td>
                <td>Last 6 months</td>
            </tr>
            <tr>
                <td>7(b)</td>
                <td>IFSC code</td>
                <td>Scanned/canceled cheque or copy of the front page of pass book of same bank account</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Proof of Income&nbsp;</td>
                <td>
                    <ul>
                        <li>Last 3 months of Salary Slip (For Salaried Professional)</li>
                        <li>Last year’s Business/Personal ITR &amp; Take home salary (For Business Professional)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>NACH Mandate&nbsp;</td>
                <td>
                    <p>Please ensure sign matches bank account signatures</p>
                </td>
            </tr>
            </tbody>
        </table>

        <p>NACH is used to electronically transfer funds from lender’s escrow account to Borrower’s bank account and to
            make repayments from borrower’s account to lender’s escrow account. Thus, it’s important to ensure that the
            sign on the NACH mandate matches with the borrower’s bank account signature.</p>

        <p>Information provided by you will be used strictly for official purposes, and Funding safeguards client
            confidentiality. For further information, please read the <a href="/privacy-policy"> Funding
                Policy&nbsp;</a>and<a href="/terms-conditions"> Terms and Conditions&nbsp;</a>mentioned on the website.
        </p>
    </div>



@endsection


