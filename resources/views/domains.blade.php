<!DOCTYPE html>
<html lang="en">

<head>
    <title>Domain Registration - JiXi Cloud</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="azgDBMNbu7Pq53GY92W6daAEbB5nM2zbh33xWvLrObc" />
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="stylesheet" href="/style.css">
    <script src="https://kit.fontawesome.com/62cca11a06.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YKJHFF7KTM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-YKJHFF7KTM');
    </script>
</head>

@extends('layout.app1')
@section('mainContent')
    <body>
    
    
    
    
    
        <!-- --------------Main-Content Start--------------- -->
    
        <div class="main-content">
    
            <!-- --------------Top-Offer Section Start--------------- -->
    
            <style>
                .custom-shape-divider-bottom-1664226188 {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    overflow: hidden;
                    line-height: 0;
                    transform: rotate(180deg);
                }
    
                .custom-shape-divider-bottom-1664226188 svg {
                    position: relative;
                    display: block;
                    width: 100%;
                    height: 68px;
                    transform: rotateY(180deg);
                }
    
                .custom-shape-divider-bottom-1664226188 .shape-fill {
                    fill: #FDE5F8;
                }
    
                .domain-container {
                    padding-bottom: 1rem !important;
                }
            </style>
    
            <section style="position:relative;" class="second-section bg-main mb-1">
                <div class="container domain-container" style="padding-bottom: 1rem;">
                    <div class="ss-wrapper text-center ">
                        <h1 style="" class="fsl-2 text-white">Register your domain now!</h1>
                        <p class="s-desc text-white">Build your online identity with a personalized domain name at very
                            affordable price.</p>
                        <span class="ss-4">
                            <form class="form-search" method="post" onsubmit="getdomain(); return false;" action="">
                                <input type="text" id="find-your-domain-name" placeholder="Type here to search domain">
                                <button type="button" title="Search" value="Search" onclick="getdomain()"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="loader" style="display:none"></div>
                            <div class="domainResults" style="margin: 3rem auto 1rem auto;display:none"></div>
                        </span>
                    </div>
                </div>
                <div class="custom-shape-divider-bottom-1664226188">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                    </svg>
                </div>
            </section>
            <script>
                function getdomain() {
                    $("loader").hide();
                    var domain = $("#find-your-domain-name").val();
    
                    if (domain == '') {
                        alert('Please Enter Your Domain');
                    } else {
    
                        ext = domain.split('.');
    
                        if (ext[1] === undefined) {
                            domain = domain + '.com';
                        }
                        $(".loader").show();
                        $.ajax({
                            method: 'POST',
                            url: '/api/getdomain.php',
                            crossDomain: true,
    
                            data: {
                                domain: domain
                            },
                            success: function (result) {
                                $(".loader").hide();
                                $('.domainResults').show();
                                $('.domainResults').html(result);
                            }
                        });
    
                    }
    
                };
                $(function () {
                    $('#find-your-domain-name').bind('input', function () {
                        $(this).val(function (_, v) {
                            return v.replace(/\s+/g, '');
                        });
                    });
                });
            </script>
    
    
            <div class="wrapper domain-price">
                <div class="section-heding text-center pb-13">
                    <h2>Competitor Pricing Comparison</h2>
                    <p class="line"></p>
                    <p class="desc">Below listed price is already valid for first year registration only.</p>
                </div>
    
                <section>
                    <div class="content content-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>TLD</th>
                                    <th>JiXiCloud</th>
                                    <th>Godaddy</th>
                                    <th>Namecheap</th>
                                    <th>Bigrock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.COM</td>
                                    <td>₹599</td>
                                    <td>₹849</td>
                                    <td>₹749</td>
                                    <td>₹799</td>
                                </tr>
                                <tr>
                                    <td>.IN</td>
                                    <td>₹499</td>
                                    <td>₹699</td>
                                    <td>₹699</td>
                                    <td>₹599</td>
                                </tr>
                                <tr>
                                    <td>.ORG</td>
                                    <td>₹699</td>
                                    <td>₹1,079</td>
                                    <td>₹899</td>
                                    <td>₹949</td>
                                </tr>
                                <tr>
                                    <td>.NET</td>
                                    <td>₹799</td>
                                    <td>₹999</td>
                                    <td>₹899</td>
                                    <td>₹799</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
    
            <section class="gmj-section p1">
                <div class="section-heding text-center pb-2">
                    <h2>Unmatched affordability, always leading the market!</h2>
                    <p class="line"></p>
                    <p class="desc">Unbeatable prices meet unmatched quality, making us the industry's top choice.</p>
                </div>
    
                <div class="row top-domains">
    
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/com.svg" width="90" height="30">
                            </div>
                            <h3>₹599/year</h3>
                            <div class="offer-product-price-info">Instead of Rs899</div>
                        </div>
                    </div>
    
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/us-domain.svg" width="90" height="30">
                            </div>
                            <h3>₹399/year</h3>
                            <div class="offer-product-price-info">Instead of Rs499</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/online-domain.svg" width="90" height="30">
                            </div>
                            <h3>₹149/year</h3>
                            <div class="offer-product-price-info">Instead of Rs499</div>
                        </div>
                    </div>
    
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/in.png" width="70" height="30">
                            </div>
                            <h3>₹499/year</h3>
                            <div class="offer-product-price-info">Instead of Rs699</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/org.png" width="90" height="30">
                            </div>
                            <h3>₹699/year</h3>
                            <div class="offer-product-price-info">Instead of Rs899</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/net.png" width="90" height="30">
                            </div>
                            <h3>₹799/year</h3>
                            <div class="offer-product-price-info">Instead of Rs999</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/xyz.png" width="90" height="30">
                            </div>
                            <h3>₹199/year</h3>
                            <div class="offer-product-price-info">Instead of Rs399</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/co.svg" width="90" height="30">
                            </div>
                            <h3>₹349/year</h3>
                            <div class="offer-product-price-info">Instead of Rs1,656</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/club.png" width="90" height="30">
                            </div>
                            <h3>₹299/year</h3>
                            <div class="offer-product-price-info">Instead of Rs599</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card no-border">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/uk.png" width="90" height="30">
                            </div>
                            <h3>₹199/year</h3>
                            <div class="offer-product-price-info">Instead of Rs799</div>
                        </div>
                    </div>
                </div>
    
    
            </section>
    
            <div class="wrapper domain-price">
                <div class="section-heding text-center pb-13">
                    <h2>Choose from the most popular domain extensions</h2>
                    <p class="line"></p>
                    <p class="desc">We are providing the best industry price at domain renewal time.</p>
                </div>
    
                <section>
                    <div class="content content-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>EXTENSION</th>
                                    <th>REGISTER</th>
                                    <th>RENEWAL</th>
                                    <th>TRANSFER</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <td data-label="extension"><span>.COM</span></td>
                                    <td data-label="register"><span>₹599</span></td>
                                    <td data-label="renewal"><span>₹949</span></td>
                                    <td data-label="transfer"><span>₹849</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.IN</span></td>
                                    <td data-label="register"><span>₹499</span></td>
                                    <td data-label="renewal"><span>₹549</span></td>
                                    <td data-label="transfer"><span>₹549</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.ORG</span></td>
                                    <td data-label="register"><span>₹699</span></td>
                                    <td data-label="renewal"><span>₹899</span></td>
                                    <td data-label="transfer"><span>₹875</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.NET</span></td>
                                    <td data-label="register"><span>₹799</span></td>
                                    <td data-label="renewal"><span>₹999</span></td>
                                    <td data-label="transfer"><span>₹999</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.US</span></td>
                                    <td data-label="register"><span>₹399</span></td>
                                    <td data-label="renewal"><span>₹725</span></td>
                                    <td data-label="transfer"><span>₹699</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.UK</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹699</span></td>
                                    <td data-label="transfer"><span>₹699</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.CO.UK</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹699</span></td>
                                    <td data-label="transfer"><span>₹699</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.CO.IN</span></td>
                                    <td data-label="register"><span>₹399</span></td>
                                    <td data-label="renewal"><span>₹499</span></td>
                                    <td data-label="transfer"><span>₹449</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.XYZ</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹999</span></td>
                                    <td data-label="transfer"><span>₹999</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.SITE</span></td>
                                    <td data-label="register"><span>₹149</span></td>
                                    <td data-label="renewal"><span>₹1799</span></td>
                                    <td data-label="transfer"><span>₹1799</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.CO</span></td>
                                    <td data-label="register"><span>₹349</span></td>
                                    <td data-label="renewal"><span>₹1899</span></td>
                                    <td data-label="transfer"><span>₹1899</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.SHOP</span></td>
                                    <td data-label="register"><span>₹149</span></td>
                                    <td data-label="renewal"><span>₹2199</span></td>
                                    <td data-label="transfer"><span>₹2199</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.ONLINE</span></td>
                                    <td data-label="register"><span>₹149</span></td>
                                    <td data-label="renewal"><span>₹2599</span></td>
                                    <td data-label="transfer"><span>₹2599</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.TECH</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹2999</span></td>
                                    <td data-label="transfer"><span>₹3049</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.STORE</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹2599</span></td>
                                    <td data-label="transfer"><span>₹2599</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.CLUB</span></td>
                                    <td data-label="register"><span>₹299</span></td>
                                    <td data-label="renewal"><span>₹1299</span></td>
                                    <td data-label="transfer"><span>₹1299</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.INFO</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹1149</span></td>
                                    <td data-label="transfer"><span>₹1149</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.PRO</span></td>
                                    <td data-label="register"><span>₹249</span></td>
                                    <td data-label="renewal"><span>₹1199</span></td>
                                    <td data-label="transfer"><span>₹1199</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.WEBSITE</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹1425</span></td>
                                    <td data-label="transfer"><span>₹1425</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.LIVE</span></td>
                                    <td data-label="register"><span>₹199</span></td>
                                    <td data-label="renewal"><span>₹1599</span></td>
                                    <td data-label="transfer"><span>₹1599</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.BUZZ</span></td>
                                    <td data-label="register"><span>₹149</span></td>
                                    <td data-label="renewal"><span>₹2299</span></td>
                                    <td data-label="transfer"><span>₹2299</span></td>
                                </tr>
                                <tr>
                                    <td data-label="extension"><span>.CO.ZA</span></td>
                                    <td data-label="register"><span>₹499</span></td>
                                    <td data-label="renewal"><span>₹649</span></td>
                                    <td data-label="transfer"><span>₹649</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
    
    
    
            <div style="padding:2% 0">
                <section class="gmj-section p1">
                    <div class="section-heding text-center pb-2">
                        <h2>Why <span style="color:#A642AE">JiXiCloud Is Best</span> Option For Domains?</h2>
                        <p class="line"></p>
                        <p class="desc">JixiCloud stands out in the industry for these key reasons, making it the best
                            choice.</p>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="card no-border">
                                <div class="icon-wrapper">
                                    <svg fill="#A642AE" width="90" height="90" xmlns="http://www.w3.org/2000/svg"
                                        data-name="Layer 1" viewBox="0 0 72.23 122.88">
                                        <path
                                            d="M23.71 111.63a32.57 32.57 0 0 1-3.49-.43l-6.12-.88-3.78-.63c-1.22-.22-2.45-.46-3.66-.73s-2.47-.58-3.53-.86l-1.44-.39V84.06l6.69.55 4.91.29 5.15.23 5.22.16 5.07.1h4.72c1.43 0 2.68 0 3.76-.14a22.78 22.78 0 0 0 3-.45 9.46 9.46 0 0 0 2.09-.71 4.65 4.65 0 0 0 1.26-.86 2.7 2.7 0 0 0 .63-1 4.47 4.47 0 0 0 .24-1.55v-1.53a3.09 3.09 0 0 0-1.2-2.72 5.5 5.5 0 0 0-1.63-.8 7 7 0 0 0-2-.27h-6.9a49.84 49.84 0 0 1-13.82-1.75A27.5 27.5 0 0 1 8.5 68.25a22 22 0 0 1-6.43-9.72A42.4 42.4 0 0 1 0 44.51v-4.29A35.58 35.58 0 0 1 2.29 27a23.85 23.85 0 0 1 7-9.67 32.26 32.26 0 0 1 6.92-4.57 28.29 28.29 0 0 1 7.49-2.25V0h21.82v10.07a91.3 91.3 0 0 1 9.93 1.43l1.84.32c1.53.27 3.05.56 4.56.88s2.78.59 4.08.9l1.48.36v23.68l-2.1-.18c-2.08-.18-4.19-.34-6.31-.47-2.31-.15-4.67-.27-7.08-.38s-4.9-.19-7.09-.24c-2 0-4.17-.07-6.44-.07-1.19 0-2.29 0-3.29.12a26.91 26.91 0 0 0-2.88.36 8.23 8.23 0 0 0-2 .63 4.82 4.82 0 0 0-1.34.92 3 3 0 0 0-.71 1.18 6.19 6.19 0 0 0-.29 2v1.3a5.49 5.49 0 0 0 .36 2.12 3.47 3.47 0 0 0 1 1.33 4.92 4.92 0 0 0 1.91.9 13.07 13.07 0 0 0 3.25.35H43a39.54 39.54 0 0 1 8.77.92 26.84 26.84 0 0 1 7.35 2.79A24.48 24.48 0 0 1 69 61.4a28.62 28.62 0 0 1 2.46 6.79 34.51 34.51 0 0 1 .82 7.57v4.3a51.37 51.37 0 0 1-1.18 11.32 26.08 26.08 0 0 1-3.49 8.62 22.65 22.65 0 0 1-5.7 6 24.53 24.53 0 0 1-7.62 3.63l-.73.2a43 43 0 0 1-8 1.74v11.35H23.71v-11.29Z" />
                                    </svg>
                                </div>
                                <h3>Best Renewal Rates</h3>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card no-border">
                                <div class="icon-wrapper">
                                    <svg fill="#A642AE" width="90" height="90" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 96.108 122.88" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.892 56.036h8.959V37.117c0-10.205 4.177-19.484 10.898-26.207v-.009C29.473 4.177 38.754 0 48.966 0 59.17 0 68.449 4.177 75.173 10.901l.01.009c6.721 6.723 10.898 16.002 10.898 26.207v18.919h7.136a2.901 2.901 0 0 1 2.892 2.891v61.062a2.901 2.901 0 0 1-2.892 2.891H2.892A2.901 2.901 0 0 1 0 119.989V58.927a2.901 2.901 0 0 1 2.892-2.891zm23.379 0h45.387V36.911c0-6.24-2.554-11.917-6.662-16.03l-.005.004c-4.111-4.114-9.787-6.669-16.025-6.669-6.241 0-11.917 2.554-16.033 6.665-4.109 4.113-6.662 9.79-6.662 16.03v19.125zm22.878 33.412 4.581 21.139-12.557.053 3.685-21.423c-3.431-1.1-5.918-4.315-5.918-8.111a8.512 8.512 0 1 1 10.209 8.342z">
                                        </path>
                                    </svg>
                                </div>
                                <h3>Privacy protection</h3>
                            </div>
                        </div>
    
                        <div class="column">
                            <div class="card no-border">
                                <div class="icon-wrapper">
                                    <svg fill="#A642AE" width="90" height="90" xmlns="http://www.w3.org/2000/svg"
                                        width="122.879" height="118.662" viewBox="0 0 122.879 118.662" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M43.101 54.363h4.138v-8.738c0-4.714 1.93-8.999 5.034-12.105v-.004c3.105-3.105 7.392-5.034 12.108-5.034 4.714 0 8.999 1.929 12.104 5.034l.004.004c3.104 3.105 5.034 7.392 5.034 12.104v8.738l3.297.001a1.34 1.34 0 0 1 1.335 1.335v28.203a1.34 1.34 0 0 1-1.336 1.335H43.101a1.34 1.34 0 0 1-1.336-1.335V55.698a1.34 1.34 0 0 1 1.336-1.335zM16.682 22.204a52.746 52.746 0 0 0-5.061 7.457c-5.987 10.645-8.523 22.731-7.49 34.543 1.01 11.537 5.432 22.827 13.375 32.271 2.853 3.392 5.914 6.382 9.132 8.968 11.112 8.935 24.276 13.341 37.405 13.216 13.134-.125 26.209-4.784 37.145-13.981a65.713 65.713 0 0 0 8.915-9.13c6.396-7.957 10.512-17.29 12.071-27.138 1.532-9.672.595-19.829-3.069-29.655-3.487-9.355-8.814-17.685-15.775-24.206C96.695 8.333 88.593 3.755 79.196 1.483A52.567 52.567 0 0 0 70.205.109a53.847 53.847 0 0 0-9.401.224 3.661 3.661 0 1 0 .802 7.278 46.56 46.56 0 0 1 8.141-.195c2.654.171 5.23.568 7.731 1.174 8.106 1.959 15.104 5.914 20.838 11.288 6.138 5.751 10.847 13.125 13.941 21.427 3.212 8.613 4.035 17.505 2.696 25.959-1.36 8.589-4.957 16.739-10.553 23.699-2.469 3.071-5.121 5.78-7.912 8.127-9.591 8.067-21.031 12.153-32.502 12.263-11.473.109-23.001-3.762-32.764-11.61a58.584 58.584 0 0 1-8.129-7.966c-6.917-8.224-10.771-18.092-11.655-28.202-.908-10.375 1.317-20.988 6.572-30.331 1.586-2.82 3.211-5.071 5.013-7.241l.533 14.696a3.655 3.655 0 1 0 7.306-.258l-.85-23.419a3.655 3.655 0 0 0-4.154-3.493v-.003L3.157 16.715a3.66 3.66 0 0 0 1.004 7.249l12.521-1.76zm37.217 32.159h20.963v-8.834c0-2.883-1.18-5.504-3.077-7.403l-.002.001a10.453 10.453 0 0 0-7.402-3.08c-2.883 0-5.504 1.18-7.404 3.078a10.456 10.456 0 0 0-3.077 7.404v8.834h-.001zm10.566 15.432 2.116 9.764-5.799.024 1.701-9.895a3.931 3.931 0 1 1 1.982.107z" />
                                    </svg>
                                </div>
                                <h3>Domain Lock</h3>
                            </div>
                        </div>
    
                        <div class="column">
                            <div class="card no-border">
                                <div class="icon-wrapper">
                                    <svg fill="#A642AE" width="90" height="90" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 122.88 80.59" style="enable-background:new 0 0 122.88 80.59"
                                        xml:space="preserve">
                                        <path
                                            d="M122.88 27.53 94.25 0v17.72h-22.7v19.62h22.7v17.72l28.63-27.53zM0 53.06l28.63 27.53V62.87h22.7V43.25h-22.7V25.53L0 53.06zm54.84 9.81H68.4V43.25H54.84v19.62zm16.8 0h7.7V43.25h-7.7v19.62zm-20.4-45.15h-7.7v19.62h7.7V17.72zm16.8 0H54.49v19.62h13.56V17.72h-.01z"
                                            style="fill-rule:evenodd;clip-rule:evenodd" />
                                    </svg>
                                </div>
                                <h3>Easy Transfer</h3>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    
    
    
    
            <style>
                .table {
                    width: 100%;
                    border-collapse: collapse;
                    font-size: 1rem
                }
    
                th,
                td {
                    border-collapse: collapse;
                    border: 1px solid #f3f4f5;
                    padding: 10px 0;
                    text-align: center;
                }
    
                th {
                    background: #A642AE;
                    color: #ffffff;
                }
    
                td {
                    background: #ffffff;
                    color: #000000;
                }
    
    
                @media (max-width: 468px) {
                    .table {
                        font-size: 15px;
                    }
    
                }
    
                @media (max-width: 380px) {
                    .table {
                        font-size: 12px;
                    }
    
                    th {
                        font-weight: normal;
                    }
                }
            </style>
    
        </div>
        <!--main-content ---End--->
    
    </body>
@endsection

</html>