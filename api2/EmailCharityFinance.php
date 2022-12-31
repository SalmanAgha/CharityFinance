<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 



function email($receiveremail,$title, $subtitle, $text){

 
    //Load Composer's autoloader
    require '../../phpmailer/vendor/autoload.php';
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP(); // telling the class to use SMTP
    try 
    {

      

      $nf = '  <body>
                <div class="row">
                        <div class="col-lg-12">
                            <table class="body-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%;  margin: 0;" >
                                <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                    <td class="container" width="600" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                                        <div class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                            <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #ec1d23;" bgcolor="#fff">
                                                <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                    <td class="content-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                                                        <meta itemprop="name" content="Confirm Email" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                            <tr><td><a href="#"><img src="https://tajcorporation.com/wp-content/uploads/2020/02/brand-page-logo08.jpg" alt="" style="margin-left: auto; margin-right: auto; display:block; margin-bottom: 10px; height: 125px;"></a></td></tr>
                                                            <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; color: #ec1d23; font-size: 24px; font-weight: 700; text-align: center; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                                                    '.$title.'
                                                                </td>
                                                            </tr>
                                                            <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; color: #7a7c7f; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">'.$subtitle.'
                                                                </td>
                                                            </tr>
                                                            <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">'.$text.'
                                                                </td>
                                                            </tr>
                                                         
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table><!--end table-->                                                
                                        </div><!--end content-->
                                    </td>
                                    <td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                </tr>
                            </table><!--end table-->                                
                        </div><!--end col-->
                    </div><!--end row--> 
                    </body>';

 
      $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
      $mail->SMTPAuth   = true;                  // enable SMTP authentication
      $mail->SMTPSecure = "none";                 // sets the prefix to the servier
      $mail->Host       = "mail.tajcorporation.com";       // sets GMAIL as the SMTP server
      $mail->Port       = 587;   // set the SMTP port for the GMAIL server
      $mail->SMTPKeepAlive = true;
      $mail->Mailer = "smtp";
     $mail->Username   = "it.operations@tajcorporation.com";  // GMAIL username
      $mail->Password   = "Taj@1234";           // GMAIL password
      $mail->AddAddress($receiveremail);
      $mail->SetFrom('it.operations@tajcorporation.com', 'Taj Corporation');
      $mail->Subject = $title;
      $mail->AltBody = $nf; // optional - MsgHTML will create an alternate automatically
      $mail->MsgHTML($nf);
      $mail->Send();
      $emailresult = "Email Sent";   
       
    } 
    catch (phpmailerException $e) 
    {
      $emailresult = "Email issueoccured"; //Pretty error messages from PHPMailer
    } 
    catch (Exception $e) 
    {
      $emailresult = "Email issueoccured"; //Boring error messages from anything else!
    }
    return $emailresult;
 
} 
    ?>