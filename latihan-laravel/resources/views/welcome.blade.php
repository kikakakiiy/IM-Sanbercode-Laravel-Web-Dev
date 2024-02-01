@extends('layouts.master')
@section('judul','Dashboard')
@section('content')
<header>
    <h1>SanberBook</h1> 
    <h2>Social Media Developer Santai Berkualitas</h2>
</header>

<main>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    <h3>Benefit Join di SanberBook</h3>
    <ul type="disc">
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h3>Cara Bergabung ke SanberBook</h3>
    <ol type="1">
        <li>Mengunjungi Website ini</li>
        <li> Mendaftar di <a href="/form"> Form Sign Up </a></li>
        <li>Selesai!</li>
    </ol>
</main>
@endsection
