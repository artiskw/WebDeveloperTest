<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Megebit - Web Developer Test</title>
</head>
<body>
    <div class="page_content">
        <div class="left_side"></div>
        <div class="right_side">
            <div class="header_container">
                <div class="logo_container">
                    <a href="#">
                        <img class="logo" src="img/logo.png" alt="">
                        <img class="pineapple" src="img/pineapple..png" alt="">
                    </a>
                </div>
                <nav>
                    <a href="#">About</a>
                    <a href="#">How it works</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
            <div class="middle_container">
                <?php if (!isset($_GET['status']) || $_GET['status'] !== 'success') : ?>
                    <div class="form_container">
                        <div class="title">
                            <h2>Subscribe to newsletter</h2>
                            <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
                        </div>
                        <form action="insert.php" name="form"  method="post">
                            <div class="field_email">
                                <input type="email" name="email" placeholder="Type your email address here…" require>
                                <button type="submit" name="submit" value="Submit">
                                    <svg class="approve-email-btn" version="1.1" xmlns="http://www.w3.org/2000/svg" width="55" height="32" viewBox="0 0 55 32"><path d="M40.473 0.669c-0.893-0.893-2.34-0.893-3.232 0s-0.893 2.34 0 3.232l9.812 9.812h-44.768c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286h44.768l-9.812 9.812c-0.893 0.893-0.893 2.34 0 3.232s2.34 0.893 3.232 0l13.714-13.714c0.893-0.893 0.893-2.34 0-3.232l-13.714-13.714z"></path></svg>
                                </button>
                            </div>
                            <div class="email-order">
                                <label class="email-container">
                                    <p>I agree to <a href="#">terms of service</a></p>
                                    <input type="hidden" name="new" value="1">
                                    <input type="checkbox" name="terms_and_conditions" id="terms-and-conditions">
                                    <span class="mark js-mark"></span>
                                </label>
                            </div>
                            <?php if (isset($_GET['status'])) : ?>
                                <?php if ($_GET['status'] === 'empty-email') : ?>
                                    <div class="notifications">Please provide a valid e-mail address</div>
                                <?php endif; ?>
                                <?php if ($_GET['status'] === 'terms-empty') : ?>
                                    <div class="notifications">You must accept the terms and conditions</div>
                                <?php endif; ?>
                                <?php if ($_GET['status'] === 'restricted-country') : ?>
                                    <div class="notifications">We are not accepting subscriptions from Colombia emails</div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </form>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['status'])) : ?>
                    <?php if ($_GET['status'] === 'success') : ?>
                        <div class="submitte">
                            <div class="icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="32" viewBox="0 0 20 32"><path d="M5.943 23.314v4.571c0 0.252 0.205 0.457 0.457 0.457h7.314c0.252 0 0.457-0.205 0.457-0.457v-4.571c0-0.252-0.205-0.457-0.457-0.457h-7.314c-0.252 0-0.457 0.205-0.457 0.457zM6.857 23.771h6.4v3.657h-6.4v-3.657z"></path><path d="M3.657 0h12.8c0.252 0 0.457 0.205 0.457 0.457v1.829c0 0.252-0.205 0.457-0.457 0.457h-0.457v0.457h0.381c0.345 0 0.667-0.211 0.863-0.494l0.272-0.392c0.402-0.58 1.064-0.927 1.772-0.928 0.218-0.001 0.429 0.086 0.585 0.24 0.156 0.155 0.242 0.361 0.242 0.581v2.008c0 1.48-0.328 2.563-1.002 3.31-0.594 0.658-1.39 0.98-2.092 1.264-0.816 0.33-1.587 0.641-1.961 1.408-0.138 0.283-0.102 0.556 0.102 0.768 0.166 0.174 0.415 0.277 0.664 0.277 0.106 0 0.204-0.019 0.291-0.056 0.389-0.165 0.427-0.62 0.415-0.876-0.012-0.259 0.189-0.478 0.449-0.49 0.26-0.010 0.481 0.188 0.493 0.447 0.039 0.837-0.33 1.503-0.987 1.782-0.205 0.087-0.428 0.131-0.662 0.131-0.502 0-1.006-0.212-1.346-0.568-0.050-0.053-0.096-0.108-0.138-0.165-0.44 0.657-1.414 1.722-1.998 2.268v1.829c0 0.252-0.205 0.457-0.457 0.457h-0.37c0.095 0.463 0.242 1.025 0.444 1.565 0.272 0.726 0.612 1.324 0.991 1.635h4.421c0.252 0 0.457 0.205 0.457 0.457v1.829c0 0.252-0.205 0.457-0.457 0.457h-0.457v7.314h0.457c0.252 0 0.457 0.205 0.457 0.457v1.829c0 0.252-0.205 0.457-0.457 0.457h-14.629c-0.252 0-0.457-0.205-0.457-0.457v-1.829c0-0.252 0.205-0.457 0.457-0.457h0.457v-7.314h-0.457c-0.252 0-0.457-0.205-0.457-0.457v-1.829c0-0.252 0.205-0.457 0.457-0.457h4.421c0.378-0.31 0.719-0.908 0.991-1.635 0.202-0.54 0.349-1.103 0.444-1.565h-0.37c-0.252 0-0.457-0.205-0.457-0.457v-1.829c-0.585-0.547-1.554-1.614-1.994-2.273-0.043 0.059-0.090 0.116-0.142 0.17-0.341 0.356-0.844 0.568-1.346 0.568-0.234 0-0.457-0.044-0.662-0.131-0.657-0.279-1.026-0.945-0.987-1.782 0.012-0.259 0.231-0.457 0.493-0.447 0.26 0.012 0.461 0.231 0.449 0.49-0.012 0.256 0.026 0.711 0.415 0.877 0.087 0.037 0.186 0.056 0.291 0.056 0.249 0 0.498-0.104 0.664-0.277 0.204-0.212 0.24-0.485 0.102-0.768-0.374-0.767-1.145-1.078-1.961-1.408-0.703-0.284-1.499-0.605-2.092-1.264-0.674-0.747-1.002-1.83-1.002-3.31v-2.008c0-0.22 0.086-0.426 0.242-0.581 0.154-0.153 0.365-0.24 0.581-0.24h0.006c0.705 0.002 1.367 0.349 1.769 0.928l0.272 0.392c0.196 0.282 0.518 0.494 0.863 0.494h0.381v-0.457h-0.457c-0.252 0-0.457-0.205-0.457-0.457v-1.829c0-0.252 0.205-0.457 0.457-0.457zM15.086 2.743h-10.057v2.934c0 2.974 1.36 5.804 3.756 7.58h2.551c2.396-1.776 3.749-4.606 3.749-7.58v-2.934zM16 0.914h-11.886v0.914h11.886v-0.914zM7.322 20.114c-0.005 0-0.009 0-0.014 0h-4.108v0.914h13.714v-0.914h-9.593zM11.751 19.2c-0.269-0.404-0.481-0.869-0.648-1.314-0.248-0.663-0.419-1.351-0.519-1.886h-1.054c-0.1 0.535-0.271 1.223-0.519 1.886-0.167 0.445-0.379 0.91-0.648 1.314h3.388zM11.429 15.086v-0.914h-2.743v0.914h0.449c0.005-0 0.009-0 0.014 0h2.279zM4.114 21.943v7.314h11.886v-7.314h-11.886zM16.914 30.171h-13.714v0.914h13.714v-0.914zM1.704 6.899c0.448 0.497 1.078 0.752 1.745 1.021 0.3 0.121 0.613 0.248 0.916 0.403-0.228-0.856-0.25-1.745-0.25-2.646v-1.563h-0.381c-0.655 0-1.267-0.339-1.639-0.875l-0.272-0.392c-0.204-0.294-0.526-0.482-0.879-0.517v1.885c0 1.239 0.249 2.117 0.76 2.684zM16.666 7.92c0.667-0.269 1.297-0.524 1.745-1.021 0.512-0.567 0.76-1.445 0.76-2.684v-1.884c-0.354 0.036-0.676 0.223-0.879 0.517l-0.272 0.392c-0.371 0.536-0.984 0.875-1.639 0.875h-0.381v1.563c0 0.9-0.015 1.787-0.243 2.642 0.301-0.153 0.612-0.279 0.909-0.399z"></path></svg>
                            </div>
                            <div class="title">
                                <h2>Thanks for subscribing!</h2>
                                <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="solid"></div>
                <div class="icon_container">
                        <a class="facebook" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="none" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" stroke-width="1.3913" stroke="#000" d="M31.304 16c0 8.452-6.852 15.304-15.304 15.304s-15.304-6.852-15.304-15.304c0-8.452 6.852-15.304 15.304-15.304s15.304 6.852 15.304 15.304z"></path><path opacity="0.3" fill="#000" d="M16.696 13.913v-1.043c0-0.184 0.073-0.361 0.204-0.492s0.307-0.204 0.492-0.204h0.696v-1.739h-1.391c-0.553 0-1.084 0.22-1.476 0.611s-0.611 0.922-0.611 1.476v1.391h-1.391v2.087h1.391v5.565h2.087v-5.565h1.391l0.696-2.087h-2.087z"></path></svg>
                        </a>
                        <a class="instagram" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="none" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" stroke-width="1.3913" stroke="#000" d="M31.304 16c0 8.452-6.852 15.304-15.304 15.304s-15.304-6.852-15.304-15.304c0-8.452 6.852-15.304 15.304-15.304s15.304 6.852 15.304 15.304z"></path><path opacity="0.3" fill="#000" d="M11.375 20.626c-1.055-1.055-0.934-2.464-0.934-4.629 0-2.115-0.139-3.557 0.934-4.627 0.631-0.592 1.469-0.915 2.335-0.9 1.025-0.046 3.562-0.048 4.586 0 2.095 0.097 3.144 1.281 3.235 3.236 0.045 1.024 0.048 3.56 0 4.585-0.076 1.655-0.854 2.574-1.886 2.977-0.758 0.294-1.498 0.292-3.642 0.292-0.435 0-0.842 0.006-1.225 0.006-1.457-0.001-2.552-0.089-3.402-0.94zM19.916 19.917c0.69-0.696 0.646-1.628 0.646-3.92 0-1.485-0.006-1.661-0.033-2.248-0.116-2.574-2.056-2.313-4.527-2.313l-0.022-0.014c-1.487 0-1.661 0.008-2.252 0.028-2.574 0.132-2.307 1.978-2.307 4.539 0 1.894-0.139 3.143 0.64 3.921 0.678 0.68 1.608 0.645 3.926 0.645 2.253 0.001 3.226 0.063 3.928-0.639zM13.149 15.999c-0.001-0.375 0.073-0.747 0.216-1.093s0.354-0.662 0.619-0.927c0.265-0.265 0.58-0.476 0.927-0.619s0.718-0.217 1.093-0.216c0.757 0 1.484 0.301 2.019 0.836s0.836 1.262 0.836 2.019c-0.001 0.757-0.303 1.483-0.839 2.018s-1.263 0.835-2.020 0.834c-0.756 0-1.482-0.301-2.017-0.836s-0.835-1.26-0.835-2.017zM14.151 15.999c-0 0.243 0.048 0.485 0.141 0.71s0.23 0.43 0.402 0.602c0.172 0.172 0.377 0.309 0.602 0.402s0.466 0.141 0.71 0.141c0.243 0 0.485-0.048 0.71-0.141s0.429-0.23 0.602-0.402c0.172-0.172 0.309-0.377 0.402-0.602s0.141-0.466 0.141-0.71c0-0.243-0.048-0.484-0.141-0.709s-0.23-0.429-0.402-0.601-0.377-0.309-0.601-0.402c-0.225-0.093-0.466-0.141-0.709-0.141s-0.485 0.047-0.71 0.14c-0.225 0.093-0.43 0.229-0.602 0.401s-0.309 0.377-0.402 0.602c-0.093 0.225-0.141 0.466-0.141 0.71h0.002zM18.306 13.031c0-0.088 0.017-0.174 0.051-0.255s0.083-0.155 0.145-0.216c0.062-0.062 0.136-0.111 0.217-0.144s0.168-0.051 0.255-0.051c0.177 0 0.346 0.070 0.471 0.195s0.195 0.294 0.196 0.471c0 0.088-0.017 0.174-0.051 0.255s-0.083 0.155-0.145 0.217c-0.062 0.062-0.136 0.111-0.217 0.144s-0.168 0.051-0.255 0.051c-0.088 0-0.175-0.017-0.257-0.050s-0.155-0.082-0.218-0.145-0.112-0.136-0.145-0.218c-0.034-0.081-0.051-0.168-0.050-0.256l0.002 0.002z"></path></svg>
                        </a>
                        <a class="twiter" href="#">
                            <svg class="twiter"  version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="none" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" stroke-width="1.3913" stroke="#000" d="M31.304 16c0 8.452-6.852 15.304-15.304 15.304s-15.304-6.852-15.304-15.304c0-8.452 6.852-15.304 15.304-15.304s15.304 6.852 15.304 15.304z"></path><path opacity="0.3" fill="#000" d="M21.565 12.896c-0.419 0.183-0.861 0.304-1.315 0.36 0.478-0.283 0.835-0.732 1.004-1.261-0.447 0.265-0.937 0.452-1.447 0.552-0.313-0.334-0.719-0.566-1.165-0.666s-0.913-0.064-1.338 0.105c-0.426 0.168-0.791 0.46-1.048 0.839s-0.395 0.825-0.395 1.283c-0.002 0.175 0.016 0.349 0.053 0.52-0.908-0.044-1.796-0.28-2.607-0.691s-1.525-0.989-2.097-1.695c-0.294 0.502-0.385 1.097-0.254 1.664s0.472 1.062 0.956 1.386c-0.361-0.009-0.715-0.104-1.031-0.278v0.025c0.001 0.527 0.184 1.037 0.516 1.445s0.796 0.69 1.312 0.797c-0.195 0.051-0.396 0.077-0.598 0.075-0.145 0.003-0.29-0.011-0.432-0.039 0.147 0.453 0.432 0.849 0.813 1.134s0.843 0.444 1.319 0.456c-0.808 0.632-1.804 0.975-2.829 0.974-0.183-0-0.365-0.012-0.546-0.036 1.043 0.672 2.259 1.028 3.501 1.024 0.854 0.006 1.701-0.158 2.492-0.482s1.509-0.802 2.113-1.406 1.082-1.322 1.407-2.113c0.324-0.79 0.488-1.638 0.483-2.492 0-0.101-0.003-0.198-0.008-0.295 0.45-0.322 0.838-0.724 1.144-1.185z"></path></svg>
                        </a>
                        <a class="youtube" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="none" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" stroke-width="1.3913" stroke="#000" d="M31.304 16c0 8.452-6.852 15.304-15.304 15.304s-15.304-6.852-15.304-15.304c0-8.452 6.852-15.304 15.304-15.304s15.304 6.852 15.304 15.304z"></path><path opacity="0.3" fill="#000" d="M16.003 19.478c-1.354 0-3.094-0.021-3.799-0.061-0.646-0.045-0.984-0.126-1.297-0.68s-0.472-1.53-0.472-3.080v-0.007c0-1.572 0.145-2.524 0.472-3.086 0.302-0.534 0.63-0.636 1.298-0.674 0.71-0.047 2.49-0.064 3.798-0.064s3.082 0.017 3.794 0.064c0.669 0.038 0.997 0.139 1.296 0.674 0.328 0.557 0.474 1.507 0.474 3.087v0.005c0 1.581-0.145 2.531-0.472 3.082-0.299 0.53-0.626 0.634-1.297 0.679-0.703 0.039-2.44 0.061-3.794 0.061zM14.611 13.565v4.174l3.478-2.087-3.478-2.087z"></path></svg>
                        </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="script.js"></script>
