{{-- Menghubungkan dengan view template master --}}
@extends('master')

{{-- isi bagian judul halaman --}}
@section('judul', 'Halaman Kontak')

{{-- isi bagian konten --}}
@section('konten')
<p>Ini Adalah Halaman Kontak</p>

<table border="1" cellpadding="3" cellspacing="0" align="center">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>info@gmail.com</td>
    </tr>
    <tr>
        <td>Facebook</td>
        <td>:</td>
        <td>facebook/bangraje</td>
    </tr>
    <tr>
        <td>Twitter</td>
        <td>:</td>
        <td>twitter/bangraje</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>0853-0835-3555</td>
    </tr>
</table>
@endsection
