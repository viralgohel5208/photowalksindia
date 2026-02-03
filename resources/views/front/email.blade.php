<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap'); */

        @import url('https://fonts.googleapis.com/css2?family=Open Sans:wght@300;400;500;600;700;800;900&display=swap');

        table {
            /* font-family: 'Quicksand', sans-serif !important; */
        }

        .img-responsive {
            max-width: 100%;
        }

        @media (max-width:500px) {
            table tr td.logo {
                width: 100%;
                padding: 0 0 15px;
            }

            table.logo-table tr td,
            table.logo-table tr,
            table.logo-table tbody {
                /* display: block;
            width: 100% !important;
            text-align: center !important; */
            }

            .links ul li {
                padding: 0 10px !important;
            }

            .dropbox .text-table {
                margin-bottom: 60px !important;
            }

            .banner-main {
                /* height: 190px !important; */
                padding: 20px 0 0 !important;
            }

            .heading-block tr td {
                font-size: 20px !important;
                line-height: 26px !important;
            }

            .text-block .wrapper table tr td {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            .wrapper table tr td.main-title {
                /* font-size: 22px !important;
            line-height: 22px !important;
            padding: 15px 0 15px !important; */
            }

            .middle-block .wrapper {
                padding: 30px 10px 0 !important;
            }

            .main-title {
                font-size: 22px !important;
                line-height: 26px !important;
            }

            .redeem-block {
                /* background-size: 340px !important; */
            }

            .redeem-block .wrapper table tr td {
                font-size: 24px !important;
                line-height: 26px !important;
            }

            .offer-table .wrapper {
                padding: 0 15px !important;
            }

            .offer-table .wrapper table td {
                padding: 0 10px !important;
            }
        }


        @media only screen and (max-width: 600px),
        only screen and (max-device-width: 600px) {
            .main-title img {
                margin: 0 auto !important;
            }

            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 14px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .content {
                padding: 10px !important;
            }

            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table[class=body] .btn table {
                width: 100% !important;
            }

            table[class=body] .btn a {
                width: 100% !important;
            }

            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }

            .social-block {
                width: 100% !important;
                float: none !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .social-point {
                float: left;
                overflow: hidden;
                width: 100%;
            }

            .footer-main p {
                width: 70% !important;
            }

            /* img {
            max-width: 100%;
            width: auto !important;
        } */

        }

        @media only screen and (max-width: 600px),
        only screen and (max-device-width: 600px) {
            .product-main {
                padding: 20px 0 !important;
            }

            .product-img img {
                width: 110px !important;
            }

            .product-img {
                width: 30% !important;
            }

            .product-detail {
                width: 70% !important;
            }

            .know-btn a {
                font-size: 12px !important;
                line-height: 12px !important;
                padding: 10px !important;
            }
            .know-btn {
                width: 80px !important;
                width: 50px !important;
                
            }

            .product-detail .mrp-detail {
                padding-right: 10px !important;
            }

            .product-detail .price {
                padding: 5px !important;
                font-size: 12px !important;
                line-height: 12px !important;
            }
            .product-detail span {
                margin: 0 0 5px !important;
                font-size: 12px !important;
                line-height: 12px !important;
            }

            .reach-sec {
                padding:  0 0 30px !important;
            }
            .social-link {
                padding:  0 0 30px !important;
            }
            .reach-sec td {
                font-size: 14px !important;
                line-height: 14px !important;
            }
            .social-title {
                font-size: 16px !important;
                line-height: 16px !important;
            }

            p {
            font-size: 12px !important;
            line-height: 18px !important;
            margin-top: 0 !important;
        }
            h2 {
                font-size: 24px !important;
                line-height: 26px !important;
            }

            .padding {
                padding: 20px 0px 0px 0px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .content {
                padding: 10px !important;
            }

            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table[class=body] .btn table {
                width: 100% !important;
            }

            table[class=body] .btn a {
                width: 100% !important;
            }

            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }

            .icon {
                margin: 0px !important;
            }

            .icon img {
                width: 35px;
            }

            .main-content {
                padding: 0 15px !important;
            }
            .main-table,
            .main-td,
            .main-content {
                width: 100% !important;
                max-width: 100% !important;
            }

            .table-custom table {
                padding: 0px !important;
            }

            /* img {
            max-width: 100%;
            width: auto !important;
        } */
        }

        /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */

        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }
        }
    </style>
</head>

<body class=""
    style="-webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;text-align: center; margin: 0 auto; display: block; ">

    <table border="0" cellpadding="0" cellspacing="0" class="body main-table"
        style="border-collapse: separate; mso-table-lspace: 0px; mso-table-rspace: 0px; width: 100%;margin: 0 auto;text-align: center;max-width: 900px;width: 900px;">
        <tr>
            <td class="container main-td"
                style="font-family: 'Open Sans', sans-serif;font-size: 14px; vertical-align: top; display: block; margin: 0 auto; max-width: 900px; padding: 0px; width: 900px;">
                <div class="content main-content"
                    style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 900px; padding: 0px 40px;">

                    <table class="main banner-main"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;border-spacing: 0px;text-align: center;margin: 0 auto;display: table;padding: 40px 0;height: 334px;">

                        <tr>
                            <td class="wrapper"
                                style="font-family: 'Open Sans', sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;text-align: center;  background-color: transparent;text-align: center;">

                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: left !important;">
                                                <h2 style="    font-size: 30px;
                                               line-height:30px;color: #40874d;">Thank you for registering for
                                                    Photowalks India !!!</h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: left !important;">
                                                <p style="    font-size: 18px;
                                               line-height:28px;color: #212121;font-weight: 500;margin: 0 0 30px;">The
                                                    Photowalks India is a strong,
                                                    trusted community of Hobbyist photographers united by a passion to
                                                    explore streets of India in various ways . We support and encourage
                                                    each other to capture great images and learn photography by
                                                    exchanging advice and knowledge sourced from experts and locals on
                                                    the best spots and experiences. Join the Photowalks India group that
                                                    matches your passion and expresses your character.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: left !important;">
                                                <p style="    font-size: 18px;
                                               line-height:28px;color: #212121;font-weight: 500;margin: 0 0 30px;">

                                                    ​Our community is a mix of entry level photographers to experienced
                                                    and veteran photographers in the industry who are willing to share
                                                    their knowledge and tricks to capturing some great images.We are
                                                    exploring different cities across India which will help us expand
                                                    our community and as an extension to the people in our community. An
                                                    opportunity to travel, explore and network, all while learning and
                                                    fine-tuning your hobby. So it's ok if you are just starting with
                                                    photography you are welcome to join the Photowalks India Family.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: left !important;">
                                                <p style="    font-size: 18px;
                                               line-height:24px;color: #212121;font-weight: 700;margin: 50px  0 0;">

                                                    We are offering some exciting discount on Fujifilm Cameras for our
                                                    participants with EMI options & Interest free rates</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>


                    <table class="main product-main"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;border-spacing: 0px;text-align: center;margin: 0 auto;display: table;padding: 40px;">

                        <tr>
                            <td class="wrapper product-img"
                                style="font-family: 'Open Sans', sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;text-align: center;  background-color: transparent;text-align: center;width: 45%;">

                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: center !important;">
                                                <img src="https://i.postimg.cc/rFdscTPk/product1.png" width="260"
                                                    alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="wrapper product-detail"
                                style="font-family: 'Open Sans', sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;text-align: center;  background-color: transparent;text-align: center;width: 55%;">

                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: top;text-align: left !important;" colspan="2">
                                                <h2 style="font-size: 50px;
                                                font-weight: bold;
                                                line-height: 50px;margin: 0 0 10px;color: #40874d;">X T5 </h2>
                                                <span style="font-size: 20px;
                                              font-weight: normal;
                                              line-height: 24px;margin: 0 0 10px;display: block;color: #212121;">18 -
                                                    55 f/2.8 - 4</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mrp-detail"
                                                style="vertical-align: top; text-align: center !important;    padding-right: 20px;">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #212121; text-align: left;">
                                                                MRP
                                                            </td>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #212121; text-align: right;">
                                                                Rs 2,09,999
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #3d884f; text-align: left; ">
                                                                Offer
                                                            </td>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #3d884f;text-align: right; ">
                                                                Rs 1,88,999
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="know-btn" style="vertical-align: top; text-align: center !important;width: 92px">
                                                <a href="https://fujifilmxindia.com/all-products/camera/x-series/fujifilm-x-t5-mirrorless-camera-body-with-16-80mm-lens-silver/?gclid=Cj0KCQiAorKfBhC0ARIsAHDzsltGacpZmVeFnVGNyneWMmyDjdRlBbD492R3b5Q_dOwoPOSAsFS-s9oaAieNEALw_wcB" style="border-radius: 9px;
                                                background-image: -moz-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);
                                                background-image: -webkit-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);
                                                background-image: -ms-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);text-decoration: none;padding: 22px 10px;display: block;font-size: 18px;
                                              font-weight: normal;
                                              line-height: 24px;margin: 0;color: #ffffff;" target="_blank">
                                                    Know <br>
                                                    More
                                                </a>
                                                <!-- <table border="0" cellpadding="0" cellspacing="0"
                                                style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </table>
                    <table class="main product-main"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;border-spacing: 0px;text-align: center;margin: 0 auto;display: table;padding: 40px;">

                        <tr>
                            <td class="wrapper product-img"
                                style="font-family: 'Open Sans', sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;text-align: center;  background-color: transparent;text-align: center;width: 45%;">

                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="vertical-align: top; display: table;text-align: center !important;">
                                                <img src="https://i.postimg.cc/d0N9xdNF/product2.png" width="260"
                                                    alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="wrapper product-detail"
                                style="font-family: 'Open Sans', sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;text-align: center;  background-color: transparent;text-align: center;width: 55%;">

                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: top;text-align: left !important;" colspan="2">
                                                <h2 style="font-size: 50px;
                                                font-weight: bold;
                                                line-height: 50px;margin: 0 0 10px;color: #40874d;">X - T30 II </h2>
                                                <span style="font-size: 20px;
                                              font-weight: normal;
                                              line-height: 24px;margin: 0 0 10px;display: block;color: #212121;">XC15 -
                                                    45mm F3.5 - 5.6 OIS </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mrp-detail"
                                                style="vertical-align: top; text-align: center !important;    padding-right: 20px;">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #212121; text-align: left;">
                                                                MRP
                                                            </td>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #212121; text-align: right;">
                                                                Rs 99,999
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #3d884f; text-align: left; ">
                                                                Offer
                                                            </td>
                                                            <td class="price"
                                                                style="font-size: 18px;
                                              font-weight: normal;
                                              line-height: 18px;margin: 0;color: #ffffff;padding: 14px;background: #3d884f;text-align: right; ">
                                                                Rs 83,000
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="know-btn" style="vertical-align: top; text-align: center !important;width: 92px;">
                                                <a href="https://fujifilm-x.com/global/products/cameras/x-t30-ii/" style="border-radius: 9px;
                                                background-image: -moz-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);
                                                background-image: -webkit-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);
                                                background-image: -ms-linear-gradient( -90deg, rgb(142,192,151) 0%, rgb(64,135,77) 58%);text-decoration: none;padding: 22px 10px;display: block;font-size: 18px;
                                              font-weight: normal;
                                              line-height: 24px;margin: 0;color: #ffffff;" target="_blank">
                                                    Know <br>
                                                    More
                                                </a>
                                                <!-- <table border="0" cellpadding="0" cellspacing="0"
                                                style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </table>



                    <table class="main footer-main"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-spacing: 0px;padding: 0px 0 20px;    width: 100%;border-spacing: 0px;text-align: center;margin: 0 auto;">

                        <tr>
                            <td class="wrapper"
                                style="font-size: 14px; vertical-align: top; box-sizing: border-box;padding: 0px;width: 100%;">
                                <table class="reach-sec" border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0 0px 60px;margin: 0 auto;">
                                    <tr>
                                        <td
                                            style="font-size: 25px; line-height: 25px;font-family: 'Open Sans', sans-serif;letter-spacing: -0.3px;color: #212121;font-family: 'Open Sans', sans-serif;font-weight: 700; vertical-align: top;text-align: center;width: 100%;">
                                            Reach us at <a href="mailto:info@photowalksindia.com"
                                                style="color: #40874d;text-decoration: none;">info@photowalksindia.com
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 150px;margin:0 auto;padding: 0 0 20px;">
                                    <tr>
                                        <td class="social-title"
                                            style="font-size: 20px; line-height: 20px;font-family: 'Open Sans', sans-serif;letter-spacing: -0.3px;color: #212121;font-family: 'Open Sans', sans-serif;font-weight: 500; vertical-align: top;text-align: center;width: 100%;">
                                            Follow us on
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" class="social-link" cellpadding="0" cellspacing="0"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 140px;margin:0 auto;padding: 0 0 80px;">
                                    <tr>
                                        <td style="width:33.33333%;vertical-align: middle;padding: 0 4px;">
                                            <a href="https://www.instagram.com/photowalksindia/?hl=en" target="_blank" style="display: block;">
                                                <img src="https://i.postimg.cc/yxsXJPkF/insta.png" alt="social"
                                                    width="30" height="30" class="img-responsive">
                                            </a>
                                        </td>
                                        <td style="width:33.33333%;vertical-align: middle;padding: 0 4px;">
                                            <a href="https://www.facebook.com/photowalksindia/" target="_blank" style="display: block;">
                                                <img src="https://i.postimg.cc/Hn65rCGg/facebook.png" alt="social"
                                                    height="30" width="30" class="img-responsive">
                                            </a>
                                        </td>
                                        <td style="width:33.33333%;vertical-align: middle;padding: 0 4px;">
                                            <a href="https://www.youtube.com/@photowalksindia" target="_blank" style="display: block;">
                                                <img src="https://i.postimg.cc/gj2LFBxB/youtube.png" height="25"
                                                    width="30" alt="social" class="img-responsive">

                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" class="links"
                                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 345px; margin:0 auto;padding: 0px;width: 100%;max-width: 100%;">
                                    <tr>
                                        <td>
                                            <a href="https://photowalksindia.com/"  target="_blank" style="display: block;">
                                                <img src="https://i.postimg.cc/1tc7Y4Fr/logo.png" alt="social"
                                                    class="img-responsive">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>