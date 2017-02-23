<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> 
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
      
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>

</head>
<body bgcolor="#222222" width="100%" style="margin: 0;">
    <center style="width: 100%; background: #222222;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
            Welcome to Training &amp; Placement Cell, CET, BBSR.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Header : BEGIN 
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container" role="presentation">
            <tr>
                <td style="padding: 20px 0; text-align: center">
                    <img src="#" width="200" height="50" alt="alt_text" border="0">
                </td>
            </tr>
        </table> -->
         <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="margin: auto;" bgcolor="white" class="email-container" role="presentation">
                        <tbody><tr>
                            <!-- Column : BEGIN -->
                            <!-- Column : END -->
                            <!-- Column : BEGIN -->
                            <td width="66.66%" class="stack-column-center">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody><tr>
                                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: right;" class="center-on-narrow">
                                            <strong style="color:#111111;">MMM-UNION.ORG</strong>
                                            <br><br>    
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <!-- Column : END -->
                        </tr>
                    </tbody></table>
                
        <!-- Email Header : END -->
        
        <!-- Email Body : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container" role="presentation">
            
            <!-- Hero Image, Flush : BEGIN -->
            <tr>
                <td bgcolor="#ffffff">
                    <img src="{{URL::to('users/img/verify.jpg')}}" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px;">
                </td>
            </tr>
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" style="padding: 40px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                    Hello <strong>{{$name}}</strong>,<br/><p style="text-indent: 5em;"> Welcome to MMM-UNION.ORG. Thank you for registering with us. Please click on the button below to continue. </p>
                    <br><br>
                    <!-- Button : Begin -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                        <tr>
                            <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                <a href="{{ URL::to('register/verify/' . $confirmation_code) }}" style="background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">Click Here to Verify</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </td>
                        </tr>
                    </table>
                    <!-- Button : END -->
                </td>
            </tr>

        </table>
        <!-- Email Body : END -->
          
        <!-- Email Footer : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container" role="presentation">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                    <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">View as a Web Page</webversion>
                    <br><br>
                    CET , Bhubaneswar<br><span class="mobile-link--footer">Ghatikia, Bhubaneswar</span><br><span class="mobile-link--footer">+917381110897</span>
                    <br><br> 
                    <unsubscribe style="color:#888888; text-decoration:underline;">unsubscribe</unsubscribe>
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

    </center>
</body>
</html>