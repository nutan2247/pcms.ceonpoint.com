<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emailer</title>
</head>

<body style="background: #1e52bd;">

    <table width="95%" style="font-family: Arial, Helvetica, sans-serif; padding:0 20px; background:#fff;margin: 0 auto; margin-top: 65px; border-radius: 10px;">
        <tr>
            <td>
                <table style="width: 100%;padding: 5px 10px; border-bottom: 1px solid #ececec;background: #00a2e8;margin-top: 20px;border-radius: 5px;">
                    <tr>
                        <td>
                            <img src="'<?=filter_url('https://pcms.xpedientsolutions.com/assets/images/logo.png');?>" alt="RBoard" style="width: 115px;">
                        </td>
                        <td>
                            <span style="font-weight: 400; font-size:12px; float: right; color: #fff;"></span>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; padding: 40px 0 20px 0;">
                    <tr>
                        <td>
                            <p style="font-size: 14px;"><strong style="margin-right: 5px;">Dear <?php echo ucfirst($name); ?>,</strong></p>
                            <?php echo $body_msg; ?>
                            <p style="font-size: 14px;">Sincerely,<br><br><?php echo ucfirst($thanksname); ?><?php echo ($thanks2 != "") ? ',' . ucfirst($thanks2) : ''; ?><br><?php echo ucfirst($thanks3); ?></p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; padding: 20px 0; text-align: center; border-bottom: 1px solid #ececec;">
                    <tr>
                        <td>
                            <a href="#" style="margin-right: 10px;">
                                <img src="<?=filter_url('https://pcms.xpedientsolutions.com/assets/images/ico_facebook.png');?>" alt="Facebook">
                            </a>
                            <a href="#" style="margin-right: 10px;">
                                <img src="<?=filter_url('https://pcms.xpedientsolutions.com/assets/images/ico_twitter.png');?>" alt="Twitter">
                            </a>
                            <a href="#" style="margin-right: 10px;">
                                <img src="<?=filter_url('https://pcms.xpedientsolutions.com/assets/images/ico_youtube.png');?>" alt="YouTube">
                            </a>
                            <a href="#" style="margin-right: 10px;">
                                <img src="<?=filter_url('https://pcms.xpedientsolutions.com/assets/images/ico_linkedin.png');?>" alt="LinkedIn">
                            </a>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; padding:10px 0;">
                    <tr>
                        <td>
                            <p style="font-size:12px; font-weight:400; color:#000; text-align: center;">&copy;<?php echo date('Y'); ?> RBoard.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php
function filter_url($url)
{
    // Remove any leading or trailing spaces
    $url = trim($url);

    // If the URL does not contain a scheme (like http or https), prepend 'http://'
    if (!preg_match('#^https?://#', $url)) {
        $url = 'https://' . $url;
    }

    // Parse the URL into components
    $url_components = parse_url($url);

    // Check if the URL is valid
    if ($url_components === false) {
        return ''; // Return empty string if URL is not valid
    }

    // Rebuild the URL after filtering out invalid characters
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate the URL to check if it's a well-formed URL
    if (filter_var($url, FILTER_VALIDATE_URL) === false) {
        return ''; // Return empty string if URL is not valid
    }

    return $url; // Return the cleaned URL
}

?>
</body>
</html>
