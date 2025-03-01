<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!-- Sets size and scale of the viewport. -->
    <meta name="viewport" content="width=device-width" initial-scale="1">

    <!-- IE=Edge makes good things happen on Windows Phones. (https://www.emailonacid.com/blog/article/email-development/demystifying-meta-tags-in-email) -->
    <!--[if !mso]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <![endif]-->

    <!-- Disables auto-scaling in iOS Mail 10. (https://litmus.com/blog/9-things-you-need-to-know-about-email-in-ios-10) -->
    <meta name="x-apple-disable-message-reformatting">

    <!-- Will display in auto-preview area in some clients. -->
    <title>Casting Opportunity – {{ $data['project_name'] }}</title>

    <!-- Desktop Outlook defaults to Times New Roman. Forces a less obscene fallback font. -->
    <!--[if mso]>
  <style>
   * { font-family: sans-serif !important; }
  </style>
 <![endif]-->

    <!-- Webfont reference. For current support: http://stylecampaign.com/blog/2015/02/webfont-support-in-email -->
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">

    <!--<![endif]-->

    <style>
        /* Box sizing. Gets decent support. (https://freshmail.com/developers/best-practices-for-email-coding) */
        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* Prevents small text resizing. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* Basic reset. Removes default spacing around emails in various clients. (https://templates.mailchimp.com/development/css/reset-styles) */
        html,
        body,
        .document {
            width: 100% !important;
            height: 100% !important;
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
            font-weight: 400;
            color: #434343;
            background-color: #f2f4f9;
        }

        /* Improves text rendering when supported. */
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        /* Centers email to device width in Android 4.4. (https://blog.jmwhite.co.uk/2015/09/19/revealing-why-emails-appear-off-centre-in-android-4-4-kitkat) */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* Removes added spacing within tables in Outlook. (https://templates.mailchimp.com/development/css/client-specific-styles) */
        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        /* Removes added spacing within tables in WebKit. */
        table {
            border-spacing: 0;
            border-collapse: collapse;
            table-layout: fixed;
            margin: 0 auto;
            ;
        }

        tr {
            margin-bottom: 20px;
        }

        tr:last-child {
            margin-bottom: 0;
        }

        tr td:only-child h3 {
            margin-bottom: 0;
        }

        .container {
            display: block;
            padding: 40px 0;
        }

        .container tr {
            display: block;
            width: 680px;
            padding: 0 50px;
        }

        .container--main {
            background-color: white;
            border-top: 5px solid #A8EEE5;
            box-shadow: 0 10px 40px rgba(110, 110, 110, 0.1);
        }

        /* Footer */
        .footer {
            margin-top: 30px;
            border-top: 1px solid #e4e4e4;
            text-align: center;
        }

        unsubscribe h6 {
            margin-bottom: 0;
        }

        /* Responsive images. Improves rendering of scaled images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
            border: 0;
            margin-top: 10px;
        }

        /* Overrules triggered links in iOS. */
        *[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
        }

        /* Overrules triggered links in Gmail. */
        .x-gmail-data-detectors,
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
        }

        /* Button */
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 20px;
            background-color: #7625BE;
            color: white !important;
            border-radius: 12px;
            transition: all 200ms ease;
        }

        .button:hover {
            background-color: #522080;
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
            line-height: 1.4;
        }

        h1 {
            font-size: 32px;
            font-weight: 700;
        }

        h2 {
            font-size: 26px;
            font-weight: 700;
        }

        h3 {
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 700;
        }

        h4 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 700;
        }

        h4+p {
            margin-bottom: 15px;
        }

        h4+p:last-child {
            margin-bottom: 0;
        }

        h6 {
            margin-bottom: 6px;
            font-weight: 400;
            color: #626369;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        a {
            color: #1e41e2;
            text-decoration: none;
        }

        li {
            margin-bottom: 10px;
        }

        li:last-child {
            margin-bottom: 0;
        }

        hr {
            display: block;
            width: 580px;
            height: 2px;
            margin: 10px 0;
            background-color: #e8e8e8;
            border: 0;
        }

        .list p {
            margin-bottom: 10px;
        }

        .top-space {
            margin-top: 40px;
        }

        /* Mobile */
        @media screen and (max-width: 650px) {

            .container {
                width: 100%;
                margin: auto;
            }

            .container tr {
                padding: 0 30px;
            }

            .top-space {
                margin-top: 20px;
            }

        }
    </style>
</head>


<!-- Start of email content -->

<body>

    <!-- Preheader text. Visible in inbox preview, not in email body. -->
    <div style="display: none; max-height: 0px; overflow: hidden;">
        <!-- Preheader message here -->
    </div>

    <!-- Hack to manage presentation of preheader text. (https://litmus.com/blog/the-little-known-preview-text-hack-you-may-want-to-use-in-every-email) -->
    <div style="display: none; max-height: 0px; overflow: hidden;">
        &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>

    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" class="document">
        
        <tr>
            <td valign="top">
                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" class="container container--main" width="680">
                    <tr>
                        <td style="text-align: center;">
                            <img src="{{ url('user-assets') }}/images/Logo.png" alt="Logo" style="margin: 0 auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Dear {{ $data['first_name'] . ' ' . $data['last_name'] }},</p>

                            <p>We are excited to present you with a new opportunity that matches your profile at <strong>Cast Talents LLC.</strong></p>
                        </td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td>
                            <h3>Project Details</h3>
                            <p><strong>Category:</strong> {{ ucfirst($data['category']) }}</p>
                            <p><strong>Project Name:</strong> {{ ucfirst($data['project_name']) }}</p>
                            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($data['date'])->format('F j, Y') }}</p>
                            <p><strong>Timings:</strong> {{ $data['timings'] }}</p>
                            <p><strong>Location:</strong> {{ $data['area'] . ', ' . $data['city'] . ', ' . $data['country'] }}</p>
                            <p><strong>Budget:</strong> {{ $data['payment'] . ' AED'}}</p>
                            <p><strong>Payment Mode:</strong> {{ $data['payment_mode'] }}</p>
                        </td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr class="top-space">
                        <td>
                            <p>To apply for this job, kindly click the link below and submit your confirmation: <a href="{{ $data['link'] }}">Apply Here</a></p>
                            <p>We’re here to help. If you have any questions, please send us an email at <a href="mailto:info@castingtalents.com">info@castingtalents.com</a>.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
<!-- End of email content -->



</html>
