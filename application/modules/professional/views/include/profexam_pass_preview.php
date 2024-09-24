<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Certificate Portrait</title>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Tangerine:400,700&display=swap&subset=devanagari,latin-ext,vietnamese"
        rel="stylesheet">
</head>

<body>
    <div class="row" id="view_certificate_content">
        <?php $bg = base_url('assets/images/banner.png'); 
            $logo1 = base_url('assets/images/bird.png'); 
            $logo2 = base_url('assets/images/red-bird.png'); 
            $certificate_text = base_url('assets/images/certificate-head.png'); 
            $sinature1 = base_url('assets/images/sinature.png'); 
            $sinature2 = base_url('assets/images/sinature.png'); 
            $sinature3 = base_url('assets/images/sinature.png'); 
            //$barcode = base_url('assets/images/scan.png');
            $barcode = base_url('assets/qrcode/'.$profes_details->exam_pass_qrcode); 
                ?>

        <table style="width: 100%; padding: 15px 0 0; border:2px solid #2f5597; margin: 0 auto;" cellpadding="0"
            cellspacing="0" align="center">
            <tr>
                <td>
                    <table
                        style=" width: 700px;margin: 0 auto; text-align: center;font-family: 'Montserrat', sans-serif; padding: 0 5px;"
                        cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <th><span class="images"
                                        style=" display: inline-block; vertical-align: middle; float: left; ">
                                        <img src="<?php echo showimage($logo1); ?>" alt="" style="width: 75px;"></span>
                                </th>
                                <th><span class="hesder-content"
                                        style=" display: inline-block; color: #0d0d0d; font-weight: 600;  font-size: 19px; ">
                                        Continuing Education on point<br>
                                        Delaware, United State of America</span></th>
                                <th><span class="images"
                                        style=" display: inline-block; vertical-align: middle; float: right;">
                                        <img src="<?php echo showimage($logo2); ?>" alt="" style="width: 75px;"></span>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="text-align: center; padding-top: 15px;">
                                <h1
                                    style="font-size: 30px;font-weight:600;color: #000;margin: 0;text-transform: uppercase; padding:15px 0px 25px;">
                                    examination pass</h1>
                                <h1
                                    style="font-family: 'Tangerine', cursive; font-size: 48px;font-weight: 700; margin: 0; ">
                                    <?php echo ucwords($profes_details->fname.' '.$profes_details->lname.' '.$profes_details->name); ?>
                                </h1>
                            </td>

                        </tr>
                    </table>
                    <table style="width: 100%;" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="padding:25px 15px; text-align:center">
                                    <h3 style="margin-bottom:15px; text-align:center">
                                        <?php echo $exam_details->exam_name; ?>
                                    </h3>

                                    <p style="font-size: 15px;font-weight: 400;color: #4a4949;padding-bottom: 10px;">
                                        <strong style="font-size: 14px;padding-right: 8px;color: #000;">Examination
                                            Date :</strong>
                                        <?php echo date('F d,Y',strtotime($exam_details->exam_date)); ?>

                                    </p>
                                    <p style="font-size: 15px;font-weight: 400;color: #4a4949;padding-bottom: 10px;">
                                        <strong style="font-size: 14px;padding-right: 8px;color: #000;">Time:</strong>
                                        <?php echo date('h:i A',strtotime($exam_details->exam_start_time)); ?>

                                    </p>
                                    <p style="font-size: 15px;font-weight: 400;color: #4a4949;padding-bottom: 10px;">
                                        <strong style="font-size: 14px;padding-right: 8px;color: #000;">End
                                            Time:</strong>
                                        <?php echo date('h:i A',strtotime($exam_details->exam_end_time)); ?>

                                    </p>
                                    <p style="font-size: 15px;font-weight: 400;color: #4a4949;padding-bottom: 10px;">
                                        <strong style="font-size: 14px;padding-right: 8px;color: #000;">Venue:</strong>
                                        <?php echo $exam_details->exam_venue; ?>

                                    </p>


                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <table style="width: 540px; margin: 0 auto; margin-top: 25px; margin-bottom: 60px;">
                                        <tr>
                                            <td
                                                style="background-color: #ededec; padding: 20px 12px; margin-right: 10px;width: 103px;text-align: center; border-right: 10px solid #fff;">
                                                <img src="<?php echo showimage($sinature1); ?>" alt=""
                                                    style=" width: 57px;">
                                                <p style="margin: 0; margin-top: 5px; color: #7c7c7c; font-size: 13px;">
                                                    Angelina Jordan</p>
                                                <p style=" margin: 0; margin-top: 5px;color: #7c7c7c;font-size: 13px;">
                                                    President</p>

                                            </td>
                                            <td
                                                style="background-color: #ededec;padding: 12px 12px;margin-right: 10px;width: 103px;text-align: center; border-right: 10px solid #fff;">
                                                <img src="<?php echo showimage($sinature2); ?>" alt=""
                                                    style=" width: 57px;">
                                                <p style="margin: 0; margin-top: 5px; color: #7c7c7c; font-size: 13px;">
                                                    Angelina Jordan</p>
                                                <p style=" margin: 0; margin-top: 5px;color: #7c7c7c;font-size: 13px;">
                                                    President</p>

                                            </td>
                                            <td
                                                style="background-color: #ededec;padding: 12px 12px;margin-right: 10px;width: 103px;text-align: center; border-right: 10px solid #fff;">
                                                <img src="<?php echo showimage($sinature3); ?>" alt=""
                                                    style=" width: 57px;">
                                                <p style="margin: 0; margin-top: 5px; color: #7c7c7c; font-size: 13px;">
                                                    Angelina Jordan</p>
                                                <p style=" margin: 0; margin-top: 5px;color: #7c7c7c;font-size: 13px;">
                                                    President</p>

                                            </td>

                                        </tr>

                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="width: 98.3%;  padding-top: 20px ; padding-bottom: 20px; background-color: #2f5597;"
                        cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="text-align: left;width: 60%;">
                                    <!-- <img src="images/footer-logo.png" alt="" style=" padding-top: 19px; ">-->
                                            <p style=" padding-top: 55px;"></p>
                                            <p
                                                style=" color: #fff; font-size: 15px; margin: 9px 0; font-family: 'Montserrat', sans-serif; ">
                                                validate this certificate at:</p>
                                            <a href="#" style="color: #f2cd1e; font-size: 15px; font-family: 'Montserrat', sans-serif; "><?php echo base_url('license/search'); ?></a>
                                </td>
                                <td style="text-align: right; width: 40%;">
                                    <img src="<?php echo showimage($barcode); ?>" alt="" style=" width: 70px">
                                    <p
                                        style="color: #fff; font-size: 15px; margin: 15px 0; font-family: 'Montserrat', sans-serif; padding-right:10px;">
                                        Exam Code</p>
                                    <p
                                        style="color: #f2cd1f;font-size: 17px; font-weight: 600; font-family: 'Montserrat', sans-serif; text-transform: uppercase; letter-spacing: 1.1px; margin: 0; padding-right:10px;">
                                        <?php echo $profes_details->exam_code; ?>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        </table>


        <?php 
        function showimage($image){
        $imageData = base64_encode(file_get_contents($image));
        $src = 'data:image/jpeg;base64,'.$imageData;
        return $src;
        }
        ?>
    </div>


</body>

</html>