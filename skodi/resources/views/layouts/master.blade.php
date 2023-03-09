<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com" crossorigin="">
    @yield('css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">
</head>
<body >
  <!-- <div class="bg-image"></div>
  <div class="about"> -->
  <!-- <nav class="fixed-top">
		<ul class="animasi-teks">
            <li><a href="/">Beranda</a></li>
            <li><a href="about.html">Tentang Kami</a></li>
            <li><a href="/kontak">Kontak</a></li>
		</ul>
	</nav> -->
  <!-- class main -->
    @yield('nav')
    @yield('isi')
    

    <footer>
		<p>Hak Cipta &copy; 2023 Tentang Kami. All rights reserved.</p>
	  </footer>
  </div>
    
</body>
</html>
