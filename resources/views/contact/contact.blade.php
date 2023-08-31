@extends('layouts.master')

@section('content')
<h1 class="contact-title">Contact Me</h1>
<!-- --- -->
<div class="contact-container">
    <div class="follow-box">
        <div class="boxes">
            <h4>Phone:</h4>
            <span><a href="tel:+998934293572">+998 93 429 35 72</a> </span>
        </div>
        <div class="boxes">
            <h4>Email:</h4>
            <span><a href="mailto: xakimovsobirjon@mail.ru">xakimovsobirjon@mail.ru</a></span>
        </div>
        <div class="boxes">
            <h4>Web site:</h4>
            <span><a target="_blank" href="https://www.sobirjon.online">Portfolio site</a></span>
        </div>
        <div class="boxes">
            <h4>Adress:</h4>
            <span>Andijon viloyati</span>
            <span>Baliqchi tumani</span>
            <span>Chinobod shaharchasi</span>
        </div>
    </div>
    <div class="contact-box">
        <span>|| &nbsp;&nbsp; Get In Touch</span>
        <div class="text-box">
            <h2>If you have any project or need help. Contact me</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting emndustry lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown print only five centuries, but also the leap into electronic.</p>
        </div>
        <livewire:contact-livewire></livewire:contact-livewire>
    </div>
</div>


@endsection

@section('script')
    <script>

        function navigation() {
        const btn = document.querySelector('.menuBar');
        const navigation = document.querySelector('.navigation');
        const navigationItems = document.querySelectorAll('.navigation a');



        navigationItems.forEach(navItem => {
        navItem.addEventListener('click', () => {
        btn.classList.remove('active');
        navigation.classList.remove('active');
        })
        })
        btn.addEventListener('click', () => {
        btn.classList.toggle('active')
        navigation.classList.toggle('active')
        })



        }

        navigation()


    </script>
@endsection
