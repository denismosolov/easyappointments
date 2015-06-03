<html>
<head>
    <title>Appointment Details</title>
</head>
<body style="font: 13px arial, helvetica, tahoma;">
    <div class="email-container" style="width: 650px; border: 1px solid #eee;">
        <div id="header" style="background-color: #EB2A2E; border-bottom: 4px solid #B42026;
                height: 45px; padding: 10px 15px;">
            <strong id="logo" style="color: white; font-size: 20px; 
                    text-shadow: 1px 1px 1px #8F8888; margin-top: 10px; display: inline-block">
                    $company_name</strong>
        </div>

        <div id="content" style="padding: 10px 15px;">
            <h2>$email_title</h2>
            <p>$email_message</p>    
            
            <h2>Appointment Details</h2>
            <table id="appointment-details">
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Lesson</td>
                    <td style="padding: 3px;">$appointment_service</td>
                </tr>
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Teacher</td>
                    <td style="padding: 3px;">$appointment_provider</td>
                </tr>
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Start</td>
                    <td style="padding: 3px;">$appointment_start_date</td>
                </tr>
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">End</td>
                    <td style="padding: 3px;">$appointment_end_date</td>
                </tr>
            </table>
            
            <h2>Customer Details</h2>
            <table id="customer-details">
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Name</td>
                    <td style="padding: 3px;">$customer_name</td>
                </tr>
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Email</td>
                    <td style="padding: 3px;">$customer_email</td>
                </tr>
                <tr>
                    <td class="label" style="padding: 3px;font-weight: bold;">Skype</td>
                    <td style="padding: 3px;">$customer_phone</td>
                </tr>
            </table>

        </div>

        <div id="footer" style="padding: 10px; text-align: center; margin-top: 10px;
                border-top: 1px solid #EEE; background: #FAFAFA;">
            <a href="$company_link" style="text-decoration: none;">$company_name</a>
        </div>
    </div>
</body>
</html>