@extends('layouts.master')

@section('isi')
<!-- <div class="bg-image"></div> -->
<section class="about">
        <div class="main">
            <img src="{{ asset('/assets/img/main.jpeg') }}" >
            <div class="about-text">
                <h1>About Me</h1>
                <h5>Interact -<span> Developer & UI Design</span></h5>
                <p>I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations. 
                    I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations. 
                    A responsive design makes your website accessible to all users, regardless of their device.
                </p>
                <button type="button">Stay in touch</button>
            </div>

            <!-- <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Judul Card</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div> -->
        </div>
        
        <div class="garis-pembatas"></div>

        <div class="container">
            <!-- card 1 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 1</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>
    
            <!-- card 2 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 2</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- card 3 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 3</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- card 4 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 4</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- card 5 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 5</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- card 6 -->
            <div class="card">
                <img src="https://source.unsplash.com/random/300x200" alt="Gambar">
                <div class="card-content">
                  <h2>Card 6</h2>
                  <p>Deskripsi singkat card.</p>
                  <a href="#" class="button">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
@endsection
