<?php

    $max_email_width = '960';
    $color_red = '#a6192e';
    $color_dark_gray = '#2e2e2e';
    $font_styles = 'font-family: Helvetica Neue,Helvetica,Arial,sans-serif;';
    $gutter_width = '90px';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    </head>
    <body style="margin: 0px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td bgcolor="white" align="center">
                    <!--[if (gte mso 9)|(IE)]>
                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $max_email_width; ?>">
                    <tr>
                    <td align="center" valign="top" width="<?php echo $max_email_width; ?>">
                    <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $max_email_width; ?>px;" >
                        <tr>
                            <td align="center" valign="top" style="padding: 40px 0px 40px 0px;">
                                <p style="text-align: right; font-size: 12px; <?php echo $font_styles; ?>">View this email in your <a style="color: <?php echo $color_red; ?>; <?php echo $color_red; ?>" href="#">browser</a>.</p>

                                <table>
                                    <tr>
                                        <!-- LEFT GUTTER -->
                                        <td style="width: <?php echo $gutter_width; ?>; background-color: ">

                                        </td>
                                    </tr>
                                </table>
                                <!-- IMAGE -->
                                <img alt="Example" src="http://placehold.it/600x300" width="600" style="display: block; width: 100%; max-width: 100%;" border="0">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="padding: 0px 10px 20px 10px;">
                                <!-- HEADLINE -->
                                <p style="color: black; font-family: sans-serif; font-size: 24px; font-weight: bold; line-height: 28px; margin: 0;">Announcing Some News</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="padding: 0px 10px 60px 10px;">
                                <!-- COPY -->
                                <p style="color: #b5e2f7; font-family: sans-serif; font-size: 16px; font-weight: normal; line-height: 24px; margin: 0;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
        </table>
    </body>
</html>