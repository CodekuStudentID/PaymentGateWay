<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://fyh6jk7zypag.cdn.shift8web.com/wp-content/uploads/2020/05/Midtrans-696x385.jpg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Install Midtrans With Laravel Composser

1. Create New Project
    ```bash
    Laravel new Nama-Project

2. Install Midtrans Via Composser 
    ```bash
    composer require midtrans/midtrans-php

3. Import Di Controller class Midtrans => server Key Ambil dari Dashboard 
    Midtrans mode Sandbox
    ```bash
    \Midtrans\Config::$serverKey = 'SB-Mid-server-cX68a9tO4FcMQLG7cbz-Psxz';
    \Midtrans\Config::$isProduction = false;
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    $params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'budi',
        'last_name' => 'pratama',
        'email' => 'budi.pra@example.com',
        'phone' => '08111222333',
    ),
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);

4. Ambil Snap Token Dengan debug Variable
    ```bash
    @dd($snapToken)

5. Tampilkan Token Di Frontend 
    ```bash
    <script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
    window.snap.embed("d24f2e02-d95d-4af5-b031-3a78224e8bf1", {
    embedId: 'snap-container'
    });
    });
    </script>
