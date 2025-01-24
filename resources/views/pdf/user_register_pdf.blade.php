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
            font-size: 95%;
        }

        /* Style for paragraph element */
        p {
            text-align: justify;
            font-weight: 600;
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
            background-color: #f58220;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .header {
            height: 200px;
        }

        .footer {
            font-size: 14px;
        }

        .logo {
            margin-top: 30px;
            text-align: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
            width: auto;
            margin-top: 180px;
            margin-bottom: 150px;
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
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
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
            width: 20px !important;
            height: 20px !important;
            border: 1px solid #1f1e1e;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            background-color: #f9f9f9 !important;
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
            <p>Name Of Client: _________________________</p>
            <p>Client Code: ____________________ Client ID: ____________________</p>
            <p>Branch: _________________________</p>
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

        <div
            style="text-align: center; margin-top: 1.9pt; margin-right: 0in; margin-bottom: 2.3pt; margin-left: 2.85pt;">
            ACCOUNT<span style="letter-spacing: .5pt;"> </span>
            OPENING<span style="letter-spacing: .5pt;"> </span>
            KIT<span style="letter-spacing: .5pt;"> </span>
            -<span style="letter-spacing: .5pt;"> </span>
            INDIVIDUAL<span style="letter-spacing: .5pt;"> </span>
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
    <div class="WordSection3" style="position: relative;">
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

        <div class="row">
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

    </div>

    <!-- Fourt Page with Content -->
    <div class=WordSection4>
        <div style="position: relative; right: 0;">
            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/ventura_logo.jpg'))) }}"
                alt="Ventura Logo" style="height: 50px; width: 200px;">
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

        <table border="1" style="border-collapse: collapse; border-color: #000000; width: 30%; float: right;">
            <tr>
                <td style="padding: 10px; text-align: left; font-weight: bold; font-size: 20px; line-height: 20px;">
                    FU |
                </td>
            </tr>
        </table>
        <br><br><br>

        <!-- Instructions Section -->
        <table style="width: 100%; font-size: 12px; font-weight: normal; ">
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
                    <td style="vertical-align: top;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <p>(A) Fields marked with “*” are mandatory fields.</p>
                            <p>(B) Please fill the form in English and in BLOCK letters.</p>
                            <p>(C) Please fill the date in DD-MM-YYYY format.</p>
                            <p>(D) Please read section-wise detailed guidelines/instructions at the end.</p>
                        </ul>
                    </td>
                    <!-- Section 2 -->
                    <td style="vertical-align: top;">
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
                    <td style="vertical-align: top; padding: 10px;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/central_KYC_logo.png'))) }}"
                                alt="Ventura Logo">
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th colspan="5" style="text-align: left; padding: 5px; border: 1px solid #000;">
                        <div class="small-square-box"></div>
                        For office use only (To be filled by financial institution)
                    </th>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid #000; padding: 5px;"><b>Application Type <span style="color: red">*</span></b></td>
                    <td class="d-flex">
                        <div class="small-square-box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New</div>

                    </td>
                    <td>
                        <div class="small-square-box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update</div>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;"></td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid #000; padding: 5px;"><b>KYC Number <span style="color: red">*</span></b> </td>
                    <td colspan="3" style="border: 1px solid #000; padding: 5px;">
                        (Mandatory for KYC update request)
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="border: 1px solid #000; padding: 5px;">
                        1. PERSONAL DETAILS</strong> (Please refer to instruction A at the end)
                    </td>
                </tr>
            </thead>
        </table>

        <table>
            <thead>
                <tr>
                    <td>
                    </td>

                    <td>
                        Prefix
                    </td>

                    <td>
                        First Name
                    </td>

                    <td>
                        Middle Name
                    </td>

                    <td>
                        Last Name
                    </td>
                </tr>

            </thead>

            <tbody>
                <tr>
                    <td>
                        Name (Same as ID proof)
                    </td>

                    <td>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                    </td>

                    <td>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                    </td>

                    <td>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                    </td>

                    <td>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                        <div class="square-box"></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        Maiden Name (if any <span style="color: red;">*</span>)
                    </td>

                    <td>
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td>
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}

                    </td>

                    <td>
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td>
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Father / Spouse Name <span style="color: red;">*</span>
                    </td>

                    <td style="border: 1px solid #000; border-bottom: 1px solid black; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}

                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Mother Name <span style="color: red;">*</span>
                    </td>

                    <td style="border: 1px solid #000; border-bottom: 1px solid black; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}

                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>

                    <td style="border: 1px solid #000; padding: 5px;">
                        {{-- <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;">
                        <input type="text" style="width: 20%; height: 20px; padding: 0; border-color:#000000;"> --}}
                    </td>
                </tr>

            </tbody>

        </table>

        <table>
            <tbody>
                <td>
                    Date of Birth <span style="color: red;">*</span>
                </td>
                <td>
                    Day (DD) : -
                </td>
                <td>
                    Month (MM) : -
                </td>
                <td>
                    Year (YYYY) : -
                </td>
            </tbody>
        </table>

        <table>
            <tbody>
                <!-- First Row -->
                <tr>
                    <td style="width: 22%; border: 1px solid #000; ">Gender <span style="color: red;">*</span></td>
                    <td style="width: 66%; border: 1px solid #000;">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                            <label><input type="checkbox" name="gender" style="margin-right: 5px;">M - Male</label>
                            <label><input type="checkbox" name="gender" style="margin-right: 5px;">F -
                                Female</label>
                            <label><input type="checkbox" name="gender" style="margin-right: 5px;">T -
                                Transgender</label>
                        </div>
                    </td>
                    <td rowspan="5" style="border: 1px solid #000; padding: 5px; width: 13%;">
                        <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/user_profile_pic.png'))) }}"
                            alt="Signature/Thumb Impression" height ="200px" width="140px"><br><br>
                        <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('frontend/images/pdf/signature_user_pic.png'))) }}"
                            alt="Signature/Thumb Impression" height ="50px" width="140px">
                    </td>
                </tr>
                <!-- Second Row -->
                <tr>
                    <td style="border: 1px solid #000;">Marital Status <span style="color: red;">*</span></td>
                    <td style="border: 1px solid #000;">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                            <label><input type="checkbox" name="marital_status"
                                    style="margin-right: 5px;">Married</label>
                            <label><input type="checkbox" name="marital_status"
                                    style="margin-right: 5px;">Unmarried</label>
                            <label><input type="checkbox" name="marital_status"
                                    style="margin-right: 5px;">Others</label>
                        </div>
                    </td>
                </tr>
                <!-- Third Row -->
                <tr>
                    <td style="border: 1px solid #000;">Citizenship <span style="color: red;">*</span></td>
                    <td style="border: 1px solid #000;">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                            <label>
                                <input type="checkbox" name="citizenship" style="margin-right: 5px;">IN - Indian
                            </label>
                            <label>
                                <input type="checkbox" name="citizenship" style="margin-right: 5px;">Others
                                (ISO 3166 Country Code <input type="text" style="width: 30px; margin-left: 5px;">)
                            </label>
                        </div>
                    </td>
                </tr>
                <!-- Fourth Row -->
                <tr>
                    <td style="border: 1px solid #000;">Residential Status <span style="color: red;">*</span></td>
                    <td style="border: 1px solid #000;">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                            <label><input type="checkbox" name="residential_status"
                                    style="margin-right: 5px;">Resident Individual</label>
                            <label><input type="checkbox" name="residential_status"
                                    style="margin-right: 5px;">Foreign National</label>
                            <label><input type="checkbox" name="residential_status"
                                    style="margin-right: 5px;">Non-Resident Indian</label>
                            <label><input type="checkbox" name="residential_status" style="margin-right: 5px;">Person
                                of Indian Origin</label>
                        </div>
                    </td>
                </tr>
                <!-- Fifth Row -->
                <tr>
                    <td style="border: 1px solid #000;">Occupation Type <span style="color: red;">*</span></td>
                    <td style="border: 1px solid #000;">
                        <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">S -
                                Service (Private Sector)</label>
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">Public
                                Sector</label>
                            <label><input type="checkbox" name="occupation_type"
                                    style="margin-right: 5px;">Government Sector</label>
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">O -
                                Others (Professional)</label>
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">Self
                                Employed</label>
                            <label><input type="checkbox" name="occupation_type"
                                    style="margin-right: 5px;">Retired</label>
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">B -
                                Business</label>
                            <label><input type="checkbox" name="occupation_type"
                                    style="margin-right: 5px;">Housewife</label>
                            <label><input type="checkbox" name="occupation_type"
                                    style="margin-right: 5px;">Student</label>
                            <label><input type="checkbox" name="occupation_type" style="margin-right: 5px;">X - Not
                                Categorised</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="border: 1px solid #000; padding: 10px; font-family: Arial, sans-serif; width: fit-content;">
            <label
                style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 14px; background-color: #bdb5b5;">
                <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                2 . TICK IF APPLICABLE RESIDENCE FOR TAX PURPOSES IN JURISDICTION(S) OUTSIDE INDIA
                <span style="font-size: 12px; display: block; margin-left: 20px;">
                    (Please refer to instruction B at the end)<br><br>
                </span>
            </label>

            <div style="margin-top: 10px; font-size: 11px;">
                <label>ADDITIONAL DETAILS REQUIRED <span style="color: red;">*</span></label>
                <span style="font-size: 12px;">(Mandatory only if section 2 is ticked)</span>
            </div>


            <table style="border-collapse: collapse; margin-top: 10px; font-size: 14px; width: 100%;">
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        ISO 3166 Country Code of Jurisdiction of Residence <span style="color: red;">*</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">

                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        Tax Identification Number or equivalent
                        <span style="font-size: 12px;">(if issued by jurisdiction) <span
                                style="color: red;">*</span></span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">

                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">Place / City of Birth <span
                            style="color: red;">*</span></td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">ISO 3166 Country Code of Birth <span
                            style="color: red;">*</span></td>
                </tr>
            </table>

        </div>

        <div
            style="border: 1px solid #000; padding: 10px; font-family: Arial, sans-serif; width: fit-content; margin-top: 10px;">
            <label
                style="font-weight: bold; display: block; margin-bottom: 5px; font-size: 14px; background-color: #bdb5b5;">
                <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                3 . PROOF OF IDENTITY (POI)
                <span style="font-size: 12px; display: block; margin-left: 20px;">
                    (please refer instruction C at the end)<br><br>
                </span>
            </label>

            <div style="margin-top: 10px; font-size: 11px;">
                <span style="font-size: 12px;">
                    (Certified copy of any one of the following Proof of Identity[PoI] needs to be submitted) <br><br>
                </span>
            </div>

            <table style="border-collapse: collapse; margin-top: 10px; font-size: 14px; width: 100%;">
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>A. Passport Number : -</span>
                    </td>

                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span>Passport Expiry Date : -</span>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>B. Voter ID Card : - </span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px;">

                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>C. PAN Card : -</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>D. Driving Licence : -</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span>Driving Licence Expiry Date : -</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>E. UID (Aadhaar) : -</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>Z. Others (any document notified by the central government) : -</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span>Identification Number : - </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="residence_tax_purpose" style="margin-right: 5px;">
                        <span>S. Simplified Measures Account - Document Type code : -</span>
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; width: 50%;">
                        <span>Identification Number : - </span>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</body>

</html>
