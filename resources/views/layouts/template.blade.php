<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<title>{{ config('app.name', 'Test') }}</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/template.css') }}">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.1.95/css/materialdesignicons.min.css">
	<link defer href="{{ asset('js/app.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/montserrat/Montserrat-Black.otf') }}">
	<link rel="stylesheet" href="{{ asset('fonts/montserrat/Montserrat-Bold.otf') }}">
	<link rel="stylesheet" href="{{ asset('fonts/montserrat/Montserrat-Hairline.otf') }}">
	<link rel="stylesheet" href="{{ asset('fonts/montserrat/Montserrat-Light.otf') }}">
	<link rel="stylesheet" href="{{ asset('fonts/montserrat/Montserrat-Regular.otf') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<script src="https://kit.fontawesome.com/edb68e2b78.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="jquery.kyco.easyshare.min.js"></script>
	<script async src="https://static.addtoany.com/menu/page.js"></script>
</head>
<body>
	<div class="container-nav">
		<div class="top-1">
			<div class="container">
				<div class="row">
					<div class="col p-2">
						<span class="nav-link mdi mdi-bookmark d-inline"></span> Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
					</div>
					<div class="col">
						<ul class="nav justify-content-end">
							<li class="nav-item">
								<span class="nav-link"><i class="mdi mdi-phone"></i> 0274-5305505</span>
							</li>
							<li class="nav-item">
								<span class="nav-link mdi mdi-forum"><i></i> Live Chat</span>
							</li>
							<li class="nav-item">
								<span class="nav-link mdi mdi-account-circle"><i></i> Member Area</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-2">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('images/Logo.png') }}">
					</div>
					<div class="col p-3">
						<nav class="nav justify-content-end">
							<a class="nav-link" href="#">Hosting</a>
							<a class="nav-link" href="#">Domain</a>
							<a class="nav-link" href="#">Server</a>
							<a class="nav-link" href="#">Website</a>
							<a class="nav-link" href="#">Afiliasi</a>
							<a class="nav-link" href="#">Promo</a>
							<a class="nav-link" href="#">Pembayaran</a>
							<a class="nav-link" href="#">Review</a>
							<a class="nav-link" href="#">Kontak</a>
							<a class="nav-link" href="#">Blog</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner-1">
		<div class="container">
			<div class="row" >
				<div class="align-self-center col-md-6 col-12 px-4">
					<h1 class="title-1">PHP Hosting</h1>
					<p class="h4 title-2">Cepat, handal, penuh dengan</p>
					<p class="h4 title-2">modul PHP yang Anda butuhkan</p>

					<ul style="align-items: flex-start; display: flex; flex-direction: column; list-style: none; margin: 1em 0 0; padding-left: 0px;">
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Solusi PHP untuk performa query yang lebih cepat.</span></li>
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Konsumsi memori yang lebih rendah.</span></li>
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 7.</span></li>
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Fitur enkripsi IonCube dan Zend Guard Loaders.</span></li>
					</ul>
				</div>
				<div class="d-flex justify-content-end align-self-center col-md-6 col-12 px-4">
					<div style="max-height: 250px" >
						<img src="{{ asset('svg/illustration banner PHP hosting-01.svg') }}">
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="banner-2">
		<div class="container" style="font-family: montserrat, sans-serif;">
			<div class="row justify-content-center">
				<div class="col-12 col-md-4 text-center">
					<div class="d-flex justify-content-center" style="height: 180px;">
						<img style="max-width:180px;" src="{{ asset('svg/illustration-banner-PHP-zenguard01.svg') }}">
					</div>
					<p>PHP Zend Guard Locker</p>
				</div>
				<div class="col-12 col-md-2 text-center">
					<div class="d-flex justify-content-center"  style="height: 180px">
						<img style="max-width: 100px; padding: 0em 1em" src="{{ asset('svg/icon-composer.svg') }}">
					</div>
					<p>PHP Composer</p>
				</div>
				<div class="col-12 col-md-4 text-center">
					<div class="d-flex justify-content-center"  style="height: 180px">
						<img style="max-width: 180px;" src="{{ asset('svg/icon-php-hosting-ioncube.svg') }}">
					</div>
					<p>PHP Ion Locker</p>
				</div>
			</div>

			<div class="text-center" style="margin: 2em;">
				<p class="title-1 h4">Paket Hostingan Singapura yang Tepat</p>
				<p class="h4">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
			</div>

			<div class="row col-12 px-4" style="margin: auto;">
				<div class="col-md-3 col-12 p-0 text-center card-harga mb-3">
					<div class="bottom-border">
						<div class="p-2">
							<span class="h4" style="font-weight: 800">Bayi</span>
						</div>
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<div><span><s>Rp19.000</s></span></div>
							<div class="d-flex justify-content-center"><span class="align-self-start">Rp &nbsp</span><span class="h1"><b> 14</b></span><span><b>.900</b></span><span>/ bln</span></div>
						</div>
						
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<b>938</b> Penguna terdaftar
						</div>
					</div>
					<div>
						<ul class="list-unstyled p-2">
							<li><b>0.5X Resource Power</b></li>
							<li><b>500 MB </b><span>Disk Space</span></li>
							<li><b>Unlimited </b><span>Bandwith</span></li>
							<li><b>Unlimited </b><span>Database</span></li>
							<li><b>1 </b><span>Domain</span></li>
							<li><b>Instant </b><span>Backup</span></li>
							<li><b>Unlimited SSL </b><span>Gratis Selamanya</span></li>
						</ul>
					</div>
					<div class="pb-4">
						<button type="button" class="btn btn-outline-secondary"><strong>Pilih Sekarang</strong></button>
					</div>
				</div>
				<div class="col-md-3 col-12 p-0 text-center card-harga mb-3">
					<div class="bottom-border">
						<div class="p-2">
							<span class="h4" style="font-weight: 800">Pelajar</span>
						</div>
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<div><span><s>Rp19.000</s></span></div>
							<div class="d-flex justify-content-center"><span class="align-self-start">Rp &nbsp</span><span class="h1"><b> 14</b></span><span><b>.900</b></span><span>/ bln</span></div>
						</div>
						
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<b>4.168</b> Penguna terdaftar
						</div>
					</div>
					<div>
						<ul class="list-unstyled p-2">
							<li><b>1X Resource Power</b></li>
							<li><b>Unlimited </b><span>Disk Space</span></li>
							<li><b>Unlimited </b><span>Bandwith</span></li>
							<li><b>Unlimited </b><span>POP3 Email</span></li>
							<li><b>Unlimited </b><span>Database</span></li>
							<li><b>10 </b><span>Domain</span></li>
							<li><b>Instant </b><span>Backup</span></li>
							<li><b>Domain Gratis </b><span>Selamanya</span></li>
							<li><b>Unlimited SSL </b><span>Gratis Selamanya</span></li>
						</ul>
					</div>
					<div class="pb-4">
						<button type="button" class="btn btn-outline-secondary"><strong>Pilih Sekarang</strong></button>
					</div>
				</div>
				<div class="col-md-3 col-12 p-0 text-center card-harga mb-3 active" style="position: relative;">
					<div class="has-sticker" style="top: -12px;left: -12px;">
						<div class="sticker shadow" style="top: 34px;left: -51px;font-size: 1em;font-weight: 700;">
							Best Seller!
						</div>
					</div>
					<div class="has-sticker" style="z-index: -1;top: -12px;left: -12px;width: 122px;height: 122px;">
						<div class="sticker" style="background-color: #007732;top: 57px;left: -39px;">&amp;nbps</div>
					</div>
					<div class="bottom-border harga-header">
						<div class="p-2">
							<span class="h4" style="font-weight: 800">Personal</span>
						</div>
					</div>
					<div class="bottom-border harga-header">
						<div class="p-2">
							<div><span><s>Rp19.000</s></span></div>
							<div class="d-flex justify-content-center"><span class="align-self-start">Rp &nbsp</span><span class="h1"><b> 14</b></span><span><b>.900</b></span><span>/ bln</span></div>
						</div>
						
					</div>
					<div class="bottom-border harga-header-2">
						<div class="p-2">
							<b>10.017</b> Penguna terdaftar
						</div>
					</div>
					<div>
						<ul class="list-unstyled p-2">
							<li><b>2X Resourch Power</b></li>
							<li><b>Unlimited </b><span>Disk Space</span></li>
							<li><b>Unlimited </b><span>Bandwith</span></li>
							<li><b>Unlimited </b><span>POP3 Email</span></li>
							<li><b>Unlimited </b><span>Database</span></li>
							<li><b>Unlimited </b><span>Addon Domains</span></li>
							<li><b>Instant </b><span>Backup</span></li>
							<li><b>Domain Gratis </b><span>Selamanya</span></li>
							<li><b>Unlimited SSL </b><span>Gratis Selamanya</span></li>
							<li><b>Private </b><span>Nama Server</span></li>
							<li><b>SpamAssasin </b><span>Mail Protection</span></li>
						</ul>
					</div>
					<div class="pb-4">
						<button type="button" class="btn btn-outline-secondary active"><strong>Pilih Sekarang</strong></button>
					</div>
				</div>
				<div class="col-md-3 col-12 p-0 text-center card-harga mb-3">
					<div class="bottom-border">
						<div class="p-2">
							<span class="h4" style="font-weight: 800">Bayi</span>
						</div>
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<div><span><s>Rp19.000</s></span></div>
							<div class="d-flex justify-content-center"><span class="align-self-start">Rp &nbsp</span><span class="h1"><b> 14</b></span><span><b>.900</b></span><span>/ bln</span></div>
						</div>
						
					</div>
					<div class="bottom-border">
						<div class="p-2">
							<b>3.552</b> Penguna terdaftar
						</div>
					</div>
					<div>
						<ul class="list-unstyled p-2">
							<li><b>3X Resourch Power</b></li>
							<li><b>Unlimited </b><span>Disk Space</span></li>
							<li><b>Unlimited </b><span>Bandwith</span></li>
							<li><b>Unlimited </b><span>POP3 Email</span></li>
							<li><b>Unlimited </b><span>Database</span></li>
							<li><b>Unlimited </b><span>Addon Domains</span></li>
							<li><b>Magic Auto </b><span>Backup & Store</span></li>
							<li><b>Domain Gratis </b><span>Selamanya</span></li>
							<li><b>Unlimited SSL </b><span>Gratis Selamanya</span></li>
							<li><b>Private </b><span>Nama Server</span></li>
							<li><b>Prioritas </b><span>Layanan Support</span></li>
							<li>
								@for($i = 0; $i < 5; $i++)
									<span class="mdi mdi-star" style="color: #008fee"></span>
								@endfor
							</li>
							<li><b>SpamAssasin </b><span>Pro Mail Protection</span></li>
						</ul>
					</div>
					<div class="pb-4">
						<button type="button" class="btn btn-outline-secondary"><strong>Diskon 40%</strong></button>
					</div>
				</div>
			</div>

			<div class="text-center" style="margin: 2em;">
				<p class="h2 sub-title">Powerful dengan limit PHP yang lebih besar</p>
			</div>

			<div class="row col-12 px-4 justify-content-center" style="margin: auto;">
				<div class="col-md-4 col-12 p-2 text-center">
					<table class="table table-striped table-bordered ">
						<tr class="col-12 d-none"></tr>
						<tr class="col-12">
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">max execution time 300s</td>
						</tr>
						<tr>
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">max execution time 300s</td>
						</tr>
						<tr>
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">php memory limit 1024 MB</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4 col-12 p-2 text-center">
					<table class="table table-striped table-bordered ">
						<tr class="col-12 d-none"></tr>
						<tr>
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">post max size 128 MB</td>
						</tr>
						<tr>
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">upload max filesize 128 MB</td>
						</tr>
						<tr>
							<td class="col-2 p-1"><span class="mdi mdi-check-circle"></span></td>
							<td class="col-10 p-1">max input vars 2500</td>
						</tr>
					</table>
				</div>
			</div>

			<p class="text-center line-break"></p>

			<div class="text-center">
				<p class="h2 sub-title">Semua Paket Hosting Sudah Termasuk</p>
			</div>

			<div class="row col-12 px-0 m-auto">
				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
					<p class="h4"><strong>Php Semua Versi</strong></p>
					<p class="m-0 px-5">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
				</div>
				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_My SQL.svg') }}">
					<p class="h4"><strong>MySql Versi 5.6</strong></p>
					<p class="m-0 px-5">Nikmati MySql versi terbaru, tercepat dan kaya akan fitur</p>
				</div>
				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
					<p class="h4"><strong>Panel Hosting cPanel</strong></p>
					<p class="m-0 px-5">Kelola website dengan panel canggih yang familiar di hati anda.</p>
				</div>

				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_garansi uptime.svg') }}">
					<p class="h4"><strong>Garansi Uptime 99.9%</strong></p>
					<p class="m-0 px-5">Data center yang mendukung kelangsungan website Anda 24/7.</p>
				</div>
				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_InnoDB.svg') }}">
					<p class="h4"><strong>Database InnoDB Unlimited</strong></p>
					<p class="m-0 px-5">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
				</div>
				<div class="col-md-4 col-12 px-2 my-4 text-center">
					<img class="p-3" style="max-height: 100px;" src="{{ asset('svg/icon PHP Hosting_My SQL remote.svg') }}">
					<p class="h4"><strong>Wildcard Remote MySql</strong></p>
					<p class="m-0 px-5">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
				</div>			
			</div>

			<p class="text-center line-break"></p>

			<div class="text-center">
				<p class="h2 sub-title">Mendukung Penuh Framework Laravel</p>
			</div>

			<div class="row col-12 px-4 mx-auto mt-4">
				<div class="col-md-6 col-12">
					<p class="lead">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorite Anda</p>

					<ul style="align-items: flex-start; display: flex; flex-direction: column; list-style: none; margin: 1em 0; padding-left: 0px;">
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.</span></li>
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Mendukung ekstensi <strong>PHP MCrypt, phar mbstring, json,</strong> dan <strong>fileinfo.</strong></span></li>
						<li class="p-0 d-flex"><span class="mdi mdi-check-circle"></span><span class="align-self-center">&nbsp Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan Anda.</span></li>
					</ul>

					<p><small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small></p>

					<button type="button" class="btn btn-outline-secondary active"><strong>Pilih Hosting Anda</strong></button>
				</div>

				<div class="col-md-6 col-12 pt-3 d-flex justify-content-end">
					<img style="max-height: 350px" src="{{ asset('svg/illustration banner support laravel hosting.svg') }}">
				</div>
			</div>
		</div>
	</div>
	

	<div class="container" style="font-family: montserrat, sans-serif;">
		<div class="text-center my-4">
			<p class="h2 sub-title">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</p>
		</div>
		<div class="row col-12 mx-auto p-4 list-modul">
			<div class="col-6 col-md-3">
				<ul class="list-unstyled">
					<li>IcePHP</li>
					<li>apc</li>
					<li>apcu</li>
					<li>apm</li>
					<li>ares</li>
					<li>bcmath</li>
					<li>bcompiler</li>
					<li>big_int</li>
					<li>bitset</li>
					<li>bloomy</li>
					<li>bz2_filter</li>
					<li>clamav</li>
					<li>coin_acceptor</li>
					<li>crack</li>
					<li>dba</li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<ul class="list-unstyled">
					<li>http</li>
					<li>huffman</li>
					<li>idn</li>
					<li>igbinary</li>
					<li>imagick</li>
					<li>imap</li>
					<li>include</li>
					<li>inotify</li>
					<li>interbase</li>
					<li>intl</li>
					<li>ioncube_loader</li>
					<li>ioncube_loader_4</li>
					<li>jsmin</li>
					<li>json</li>
					<li>ldap</li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<ul class="list-unstyled">
					<li>nd_pdo_mysql</li>
					<li>oauth</li>
					<li>oci8</li>
					<li>odbc</li>
					<li>opcache</li>
					<li>pdf</li>
					<li>pdo</li>
					<li>pdo_dblib</li>
					<li>pdo_firebird</li>
					<li>pdo_mysql</li>
					<li>pdo_odbc</li>
					<li>pdo_pgsql</li>
					<li>pdo_sqlite</li>
					<li>pgsql</li>
					<li>phalcon</li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<ul class="list-unstyled">
					<li>stats</li>
					<li>stem</li>
					<li>stomp</li>
					<li>suhosin</li>
					<li>sybase_ct</li>
					<li>sysvmsg</li>
					<li>sysvsem</li>
					<li>sysvshm</li>
					<li>tidy</li>
					<li>timezonedb</li>
					<li>trader</li>
					<li>translit</li>
					<li>uploadprogress</li>
					<li>uri_template</li>
					<li>uuid</li>
				</ul>
			</div>
		</div>
		<div class="col-12 text-center">
			<button type="button" class="btn btn-outline-secondary"><strong>Selengkapnya</strong></button>
		</div>
	</div>

	<div class="container mt-5" style="font-family: montserrat, sans-serif;">
		<div class="row col-12 px-4 mx-auto mt-4">
			<div class="col-md-6 col-12">
				<p class="h2 sub-title col-12">Linux Hosting yang Stabil dengan Teknologi LIVE</p>

				<p>SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSd</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>

				<button type="button" class="btn btn-outline-secondar active"><strong>Pilih Hosting Anda</strong></button>
			</div>

			<div class="col-md-6 col-12 pt-3 d-flex justify-content-end">
				<img style="max-height: 350px; max-width: inherit;" src="{{ asset('images/Image support.png') }}">
			</div>
		</div>
	</div>

	<div class="footer-medsos">
		<div class="container">
			<div class="row col-12 px-4 mx-auto">
				<div class="col-12 col-md-6 align-self-center">
					<span><strong>Bagikan jika Anda menyukai halaman ini.</strong></span>
				</div>

				<div class="row col-12 col-md-6 py-4 px-0 m-auto">
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style d-flex justify-content-center">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=#" rel="nofollow noopener" style="color: #1877f2;">
							<i class="fab fa-facebook-square" aria-hidden="true" style="font-size: 2.5em; float: left;"></i>
							<span class="a2a_count" style="line-height: 32px; height: 32px; width: 64px; font-size: 16px;"><span>80k</span></span>
						</a>
						<a target="_blank" href="https://twitter.com/intent/tweet?url={{ route('home') }}" rel="nofollow noopener" style="color: #00aef1;">
							<i class="fab fa-twitter-square" aria-hidden="true" style="font-size: 2.5em; float: left;"></i>
							<span class="a2a_count" style="line-height: 32px; height: 32px; width: 64px; font-size: 16px;"><span>450</span></span>
						</a>
						<a target="_blank" href="https://plus.google.com/share?url={{ route('home') }}" rel="nofollow noopener" style="color: #fc4a35;">
							<i class="fab fa-google-plus-square" aria-hidden="true" style="font-size: 2.5em; float: left;"></i>
							<span class="a2a_count" style="line-height: 32px; height: 32px; width: 64px; font-size: 16px;"><span>1900</span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-contact">
		<div class="container">
			<div class="row col-12 px-4 py-5 mx-auto">
				<div class="col-12 col-md-8 align-self-center">
					<span class="h2">Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong></span>
				</div>
				<div class="col-12 col-md-4 d-flex justify-content-end livechat-wrap">
					<div>
						<button type="button" class="btn btn-outline-secondary btn-lg"><i class="mdi mdi-forum"></i><strong>&nbsp&nbspLive Chat</strong></button>
					</div>					
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row col-12 p-4 mx-auto size-normal-mobile">
				<div class="col-12 col-md-3 mt-4">
					<span><strong>HUBUNGI KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li>0274-5305505</li>
						<li>Senin - Minggu</li>
						<li>24 Jam Nonstop</li>
						<br>
						<li>Jl. Selokan Mataram Monjali</li>
						<li>Karangjati MT I/304</li>
						<li>Sinduadi, Mlati, Sleman</li>
						<li>Yogyakarta 55284</li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Domain</a></li>
						<li><a href="#">Shared Hosting</a></li>
						<li><a href="#">Cloud VPS Hosting</a></li>
						<li><a href="#">Manage VPS Hosting</a></li>
						<li><a href="#">Web Builder</a></li>
						<li><a href="#">Keamanan SSL/HTTPS</a></li>
						<li><a href="#">Jasa Pembuatan Website</a></li>
						<li><a href="#">Program Affiliasi</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>SERVICE HOSTING</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Hosting Murah</a></li>
						<li><a href="#">Hosting Indonesia</a></li>
						<li><a href="#">Hosting Singapura SG</a></li>
						<li><a href="#">Hosting PHP</a></li>
						<li><a href="#">Hosting Wordpress</a></li>
						<li><a href="#">Hosting Laravel</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Knowledgebase</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Cara Pembayaran</a></li>
					</ul>
				</div>

				<div class="col-12 col-md-3 mt-4">
					<span><strong>TENTANG KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Tim Niagahoster</a></li>
						<li><a href="#">Karir</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Penawaran & Promo Spesial</a></li>
						<li><a href="#">Kontak Kami</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>KENAPA PILIH NIAGAHOSTER</strong></span>
					<ul class="list-unstyled mt-3">
						<li>Support Terbaik</li>
						<li>Garansi Harga Termurah</li>
						<li>Domain Gratis Selamanya</li>
						<li>Datacenter Hosting Terbaik</li>
						<li>Review Pelanggan</li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>NEWSLETTER</strong></span>

					<ul class="list-unstyled mt-3">
						<div class="input-group position-relative">
							<input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
							<button class="btn btn-outline-secondary active" type="button" id="button-addon2">Berlangganan</button>
						</div>
						<p><small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda.</small></p>
					</ul>
					
				</div>
				<div class="col-12 col-md-3 mt-4 icon-social">
					<span><strong>&nbsp</strong></span>

					<ul class="list-unstyled mt-2 list-inline">
						<li class="list-inline-item me-4">
							<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
								<i width="11" height="20" class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="list-inline-item me-4">
							<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
								<i width="11" height="20" class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
								<i width="11" height="20" class="fab fa-google-plus-g"></i>
							</a>
						</li>
					</ul>					
				</div>

				<div class="col-12 mt-4 list-bank-normal">
					<span><strong>PEMBAYARAN</strong></span>

					<ul class="list-unstyled mt-3 list-inline">
						<li>
							<img src="{{ asset('svg/bank/bca.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mandiriclickpay.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/bni.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/visa.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mastercard.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/atmbersama.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/permatabank.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/prima.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/alto.svg') }}">
						</li>
					</ul>
				</div>

				<div class="col-12 mt-4 list-bank-mobile">
					<span><strong>PEMBAYARAN</strong></span>

					<div class="row mt-3 mx-auto">
						<div class="col-4">
							<img src="{{ asset('svg/bank/bca.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/mandiriclickpay.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/bni.svg') }}">
						</div>
					</div>
					<div class="row mt-2 mx-auto">
						<div class="col-4">
							<img src="{{ asset('svg/bank/visa.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/mastercard.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/atmbersama.svg') }}">
						</div>
					</div>
					<div class="row mt-2 mx-auto">
						<div class="col-4">
							<img src="{{ asset('svg/bank/permatabank.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/prima.svg') }}">
						</div>
						<div class="col-4">
							<img src="{{ asset('svg/bank/alto.svg') }}">
						</div>
					</div>
				</div>
			</div>

			<div class="row col-12 p-4 mx-auto size-1024">
				<div class="col-12 col-md-3 mt-4">
					<span><strong>HUBUNGI KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li>0274-5305505</li>
						<li>Senin - Minggu</li>
						<li>24 Jam Nonstop</li>
						<br>
						<li>Jl. Selokan Mataram Monjali</li>
						<li>Karangjati MT I/304</li>
						<li>Sinduadi, Mlati, Sleman</li>
						<li>Yogyakarta 55284</li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Domain</a></li>
						<li><a href="#">Shared Hosting</a></li>
						<li><a href="#">Cloud VPS Hosting</a></li>
						<li><a href="#">Manage VPS Hosting</a></li>
						<li><a href="#">Web Builder</a></li>
						<li><a href="#">Keamanan SSL/HTTPS</a></li>
						<li><a href="#">Jasa Pembuatan Website</a></li>
						<li><a href="#">Program Affiliasi</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>SERVICE HOSTING</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Hosting Murah</a></li>
						<li><a href="#">Hosting Indonesia</a></li>
						<li><a href="#">Hosting Singapura SG</a></li>
						<li><a href="#">Hosting PHP</a></li>
						<li><a href="#">Hosting Wordpress</a></li>
						<li><a href="#">Hosting Laravel</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Knowledgebase</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Cara Pembayaran</a></li>
					</ul>
				</div>

				<div class="col-12 col-md-3 mt-4">
					<span><strong>TENTANG KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Tim Niagahoster</a></li>
						<li><a href="#">Karir</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Penawaran & Promo Spesial</a></li>
						<li><a href="#">Kontak Kami</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-3 mt-4">
					<span><strong>KENAPA PILIH NIAGAHOSTER</strong></span>
					<ul class="list-unstyled mt-3">
						<li>Support Terbaik</li>
						<li>Garansi Harga Termurah</li>
						<li>Domain Gratis Selamanya</li>
						<li>Datacenter Hosting Terbaik</li>
						<li>Review Pelanggan</li>
					</ul>
				</div>
				<div class="col-12 col-md-6 mt-4">
					<div class="col-12">
						<span><strong>NEWSLETTER</strong></span>

						<ul class="list-unstyled mt-3">
							<div class="input-group position-relative">
								<input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
								<button class="btn btn-outline-secondary active" type="button" id="button-addon2">Berlangganan</button>
							</div>
							<p><small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda.</small></p>
						</ul>
					</div>
					<div class="col-12 icon-social">
						<ul class="list-unstyled list-inline text-center mb-0">
							<li class="list-inline-item me-4">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item me-4">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-google-plus-g"></i>
								</a>
							</li>
						</ul>					
					</div>
				</div>
				

				<div class="col-12 list-bank">
					<span><strong>PEMBAYARAN</strong></span>

					<ul class="list-unstyled mt-3 list-inline">
						<li>
							<img src="{{ asset('svg/bank/bca.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mandiriclickpay.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/bni.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/visa.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mastercard.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/atmbersama.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/permatabank.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/prima.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/alto.svg') }}">
						</li>
					</ul>

				</div>
			</div>

			<div class="row col-12 p-4 mx-auto size-768">
				<div class="col-12 col-md-4 mt-4">
					<span><strong>HUBUNGI KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li>0274-5305505</li>
						<li>Senin - Minggu</li>
						<li>24 Jam Nonstop</li>
						<br>
						<li>Jl. Selokan Mataram Monjali</li>
						<li>Karangjati MT I/304</li>
						<li>Sinduadi, Mlati, Sleman</li>
						<li>Yogyakarta 55284</li>
					</ul>
				</div>
				<div class="col-12 col-md-4 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Domain</a></li>
						<li><a href="#">Shared Hosting</a></li>
						<li><a href="#">Cloud VPS Hosting</a></li>
						<li><a href="#">Manage VPS Hosting</a></li>
						<li><a href="#">Web Builder</a></li>
						<li><a href="#">Keamanan SSL/HTTPS</a></li>
						<li><a href="#">Jasa Pembuatan Website</a></li>
						<li><a href="#">Program Affiliasi</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-4 mt-4">
					<span><strong>SERVICE HOSTING</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Hosting Murah</a></li>
						<li><a href="#">Hosting Indonesia</a></li>
						<li><a href="#">Hosting Singapura SG</a></li>
						<li><a href="#">Hosting PHP</a></li>
						<li><a href="#">Hosting Wordpress</a></li>
						<li><a href="#">Hosting Laravel</a></li>
					</ul>
				</div>

				<div class="col-12 col-md-4 mt-4">
					<span><strong>TENTANG KAMI</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Tim Niagahoster</a></li>
						<li><a href="#">Karir</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Penawaran & Promo Spesial</a></li>
						<li><a href="#">Kontak Kami</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-4 mt-4">
					<span><strong>KENAPA PILIH NIAGAHOSTER</strong></span>
					<ul class="list-unstyled mt-3">
						<li>Support Terbaik</li>
						<li>Garansi Harga Termurah</li>
						<li>Domain Gratis Selamanya</li>
						<li>Datacenter Hosting Terbaik</li>
						<li>Review Pelanggan</li>
					</ul>
				</div>				
				<div class="col-12 col-md-4 mt-4">
					<span><strong>LAYANAN</strong></span>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Knowledgebase</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Cara Pembayaran</a></li>
					</ul>
				</div>

				<div class="row col-12 col-md-12 mt-4">
					<div class="col-12 col-md-6">
						<span><strong>NEWSLETTER</strong></span>

						<ul class="list-unstyled mt-3">
							<div class="input-group position-relative">
								<input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
								<button class="btn btn-outline-secondary active" type="button" id="button-addon2">Berlangganan</button>
							</div>
							<p><small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda.</small></p>
						</ul>
					</div>
					<div class="col-12 col-md-6 icon-social align-self-center d-flex justify-content-end">
						<span><strong>&nbsp</strong></span>

						<ul class="list-unstyled mt-2 list-inline">
							<li class="list-inline-item me-4">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item me-4">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.facebook.com/niagahoster" class="footer__icon" target="_blank" aria-label="facebook" rel="noopener noreferrer">
									<i width="11" height="20" class="fab fa-google-plus-g"></i>
								</a>
							</li>
						</ul>					
					</div>
				</div>
				

				<div class="col-12 mt-4 list-bank">
					<span><strong>PEMBAYARAN</strong></span>

					<ul class="list-unstyled mt-3 list-inline">
						<li>
							<img src="{{ asset('svg/bank/bca.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mandiriclickpay.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/bni.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/visa.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/mastercard.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/atmbersama.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/permatabank.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/prima.svg') }}">
						</li>
						<li>
							<img src="{{ asset('svg/bank/alto.svg') }}">
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

</body>
</html>
