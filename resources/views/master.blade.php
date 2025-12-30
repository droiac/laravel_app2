<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelas Laravel 9</title>
</head>
<body align="center">

<header>
    <h2>Master Simple Blog</h2>
    <nav>
        <a href="/blog">BERANDA</a> |
        <a href="/tentang">TENTANG</a> |
        <a href="/kontak">KONTAK</a>
    </nav>
</header>

<hr>

<p align="center">
    <b>@yield('judul')</b>
</p>

@yield('konten')

<hr>

<footer>
    <p>Copy Right @Bang Raje</p>
</footer>

</body>
</html>
