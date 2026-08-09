<?php
  $message = '
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paisape Email Verification code</title>
    <!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
  </head>

  <body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
    <table role="presentation"
      style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
      <tbody>
        <tr>
          <td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
            <table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
              <tbody>
                <tr>
                  <td style="padding: 40px 0px 0px;">
                    <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                      <div style="text-align: center;">
                      </div>
                      <div style="color: rgb(0, 0, 0); text-align: left;">
                        <h1 style="margin: 1rem 0; font-size: 20px; color: #0E9BEE;">New Lead From Paisape Website Contact Us Page</h1>
                        <p style="padding-bottom: 8px"><strong>Name:</strong> '.htmlspecialchars($name).'</p>
                        <p style="padding-bottom: 8px"><strong>Phone:</strong> '.htmlspecialchars($Phone).'</p>
                        <p style="padding-bottom: 8px"><strong>Email:</strong> '.htmlspecialchars($email).'</p>
                        <p style="padding-bottom: 8px"><strong>Company:</strong> '.htmlspecialchars($subject).'</p>
                        <p style="padding-bottom: 16px"><strong>Message:</strong><br>'.nl2br(htmlspecialchars($message_body)).'</p>
                        
                        <div style="margin-top: 30px; padding: 15px; background-color: #f8fafc; border-radius: 8px; font-size: 13px; color: #64748b;">
                          <h2 style="margin: 0 0 10px 0; font-size: 14px; color: #475569;">Telemetry Data</h2>
                          <p style="margin: 4px 0"><strong>Location:</strong> '.htmlspecialchars($location).'</p>
                          <p style="margin: 4px 0"><strong>IP Address:</strong> '.$client_ip.'</p>
                          <p style="margin: 4px 0"><strong>User Agent:</strong> '.$user_agent.'</p>
                          <p style="margin: 4px 0"><strong>Screen Res:</strong> '.$screen_res.'</p>
                          <p style="margin: 4px 0"><strong>Timezone:</strong> '.$timezone.'</p>
                          <p style="margin: 4px 0"><strong>Language:</strong> '.$language.'</p>
                        </div>

                        <p style="padding-bottom: 16px; margin-top: 20px;">Thanks,<br>Paisape Team</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>

  </html>';