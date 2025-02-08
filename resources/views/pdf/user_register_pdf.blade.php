<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>Ventura Form</title>

    {{-- Fav icon --}}
    <link rel="icon" href="{{ url('frontend/images/logo.png') }}">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-size: 19px;
        }

        /* Style for paragraph element */
        p {
            text-align: justify;
            font-weight: 700;
        }

        /* Style for anchor tag */
        a {
            color: windowtext;
            text-decoration: none;
        }

        .WordSection1 {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .header,
        .footer {
            width: 100%;
            position: fixed;
            background-color: #f58220;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .header {
            height: 200px;
        }

        .footer {
            font-size: 15px;
        }

        .logo {
            margin-top: 30px;
            text-align: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
            width: auto;
            margin-top: 170px;
            /* margin-bottom: 100px; */
        }

        .form-section {
            width: 80%;
            border: 2px solid #000;
            padding: 20px;
            margin: 20px auto;
            box-sizing: border-box;
            max-height: calc(100% - 220px);
            /* Prevents overflow */
            overflow: hidden;
        }

        .form-section p {
            margin: 10px 0;
            font-size: 16px;
        }

        .footer {
            margin-top: 60px;
            width: 100%;
            background-color: #f58220;
            text-align: center;
            padding: 10px 0;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            position: absolute;
        }

        .footer span {
            display: block;
            font-size: 14px;
            margin-top: 5px;
            font-weight: normal;
        }

        .WordSection2 {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        table {
            border: 1px solid #f2f2f2;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }
        .underline {
            /* border-bottom: 1px solid #000; */
            text-decoration: underline;
            display: inline-block;
            text-align: left;
            line-height: 20px;
            text-transform: Capitalize;
            width: 100%;
        }
        .label {
            color: rgb(145, 145, 145);
            font-size: 13px;
        }

        th {
            background-color: #f2f2f2;
        }

        .instructions-header {
            font-family: "Trebuchet MS", sans-serif;
            color: black;
            background-color: lightgrey;
            padding: 5px;
            text-align: center;
            font-weight: bold;
            letter-spacing: 0.9pt;
        }

        .list-paragraph {
            margin-top: 5px;
            margin-left: 65px;
            text-align: justify;
        }

        .list-paragraph b {
            font-weight: bold;
        }

        .logo-container {
            position: absolute;
            top: 0;
            right: 0;
        }

        .logo-container img {
            height: 50px;
            width: 200px;
        }

        .heading {
            margin-top: 6.95pt;
            margin-left: 45.35pt;
            text-indent: -19.85pt;
        }

        .body-text {
            margin-top: 6.3pt;
            margin-left: 45.35pt;
        }

        .body-text p {
            margin-bottom: 0;
        }

        .body-text span {
            font-weight: bold;
        }

        .WordSection3 {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .instructions-header {
            text-align: center;
            font-weight: bold;
            letter-spacing: 0.9pt;
        }

        .list-paragraph {
            font-size: 16px;
            margin: 10px 0;
        }

        .WordSection4 {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .WordSection5 {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .square-box {
            display: inline-block;
            width: 11px;
            height: 11px;
            border: 1px solid #000;
            margin: 2px;
        }

        td div {
            display: flex;
            gap: 5px; /* Optional spacing between boxes */
            align-items: center;
        }
        .small-square-box {
            width: 17px !important;
            height: 17px !important;
            border: 1px solid #1f1e1e;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            background-color: #f9f9f9 !important;
        }

        .d-flex {
            display: flex;
            align-items: center; /* Vertically align the box and the text */
            justify-content: flex-start; /* Align everything to the left */
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <!-- First Page with Design -->
    <div class="WordSection1">
        <!-- Header Section -->
        <div class="header"></div>

        <!-- Logo -->
        <div class="logo">
            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/ventura_logo.jpg'))) }}"
                alt="Ventura Logo">
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <p>Name Of Client :
                <span style="display: inline-block; width: 80%; padding-bottom: 2px; border-bottom: 1px solid #000; text-align: left;">
                    {{ $data['client_name'] ?? '_________________________' }}
                </span>
            </p>
            <p>Client Code :
                <span style="display: inline-block; width: 35%; padding-bottom: 2px; border-bottom: 1px solid #000; text-align: center;">
                    {{ $data['client_code'] ?? '____________________' }}
                </span>
                &nbsp;&nbsp;
                Client ID :
                <span style="display: inline-block; width: 35%; padding-bottom: 2px; border-bottom: 1px solid #000; text-align: center;">
                    {{ $data['client_id'] ?? '____________________' }}
                </span>
            </p>
            <p>Branch :
                <span style="display: inline-block; width: 80%; padding-bottom: 2px; border-bottom: 1px solid #000; text-align: left;">
                    {{ $data['branch_name'] ?? '________________________' }}
                </span>
            </p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            Client Registration Form - INDIVIDUAL
            <span>(Equity + Demat + Commodity)</span>
            <span>THROUGH BUSINESS ASSOCIATES</span>
        </div>
    </div>

    <!-- Second Page with Content -->
    <div class=WordSection2>

        <p class="MsoBodyText">
        <table border="1" style="border-collapse: collapse; border-color: #000000; width: 20%; float: right;">
            <tr>
                <td style="padding: 5px; text-align: center; font-weight: bold;">
                    PART - A
                </td>
            </tr>
        </table>
        </p>

        <div style="text-align: center; margin-top: 1.9pt; margin-right: 0in; margin-bottom: 2.3pt; margin-left: 2.85pt;">
            ACCOUNT <span style="letter-spacing: .5pt;"> </span>
            OPENING <span style="letter-spacing: .5pt;"> </span>
            KIT <span style="letter-spacing: .5pt;"> </span>
            - <span style="letter-spacing: .5pt;"> </span>
            INDIVIDUAL <span style="letter-spacing: .5pt;"> </span>
            <span style="letter-spacing: -.1pt;">INDEX</span>
        </div>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td style="width: 10%; background: #D1D3D4; text-align: center;">Sr. No.</td>
                    <td style="width: 30%; background: #D1D3D4; text-align: center;">Name of the Document</td>
                    <td style="width: 30%; background: #D1D3D4; text-align: center;">Brief Significance of the Document
                    </td>
                    <td style="width: 26.1pt; background: #D1D3D4; text-align: center;">Part</td>
                    <td colspan="2" style="background: #D1D3D4; text-align: center;">Page No.</td>
                </tr>
                <tr>
                    <td style="background: #D1D3D4;">&nbsp;</td>
                    <td style="background: #D1D3D4;">&nbsp;</td>
                    <td style="background: #D1D3D4;">&nbsp;</td>
                    <td style="background: #D1D3D4;">&nbsp;</td>
                    <td style="width: 13%; background: #D1D3D4; text-align: center;">From</td>
                    <td style="width: 13%; background: #D1D3D4; text-align: center;">To</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="6" style="text-align: center;">
                        <strong>MANDATORY DOCUMENTS AS PRESCRIBED BY SEBI / EXCHANGES / DEPOSITORY</strong>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Account Opening Form</td>
                    <td style="text-align: justify;">
                        A. KYC form - Document captures the basic information about the constituent and In-Person
                        Verification details and instructions<br>
                        B. Document captures the additional information about the constituent relevant to trading and
                        demat account.
                    </td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">8</td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Tariff Schedule - Equity and Commodity</td>
                    <td style="text-align: justify;">Document detailing the rate/amount of brokerage and other charges
                        levied on the client for trading on the stock exchange(s).</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">14</td>
                    <td style="text-align: center;">15</td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Schedule of DP Charges and Option for DIS Booklet</td>
                    <td style="text-align: justify;">Charges for Depository Services / Demat charges and option for
                        issuance of DIS booklet.</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">16</td>
                    <td style="text-align: center;"></td>17</td>
                </tr>
                <tr>
                    <td style="text-align: center;">4</td>
                    <td>Acknowledgement letter</td>
                    <td style="text-align: justify;">Acknowledgement indicating receipt of documents by client.</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">18</td>
                    <td style="text-align: center;">19</td>
                </tr>
                <tr>
                    <td style="text-align: center;">5</td>
                    <td>FATCA/CRS Declaration Form</td>
                    <td style="text-align: justify;">Account opening form supplement</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">24</td>
                    <td style="text-align: center;">26</td>
                </tr>
                <tr>
                    <td style="text-align: center;">6</td>
                    <td>Consent & MITC</td>
                    <td>Consent for usage of Aadhaar Number & Most Important Terms and Conditions (MITC)</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">27</td>
                    <td style="text-align: center;">28</td>
                </tr>
                <tr>
                    <td style="text-align: center;">7</td>
                    <td>Rights and Obligations</td>
                    <td style="text-align: justify;">Document detailing the rights and obligations of the account
                        holder.</td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">29</td>
                    <td style="text-align: center;">31</td>
                </tr>
                <tr>
                    <td style="text-align: center;">8</td>
                    <td>Risk Disclosure Document (RDD)</td>
                    <td style="text-align: justify;">Document detailing risks associated with dealing in the securities
                        market.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">11</td>
                    <td style="text-align: center;">13</td>
                </tr>
                <tr>
                    <td style="text-align: center;">9</td>
                    <td>Guidance Note</td>
                    <td style="text-align: justify;">Document detailing do’s and don’ts for trading on exchange, for the
                        education of the investors.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">14</td>
                    <td style="text-align: center;">15</td>
                </tr>
                <tr>
                    <td style="text-align: center;">10</td>
                    <td>Policies and Procedures</td>
                    <td style="text-align: justify;">Document describing significant policies and procedures of the
                        stock broker.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">16</td>
                    <td style="text-align: center;">18</td>
                </tr>
                <tr>
                    <td style="text-align: center;">11</td>
                    <td>Rights and Obligations of DP</td>
                    <td style="text-align: justify;">Rights and Obligations of Beneficial Owner and Depository
                        Participant as prescribed by SEBI and Depositories.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">34</td>
                    <td style="text-align: center;">35</td>
                </tr>
                <tr>
                    <td style="text-align: center;">12</td>
                    <td>Intimation of Money Laundering</td>
                    <td style="text-align: justify;">This document is to make the client aware of Anti Money Laundering
                        (AML) provisions.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">36</td>
                    <td style="text-align: center;">36</td>
                </tr>
                <tr>
                    <td style="text-align: center;">13</td>
                    <td>Risk Disclosure Document, Rights and Obligations and Do’s & Don’ts (Commodities)</td>
                    <td style="text-align: justify;">Document detailing risks associated with dealing in Commodity
                        Market, Rights and Obligations and Do’s & Don’ts for trading on Commodity Exchange for the
                        education of the investor.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">37</td>
                    <td style="text-align: center;">49</td>
                </tr>
                <tr>
                    <td style="text-align: center;">14</td>
                    <td>Investor Charter - Stock Brokers</td>
                    <td style="text-align: justify;">Annexure-A.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">50</td>
                    <td style="text-align: center;">53</td>
                </tr>
                <tr>
                    <td style="text-align: center;">15</td>
                    <td>Investor Charter - DP</td>
                    <td style="text-align: justify;">Investor Charter by Depository Participants.</td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">54</td>
                    <td style="text-align: center;">59</td>
                </tr>

                <tr>
                    <td colspan="6" style="text-align: center;">
                        <strong>VOLUNTARY DOCUMENTS AS PROVIDED BY THE STOCK BROKER / DEPOSITORY</strong>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">16</td>
                    <td>Letter of Appointment</td>
                    <td style="text-align: justify;">
                        This document allows the client to give authority to another person for placing / giving /
                        executing orders on his / her behalf.
                    </td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">19</td>
                    <td style="text-align: center;">19</td>
                </tr>
                <tr>
                    <td style="text-align: center;">17</td>
                    <td>Authorization for running account / request letter</td>
                    <td style="text-align: justify;">
                        Letter of authority / request to Ventura Securities Limited
                    </td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">20</td>
                    <td style="text-align: center;">20</td>
                </tr>
                <tr>
                    <td style="text-align: center;">18</td>
                    <td>Other Voluntary Consents</td>
                    <td style="text-align: justify;">
                        Consent for Electronic Contract Note (ECN), undertaking for High Value Transactions in Commodity
                        Market.
                    </td>
                    <td style="text-align: center;">A</td>
                    <td style="text-align: center;">21</td>
                    <td style="text-align: center;">23</td>
                </tr>
                <tr>
                    <td style="text-align: center;">19</td>
                    <td>Rights and Obligations</td>
                    <td style="text-align: justify;">
                        Additional clauses forming part and parcel of mandatory Rights and Obligations.
                    </td>
                    <td style="text-align: center;">B</td>
                    <td style="text-align: center;">19</td>
                    <td style="text-align: center;">33</td>
                </tr>
                <tr>
                    <td style="text-align: center;">20</td>
                    <td>DDPI</td>
                    <td style="text-align: justify;">Demat Debit and Pledge Instruction (DDPI)</td>
                    <td style="text-align: center;">B</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <br />

        <table>
            <tr>
                <th>Name of Stock Broker/Trading Member</th>
                <th colspan="3">VENTURA SECURITIES LIMITED</th>
            </tr>
            <tr>
                <th>Single SEBI Regn. No.</th>
                <td>SEBI Registration INZ000194736</td>
                <th>Regn. Date</th>
                <td>August 21, 2018</td>
            </tr>
            <tr>
                <th>SEBI Regn. No. NSDL</th>
                <td colspan="3">IN-DP-565-2021 DP ID-IN303116</td>
            </tr>
            <tr>
                <th>Clearing Member - NSE Commodity Derivatives</th>
                <td colspan="3">SMC Global Securities Limited</td>
            </tr>
            <tr>
                <th>SEBI Regn. No.</th>
                <td>INZ000199438</td>
                <th>Regn. Date</th>
                <td>September 12, 2018</td>
            </tr>
            <tr>
                <th>Registered Office address</th>
                <td colspan="3">
                    SMC Global Securities Ltd.,<br>
                    11/6B, Shanti Chamber, Pusa Road, New Delhi-110005
                </td>
            </tr>
            <tr>
                <th>Registered / Correspondence Office</th>
                <td colspan="3">
                    I-Think Techno Campus, “B” Wing, 8th Floor, Off. Pokhran Road No. 2,<br>
                    Close to Eastern Express Highway, Thane (West) - 400607, Maharashtra, India.
                </td>
            </tr>
        </table>
        <br>

        <table>
            <tr>
                <th><span class="bold">Phone No.</span></th>
                <td>91-22-6754 7000</td>
                <td>91-22-6622 7100</td>
                <td>
                    <span class="bold">Website:</span>
                    <a href="http://www.venturasecurities.com/">www.venturasecurities.com</a>
                </td>
            </tr>
        </table>
        <br>

        <table>
            <thead>
                <tr>
                    <th>Compliance Officer Name</th>
                    <th>CEO Name</th>
                    <th>Tel. No.</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mr. D. P. Singh</td>
                    <td>Mr. Hemant Majethia</td>
                    <td>91-22-6754 7000</td>
                    <td><a href="mailto:compliance@ventura1.com">compliance@ventura1.com</a></td>
                </tr>
            </tbody>
        </table>
        <br>

        <p>
            <span style="letter-spacing: -0.3pt;">
                For any grievance / dispute please contact us at the above address or email id -
            </span>
            <a href="mailto:complaints@ventura1.com">
                complaints@ventura1.com
            </a>
            <span style="letter-spacing: -0.3pt;">
                and Phone no.
            </span>
            91-22-67547000. In case not satisfied with the response, please contact BSE at
            <a href="mailto:dis@bseindia.com">dis@bseindia.com</a>
            and phone no. 91-22-22728517, NSE at
            <a href="mailto:ignse@nse.co.in">ignse@nse.co.in</a>
            and phone no. 1800 266 0058 / 91-22-26598191, MCX at
            <a href="mailto:grievance@mcxindia.com">grievance@mcxindia.com</a>
            and phone no. 91-22-66494070 / 91-22-67318888 & Option 0, NCDEX at
            <a href="mailto:ig@ncdex.com">ig@ncdex.com</a>
            and phone no. 1800 26 62339 / 91-22-66406789
        </p>

    </div>

    <!-- Third Page with Content -->
    <div class="WordSection3">
        <div style="position: absolute; top: 0; right: 0;">
            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/ventura_logo.jpg'))) }}"
                alt="Ventura Logo" style="height: 50px; width: 200px;">
        </div>

        <div class="row">
            <p class="instructions-header">INSTRUCTIONS/CHECK LIST FOR FILLING KYC FORM</p>

            <p class="list-paragraph">A. IMPORTANT POINTS:</p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                1. Self-attested copy of PAN card is mandatory for all clients,
                including Promoters/Partners/Karta/Trustees and whole-time
                directors and persons authorized to deal in securities on
                behalf of company/firm/others.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                2. Copies of all the documents submitted by the applicant should
                be self-attested and accompanied by originals for verification.
                In case the original of any document is not produced for
                verification, then the copies should be properly attested by
                entities authorized for attesting the documents, as per the
                below-mentioned list.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                3. If any proof of identity or address is in a foreign
                language / regional language, then translation into
                English is required.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                4. Name & address of the applicant mentioned on the KYC form, should
                match with the documentary proof submitted.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                5. If correspondence & permanent address are different, then proofs for both have to be submitted.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                6. Sole proprietor must make the application in his individual name & capacity.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                7. For non-residents and foreign nationals, (allowed to trade subject to RBI
                and FEMA guidelines), copy of passport/PIO Card/ OCI Card and overseas
                address proof is mandatory.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                8. For foreign entities, CIN is optional; and in the absence of DIN no. for
                the directors, their passport copy should be given.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                9. In case of Merchant Navy NRI’s, Mariner’s declaration or certified copy of
                CDC (Continuous Discharge Certificate) is to be submitted.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                10. For opening an account with Depository participant or Mutual Fund, for a
                minor, photocopy of the School Leaving Certificate / Mark sheet issued by
                Higher Secondary Board / Passport of Minor / Birth Certificate must be
                provided.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                11. Politically Exposed Persons (PEP) are defined as individuals who are or
                have been entrusted with prominent public functions in a foreign country,
                e.g., Heads of States or of Governments, senior politicians, senior
                Government / judicial / military officers, senior executives of state
                owned corporations, important political party officials, etc.
            </p>
        </div>


        <div class="row" style="margin-top: 40px;">
            <p class="list-paragraph">B. Proof of Identity (POI) : - List of documents admissible as Proof of Identity:
            </p>

            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                1. Unique Identification Number (UID) (Aadhaar)/ Passport/ Voter ID card/ Driving license.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                2. PAN card with photograph.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                3. Identity card / document with applicant's Photo, issued by any of the following :
                Central / State Government and its Departments, Statutory / Regulatory Authorities,
                Public Sector Undertakings, Scheduled Commercial Banks, Public Financial Institutions,
                Colleges affiliated to Universities, Professional Bodies such as ICAI, ICWAI, ICSI, Bar
                Council etc., to their Members; and Credit cards / Debit cards issued by Banks.
            </p>
        </div>

        <div class="row">
            <p class="list-paragraph">C. Proof of Address : - List of documents admissible as Proof of Address :</p>
            <p style="text-align: justify; font-weight: normal;">
                (*Documents having an expiry date should be valid on the date of submission.)
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                1. Passport / Voters Identity Card / Ration Card / Registered Lease or Sale Agreement
                of Residence / Driving License / Flat Maintenance bill / Insurance Copy /
                Aadhaar Card.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                2. Utility bills like Telephone Bill (only land line), Electricity bill or Gas
                bill - Not more than 3 months old.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                3. Bank Account Statement / Passbook - Not more than 3 months old.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                4. Self-declaration by High Court and Supreme Court judges, giving the new address
                in respect of their own accounts.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                5. Proof of address issued by any of the following: Bank Managers of Scheduled Commercial
                Banks / Scheduled Co-Operative Bank / Multinational Foreign Banks / Gazetted Officer
                / Notary public / Elected representatives to the Legislative Assembly / Parliament
                / Documents issued by any Govt. or Statutory Authority.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                6. Identity card / document with address, issued by any of the following: Central / State Government
                and its Departments, Statutory / Regulatory Authorities, Public Sector Undertakings, Scheduled
                Commercial Banks, Public Financial Institutions, Colleges affiliated to Universities and
                Professional Bodies such as ICAI, ICWAI, ICSI, Bar Council etc., to their Members.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                7. For FII / sub account, Power of Attorney given by FII / sub-account to the Custodians
                (which are duly notarized and/or apostiled or consularised) that gives the registered
                address should be taken.
            </p>
        </div>

        <div class="row">
            <p class="list-paragraph">D. Exemptions/clarifications to PAN :</p>
            <p style="text-align: justify; font-weight: normal;">
                (*Sufficient documentary evidence in support of such claims to be collected.)
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                1. In case of transactions undertaken on behalf of Central Government and / or
                State Government and by officials appointed by Courts e.g. Official liquidator,
                Court receiver etc.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                2. Investors residing in the state of Sikkim.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                3. UN entities/multilateral agencies exempt from paying taxes / filing tax returns
                in India.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                4. SIP of Mutual Funds upto Rs 50,000 /- p.a.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                5. In case of institutional clients, namely, FIIs, MFs, VCFs, FVCIs,
                Scheduled Commercial Banks, Multilateral and Bilateral Development Financial Institutions,
                State Industrial Development Corporations, Insurance Companies registered with IRDA and
                Public Financial Institution as defined under section 4A of the Companies Act, 1956,
                Custodians shall verify the PAN card details with the original PAN card and provide duly
                certified copies of such verified PAN details to the intermediary.
            </p>
        </div>

        <div class="row">
            <p class="list-paragraph">E. List of people authorized to attest the documents :</p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                1. Notary Public, Gazetted Officer, Manager of a Scheduled Commercial /
                Co-operative Bank or Multinational Foreign Banks (Name, Designation
                & Seal should be affixed on the copy).
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                2. In case of NRIs, authorized officials of overseas branches of Scheduled Commercial Banks
                registered in India, Notary Public, Court Magistrate, Judge, Indian Embassy /
                Consulate General in the country where the client resides are permitted to attest the
                documents.
            </p>
        </div>

    </div>

    <!-- Fourt Page with Content -->
    <div class="WordSection4">
        <div style="position: relative; right: 0;">
            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/ventura_logo.jpg'))) }}" alt="Ventura Logo" style="height: 50px; width: 200px;">
        </div>

        <div class="row">
            <p class="list-paragraph">F. Additional documents in case of trading in derivatives segments - illustrative
                list :</p>
            <table class="table table-bordered">
                <tr>
                    <td>Copy of ITR Acknowledgement</td>
                    <td>Copy of Annual Accounts</td>
                </tr>
                <tr>
                    <td>In case of salary income - Salary Slip, Copy of Form 16</td>
                    <td>Net worth certificate</td>
                </tr>
                <tr>
                    <td>Copy of demat account holding statement.</td>
                    <td>Bank account statement for last 6 months</td>
                </tr>
                <tr>
                    <td>Any other relevant documents substantiating ownership of assets.</td>
                    <td>Self declaration with relevant supporting documents.</td>
                </tr>
            </table>

            <p style="text-align: justify; font-weight: normal; font-size:16px;">
                *In respect of other clients, documents as per risk management policy of the
                stock broker need to be provided by the client from time to time.
            </p>
        </div>

        <div class="row">
            <p style="text-align: justify; font-weight: normal; font-size:16px;">
                <b>G.</b> Copy of cancelled cheque leaf / pass book / bank statement specifying name of the
                constituent, MICR Code and IFSC Code of the bank should be submitted.
            </p>
        </div>

        <div class="row">
            <p style="text-align: justify; font-weight: normal; font-size:16px;">
                <b>H.</b> Demat master or recent holding statement issued by DP bearing name of the client.
            </p>
        </div>

        <div class="row">
            <p class="list-paragraph">I. For individuals :</p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                a. Stock broker has an option of doing 'in-person' verification through web camera at the
                branch office of the stock broker /sub- broker's office.
            </p>
            <p style="margin-left: 40px; text-align: justify; font-weight: normal; font-size:16px;">
                b. In case of non-resident clients, employees at the stock broker's local office, overseas
                can do in-person' verification. Further, considering the infeasibility of carrying out
                'In-person' verification of the non-resident clients by the stock broker's staff,
                attestation of KYC documents by Notary Public, Court, Magistrate, Judge, Local Banker,
                Indian Embassy / Consulate General in the country where the client resides may be permitted.
            </p>
        </div>

    </div>

    <!--- Fifth Page with Content -->
    <div class="WordSection5">

        <table style="border-collapse: collapse; border-color: #f7efef; width: 30%; float: right;">
            <tr>
                <td style="padding: 10px; text-align: left; font-weight: bold; font-size: 20px; line-height: 20px;">
                    FU | {{ $data['client_code'] ?? '' }}
                </td>
            </tr>
        </table>
        <br><br><br>

        <!-- Instructions Section -->
        <table style="width: 100%; font-size: 13px; font-weight: normal !important; ">
            <thead>
                <tr>
                    <th style="text-align: left;  padding-bottom: 5px;" colspan="3">
                        CENTRAL KYC REGISTRY | Know Your Cusstomer (KYC) Application Form | Individual
                    </th>
                </tr>
                <tr>
                    <th style="text-align: left;  padding-bottom: 5px;" colspan="3">
                        <h4>Important Instructions:</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Section 1 -->
                    <td style="vertical-align: top; width: 40% !important; text-align: justify;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <p>(A) Fields marked with “*” are mandatory fields.</p>
                            <p>(B) Please fill the form in English and in BLOCK letters.</p>
                            <p>(C) Please fill the date in DD-MM-YYYY format.</p>
                            <p>(D) Please read section-wise detailed guidelines/instructions at the end.</p>
                        </ul>
                    </td>
                    <!-- Section 2 -->
                    <td style="vertical-align: top; width: 50%; text-align: justify;">
                        <ul style="list-style-type: none; padding-left: 0; font-style: normal;">
                            <p>(E) List of State/U.T codes as per Indian Motor Vehicle Act, 1988 is available at the
                                end.</p>
                            <p>(F) List of two-character ISO 3166 country codes is available at the end.</p>
                            <p>(G) KYC number of applicant is mandatory for update application.</p>
                            <p>(H) For particular section update, please tick (✓) in the box available before the
                                section
                                number and strike off the sections not required to be updated.
                            </p>
                        </ul>
                    </td>
                    <!-- Section 3 -->
                    <td style="vertical-align: top; padding: 10px; width: 10%;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/central_KYC_logo.png'))) }}" alt="Ventura Logo">
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width: 100%; font-weight: normal !important;">
            <thead style="background-color: #757879 !important;">
                <tr>
                    <th colspan="5">
                        <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000;"></div>
                        For office use only (To be filled by financial institution)
                    </th>
                </tr>
                <tr>
                    <th colspan="4" style="vertical-align: top; ">
                        <span style="font-size: 14px;">Application Type <span style="color: red">*</span></span>
                    </th>
                    <th rowspan="3" class="d-flex" style="font-size: 14px;">
                        <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; text-align: center;">
                            @if($data['application_type'] == 1)
                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                alt="Ventura Logo" style="height: 20px; width: 20px;">
                            @else
                                &nbsp;
                            @endif
                        </div> New
                    </th>
                    <th rowspan="3" class="d-flex" style="font-size: 14px;">
                        <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; text-align: center;">
                            @if($data['application_type'] == 2)
                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                alt="Ventura Logo" style="height: 20px; width: 20px;">
                            @else
                                &nbsp;
                            @endif
                        </div> Update
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <span style="font-size: 14px;"> KYC Number <span style="color: red">*</span>
                        @foreach(str_split($data['kyc_number']) as $digit)
                            <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;">
                                {{ $digit }}
                            </div>
                        @endforeach
                        <span style="font-size: 14px;">(Mandatory for KYC update request)</span>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <span style="font-size: 14px;">Account Type <span style="color: red">*</span></span>
                    </th>
                    <th rowspan="2" class="d-flex">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: nowrap;">
                            <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;" style="font-size: 14px;">
                                <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; text-align: center;">
                                    @if($data['account_type'] == '1')
                                    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                    alt="Ventura Logo" style="height: 20px; width: 20px;">
                                    @endif
                                </div> Normal
                            </label>
                        </div>
                    </th>
                    <th rowspan="2" class="d-flex">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: nowrap;">
                            <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;" style="font-size: 14px;">
                                <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; text-align: center;">
                                    @if($data['account_type'] == '2')
                                    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                    alt="Ventura Logo" style="height: 20px; width: 20px;">
                                    @endif
                                </div> Simplified (for low risk customer)
                            </label>
                        </div>
                    </th>
                    <th rowspan="2" class="d-flex">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: nowrap;">
                            <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;" style="font-size: 14px;">
                                <div class="square-box" style="width: 15px; height: 15px; border: 1px solid #000; text-align: center;">
                                    @if($data['account_type'] == '3')
                                    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                    alt="Ventura Logo" style="height: 20px; width: 20px;">
                                    @endif
                                </div> Small
                            </label>
                        </div>
                    </th>
                </tr>

            </thead>
        </table>

        {{-- Page Break --}}
        <div class="page-break"></div>

        {{-- First Name, Middle Name, Last Name Section --}}
        <table style="font-weight: normal;">
            <thead>
                <tr>
                    <th colspan="5">
                        1. PERSONAL DETAILS</strong> (Please refer to instruction A at the end)
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th><span class="label text-center">Prefix</span></th>
                    <th><span class="label text-center">First Name</span></th>
                    <th><span class="label text-center">Middle Name</span></th>
                    <th><span class="label text-center">Last Name</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name (Same as ID proof)</td>
                    @php
                        $prefixes = [1 => 'Mr.', 2 => 'Mrs.', 3 => 'Shri.', 4 => 'Shrimati'];
                        $prefix = $prefixes[$data['prefix']] ?? '';
                    @endphp
                    <td><div class="underline">{{ $prefix }}</div></td>
                    <td><div class="underline">{{ $data['first_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['middle_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['last_name'] ?? '' }}</div></td>
                </tr>

                <tr>
                    <td>Maiden Name (if any <span style="color: red;">*</span>)</td>
                    @php
                        $maiden_prefix = $prefixes[$data['maiden_prefix']] ?? '';
                    @endphp
                    <td><div class="underline">{{ $maiden_prefix }}</div></td>
                    <td><div class="underline">{{ $data['maiden_first_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['maiden_middle_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['maiden_last_name'] ?? '' }}</div></td>
                </tr>

                <tr>
                    <td>Father / Spouse Name <span style="color: red;">*</span></td>
                    @php
                        $father_prefix = $prefixes[$data['father_prefix']] ?? '';
                    @endphp
                    <td><div class="underline">{{ $father_prefix }}</div></td>
                    <td><div class="underline">{{ $data['father_first_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['father_middle_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['father_last_name'] ?? '' }}</div></td>
                </tr>

                <tr>
                    <td>Mother Name <span style="color: red;">*</span></td>
                    @php
                        $mother_prefix = $prefixes[$data['mother_prefix']] ?? '';
                    @endphp
                    <td><div class="underline">{{ $mother_prefix }}</div></td>
                    <td><div class="underline">{{ $data['mother_first_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['mother_middle_name'] ?? '' }}</div></td>
                    <td><div class="underline">{{ $data['mother_last_name'] ?? '' }}</div></td>
                </tr>
            </tbody>
        </table>

        {{-- Date of Birth Section --}}
        <table style="font-weight: normal;">
            <tbody>
                <tr>
                    <td>Date of Birth <span style="color: red;">*</span></td>

                    @php
                        $dob = \Carbon\Carbon::parse($data['date_of_birth'])->format('d-m-Y');
                    @endphp

                    <td>
                        @foreach(str_split($dob) as $char)
                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;">
                                {{ $char }}
                            </div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Gender, Marital Status, and Occupation --}}
        <table style="font-weight: normal;">
            <tbody>
                <!-- First Row -->
                <tr>
                    <td style="width: 22%; border: 1px solid #000; vertical-align: middle;">Gender <span style="color: red;">*</span></td>
                    <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                        <table>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['gender'] == '1')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}" alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> M - Male
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['gender'] == '2')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> F - Female
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['gender'] == '3')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> T - Transgender
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td rowspan="5" style="border: 1px solid #000; padding: 5px; width: 13%; text-align: center;">
                        <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/user_profile_pic.png'))) }}"
                            alt="User Profile" height="200px" width="140px"><br><br>
                        <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/signature_user_pic.png'))) }}"
                            alt="Signature" height="50px" width="140px">
                    </td>
                </tr>

                <!-- Second Row -->
                <tr>
                    <td style="width: 22%; border: 1px solid #000; vertical-align: middle;">
                        Marital Status <span style="color: Red;">*</span>
                    </td>
                    <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                        <table>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['marital_status'] == '1')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> Married
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['marital_status'] == '2')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> Unmarried
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['marital_status'] == '3')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> Others
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <!-- Third Row -->
                <tr>
                    <td style="width: 22%; border: 1px solid #000; vertical-align: middle;">
                        Citizenship <span style="color: red;">*</span>
                    </td>
                    <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                        <table>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['citizenship'] == 'IN')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> IN - Indian
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                        @if($data['citizenship'] == 'others')
                                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                 alt="Checkmark" style="height: 25px; width: 25px;">
                                        @endif
                                    </div> Others (ISO 3166 Country Code)
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Fourth Row -->
                <tr>
                    <td style="width: 22%; vertical-align: middle;">
                        Residential Status <span style="color: red;">*</span>
                    </td>
                    <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                        <table>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['residenital_status'] == '1')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Resident Individual
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['residenital_status'] == '2')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Foreign National
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['residenital_status'] == '3')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Non-Resident Indian
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['residenital_status'] == '4')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Person of Indian Origin
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Fifth Row -->
                <tr>
                    <td style="width: 22%; vertical-align: middle;">
                        Occupation Type <span style="color: red;">*</span>
                    </td>
                    <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                        <table>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '1')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> S - Service (Private Sector)
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '2')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Public Sector
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '3')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Government Sector
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '4')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Others (Professional)
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '5')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Self Employed
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '6')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Retired
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '7')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> B - Business
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '8')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Housewife
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '9')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> Student
                                    </label>
                                </td>
                                <td style="border: transparent !important; padding: 2px;">
                                    <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                        <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                            @if($data['occupation_type'] == '10')
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                     alt="Checkmark" style="height: 25px; width: 25px;">
                                            @else
                                                &nbsp;
                                            @endif
                                        </div> X - Not Categorised
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Page Break --}}
        <div class="page-break"></div>

        <div style="border: 1px solid #000; padding: 10px; font-family: Arial, sans-serif; width: fit-content; font-size:13px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 13px; background-color: #bdb5b5; padding:15px !important;">
                <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                2 . TICK IF APPLICABLE RESIDENCE FOR TAX PURPOSES IN JURISDICTION(S) OUTSIDE INDIA (Please refer to instruction B at the end)
            </label>

            <div style="margin-top: 10px; font-size: 11px;">
                <label>ADDITIONAL DETAILS REQUIRED <span style="color: red;">*</span></label>
                <span style="font-size: 12px;">(Mandatory only if section 2 is ticked)</span>
            </div>


            <table style="border-collapse: collapse; margin-top: 10px; font-size: 13px; width: 100%;">
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%; font-size:14px;">
                        ISO 3166 Country Code of Jurisdiction of Residence <span style="color: red;">*</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">
                        _________________
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%; font-size:14px;">
                        Tax Identification Number or equivalent
                        <span style="font-size: 12px;">(if issued by jurisdiction) <span style="color: red;">*</span></span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">
                        _______________________________________
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%; font-size:14px;">
                        Place / City of Birth <span style="color: red;">*</span>
                        ___________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%; font-size:14px;">
                        ISO 3166 Country Code of Birth <span style="color: red;">*</span>
                        _______________
                    </td>
                </tr>
            </table>
        </div>
        <br>

        <div style="border: 1px solid #000; padding: 10px; font-family: Arial, sans-serif; width: fit-content; font-size:13px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 13px; background-color: #bdb5b5; padding:2px; padding:15px !important;">
                <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                3 . PROOF OF IDENTITY (POI) (please refer instruction C at the end)
            </label>

            <div style="margin-top: 10px; font-size: 11px;">
                <span style="font-size: 12px;">
                    (Certified copy of any one of the following Proof of Identity[PoI] needs to be submitted) <br><br>
                </span>
            </div>

            <table style="border-collapse: collapse; margin-top: 10px; font-size: 13px; width: 100%;">
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">A. Passport Number : - </span>
                        ____________________________
                    </td>

                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span style="font-size: 14px;">Passport Expiry Date : -</span>
                        ____________________________
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">B. Voter ID Card : - </span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">

                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">C. PAN Card : - </span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">

                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">D. Driving Licence : -</span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span style="font-size: 14px;">Driving Licence Expiry Date : -</span>
                        ____________________________
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">E. UID (Aadhaar) : - </span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">

                    </td>
                </tr>
                <tr>
                    <td style="font-size: 14px;">
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span>Z. Others (any document notified by the central government) : - </span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span style="font-size: 14px;">Identification Number : - </span>
                        ____________________________
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-box" class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                        <span style="font-size: 14px;">S. Simplified Measures Account - Document Type code : - </span>
                        ____________________________
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span style="font-size: 14px;">Identification Number : - </span>
                        ____________________________
                    </td>
                </tr>
            </table>
        </div>


        <div style="border: 1px solid #000; padding: 10px; font-family: Arial, sans-serif; width: fit-content; font-size:14px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 14px; background-color: #bdb5b5; padding:15px !important;">
                {{-- <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div> --}}
                4 . PROOF OF ADDRESS (POA) <span class="text-danger">*</span>
            </label>
            <label style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 14px; background-color: #ebe1e1; padding:15px !important;">
                <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 20px; text-transform: uppercase;"></div>
                4.1 CURRENT / PERMANET / OVERSEAAS ADDRESS DETAILS (Please see instruction D at the end)
            </label>

            {{-- Add a Address Type details --}}
            <table style="font-weight: normal;">
                <tbody>
                    <tr>
                        <td style="width: 22%; vertical-align: middle;">
                            <b>Address Type <span style="color: red;">*</span></b>
                        </td>
                        <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                            <table>
                                <tr>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Residential / Business
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Residential
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Business
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Registered Office
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Unspecified
                                        </label>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 22%; vertical-align: middle;">
                            <b>Proof of Address <span style="color: red;">*</span></b>
                        </td>
                        <td style="width: 66%; border: 1px solid #000; padding: 5px;">
                            <table>
                                <tr>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Passport
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Driving License
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> UID (Aadhaar)
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Voter Identity Card
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> NREGA Job Card
                                        </label>
                                    </td>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Others ___________________
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border: transparent !important; padding: 2px;">
                                        <label style="display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                                            <div class="square-box" style="width: 20px; height: 20px; border: 1px solid #000; display: inline-block; text-align: center; line-height: 15px;;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/checkmark-small.webp'))) }}"
                                                         alt="Checkmark" style="height: 25px; width: 25px;">
                                            </div> Simplified Measures  Account - <br>Document Type code : ________
                                        </label>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                </tbody>
            </table>

            <h2>Address</h2>
            <div class="col-sm-12 p-2" style="font-size: 14px; height:30px;">
                <b>Line 1 :  * </b> <span style="width: 100%;">________________________________________________________________________________________________________________</span>
            </div>
            <div class="col-sm-12 p-2" style="font-size: 14px; height:30px;">
                <b>Line 2 : </b> <span style="width: 100%;">_________________________________________________________________________________________________________________</span>
            </div>
            <div class="row col-sm-12 p-2" style="font-size: 14px; height:30px;">
                <b>Line 3 : </b> <span style="width: 70%;">___________________________________________________________</span>
                <b>City / Town / Village : </b> <span style="width: 30%;">___________________________________</span>
            </div>
            <div class="row col-sm-12 p-2" style="font-size: 14px; height:30px;">
                <b>District * </b> <span style="width: 30%;">________________</span>&nbsp;
                <b>Pin / Post Code * </b> <span style="width: 20%;">_____________</span>&nbsp;
                <b>State / U.T Code * </b> <span style="width: 20%;">_____________</span>&nbsp;
                <b>ISO 3166 Country Code * </b> <span style="width: 30%;">_______________</span>
            </div>

        </div>

    </div>

</body>

</html>
