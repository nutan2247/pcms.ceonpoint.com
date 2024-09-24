<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>emailer_receipt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=devanagari,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/css/lightbox.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/css/style.css'); ?>">



</head>

<body>
    <div class="container">
        <div class="header text-center">
            <img src="<?php echo base_url('assets/invoice/images/logo.png'); ?>" alt="">
        </div>

    </div>

    <div class="container">
        <h3 class="my-md-4 my-3">Dear <?php echo ucfirst($name); ?>,</h3>
        <?php echo $body_msg; ?>
        
        <p>Thank you for using RBord! We would be glad if you can refer a friend to our website if you are
            Satisfied with our service. If not , please contact us at <a href="#">rbord@ceonpoint.com</a> and tell us how we can
            improve.

        </p>
        <p style="font-size: 14px;">Sincerely,<br><br><?php echo ucfirst($thanksname); ?><?php echo ($thanks2 !="")?','.ucfirst($thanks2):'';?><br><?php echo ucfirst($thanks3); ?></p>
    </div>
</body>

</html>