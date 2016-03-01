<?php
$send = $_POST['send'];
if($send){
                $email = $_POST['email'];
                
                $emailfile = file_get_contents("mailing.txt");
                $emaillist = explode("\n", $emailfile);
                
                foreach ($emaillist as $value)
                {
                mail($value, $_POST['subject'], $_POST['message'], "From: $email");
                }
                
                echo "<b>Email sent!</b><br />";
}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <table width="481" border="0" cellspacing="0" cellpadding="0">
                                <tr valign="top">
                                  <td width="84" align="right" valign="top" class="style32">Subject:</td>
                                  <td width="397" align="left" class="style32">
                                          <input name="subject" type="text" id="subject" size="41" maxlength="100">
                                  </td>
                                </tr>
                                <tr valign="top">
                                  <td width="84" align="right" valign="top" class="style32">From:</td>
                                  <td align="left" class="style32"><input name="email" type="text" id="email" size="41" maxlength="100"></td>
                                </tr>
                                <tr valign="top">
                                  <td align="right" valign="top" class="style32">Message:</td>
                                  <td align="left" class="style32">
                                          <textarea name="message" cols="37" rows="4" id="message"></textarea>
                                  </td>
                                </tr>
                                <tr valign="top">
                                  <td align="right" valign="top" class="style32">&nbsp;</td>
                                  <td align="left" class="style32">
                                          <input name="send" type="submit" id="send" value="SUBMIT">
                                          <input name="Reset" type="reset" id="Reset" value="RESET">
                                  </td>
                                </tr>
  </table>
</form>