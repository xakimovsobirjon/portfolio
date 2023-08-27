@extends('layouts.master')

@section('content')
    <!-- Asosiy qism: Bosh qismi start -->
    <div class="section">
        <div class="circle top"></div>

        <section class="home" id="home">
            <div class="grid-container">
                <div class="content">
                    <h1>Hello! I'm <br> Sobirjon</h1>
                    <h3>Backend Developer</h3>
                    <!-- href dagi panjarani o'rniga resume manzili kiritiladi -->
                    <button><a target="_blank" href="./resume/Resume.pdf">Get Resume &nbsp;<i class="fa fa-download"></i></a></button>

                </div>
                <!-- Carusel -->
                <div class="portret">
                    <img src="./img/portrait-hero.webp" alt="1255">
                    <div class="icons">
                        <div class="iconLink" style="--i:0"><a target="_blank" href="https://www.facebook.com/profile.php?id=100074357748224"><i class="fa fa-facebook"></i></a></div>
                        <div class="iconLink" style="--i:1"><a target="_blank" href="https://wa.me/+998934293572"><i class="fa fa-whatsapp"></i></a></div>
                        <div class="iconLink" style="--i:2"><a target="_blank" href="https://t.me/sobirjon_dev"><i class="fa fa-telegram"></i></a></div>
                        <div class="iconLink" style="--i:3"><a target="_blank" href="https://www.instagram.com/sobirjon_dev"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <!-- !!! -->
            </div>
            <!-- !!! -->
        </section>


        <section class="education" id="about-us">
            <div class="btn-container">
                <button class="btnBox" id="education">Education</button>
                <button class="btnBox" id="experience">Experience</button>
            </div>
            <div class="resume-container">
                <div class="resume-box">
                    <ul class="resume edu">
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2009-2010 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Bachelor of Business Administration</h3>
                                    <span>National University of Uzbekistan, Tashkent</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2012-2014 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Masters of Business Administration</h3>
                                    <span>National University of Uzbekistan, Tashkent</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2015-2018 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Bachelor of Graphic Arts</h3>
                                    <span>National University of Uzbekistan, Tashkent</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="resume exp">
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2016-2018 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Web Designer</h3>
                                    <span>Graphic Dev</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2018-2019 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Junior Web Developer</h3>
                                    <span>Acme Lab</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                        <li class="resume-tab-list-single-item">
                            <div class="content">
                                <div class="left">
                                    <span id="oneSpan">2019-2020 <span id="orient"><</span></span>
                                </div>
                                <div class="right">
                                    <h3>Senior Web Developer</h3>
                                    <span>Devtwist</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="service" id="service">
            <span class="title-section">|| &nbsp;&nbsp; My service</span>
            <h2 class="area-title">Service Provide For My Clients.</h2>

            <div class="card-container">
                <div class="card-items">
                    <div class="card order-1">
                        <div class="card-icon">
                            <i class="fa fa-database"></i>
                        </div>
                        <!-- Yo'nalish nomi -->
                        <div class="card-title">
                            <h1 class="title">Data Base Developing</h1>
                        </div>
                        <!-- Yo'nalish bo'yicha bilimlar -->
                        <div class="card-heading">
                            <p style="--a:0">>> MySql</p>
                            <p style="--a:1">>> Mongo</p>
                            <p style="--a:2">>> Kafka</p>
                            <p style="--a:3">>> SQS</p>
                            <p style="--a:4">>> ArangoDB</p>
                        </div>
                    </div>

                    <div class="card order-2">
                        <div class="card-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <!-- Yo'nalish nomi -->
                        <div class="card-title">
                            <h1 class="title">Backend Developing</h1>
                        </div>
                        <!-- Yo'nalish bo'yicha bilimlar -->
                        <div class="card-heading">
                            <p style="--a:0">>> Ruby on Rails</p>
                            <p style="--a:1">>> ASP.NET</p>
                            <p style="--a:2">>> Redis</p>
                            <p style="--a:3">>> Node JS</p>
                            <p style="--a:4">>> PHP</p>
                        </div>
                    </div>

                    <div class="card order-3">
                        <div class="card-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <!-- Yo'nalish nomi -->
                        <div class="card-title">
                            <h1 class="title">Mobile Developing</h1>
                        </div>
                        <!-- Yo'nalish bo'yicha bilimlar -->
                        <div class="card-heading">
                            <p style="--a:0">>> Java</p>
                            <p style="--a:1">>> Cotlin</p>
                            <p style="--a:2">>> Flutter</p>
                            <p style="--a:3">>> Swift</p>
                            <p style="--a:4">>> Objective C</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="skills" id="skills">
            <span class="title-section">|| &nbsp;&nbsp; My skills</span>
            <div class="skills-container-box">
                <div class="column content">
                    <h2 class="area-title content-title">My Special Skills Field Here</h2>
                    <!-- resume -->
                    <button><a target="_blank" href="./resume/Resume.pdf">Get Resume <i class="fa fa-download"></i></a></button>
                </div>
                <div class="column skills-box">
                    <div class="bar">
                        <div class="info">
                            <span>Html</span>
                            <span>92%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Css</span>
                            <span>90%</span>
                        </div>
                        <div class="line django"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Bootstrap</span>
                            <span>85%</span>
                        </div>
                        <div class="line ai"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Javascript</span>
                            <span>65%</span>
                        </div>
                        <div class="line tgBot"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Php</span>
                            <span>75%</span>
                        </div>
                        <div class="line community"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Laravel</span>
                            <span>85%</span>
                        </div>
                        <div class="line teamwork"></div>
                    </div>
                    <div class="bar">
                        <div class="info">
                            <span>Telegram Bot Api</span>
                            <span>80%</span>
                        </div>
                        <div class="line leadership"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="works" id="work">
            <span class="title-section">|| &nbsp;&nbsp; My works</span>
            <div class="work">
                <h2 class="area-title content-title">My Complate Projects</h2>
                <div class="work-container">
                        @livewire('work-livewire')
                    <div class="btn-box">
                        <button id="more">More</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="favourite" id="company">
            <span class="title-section">|| &nbsp;&nbsp; Favourite Clients</span>
            <h2 class="area-title content-title">Work With Trusted Company</h2>
            @livewire('company-livewire')
        </section>

    </div>
    <!-- Asosiy qism end -->
    <!-- Pastki qism start -->
    <div class="footer">
        <p>c 2023 y. Uz. AC: 9915.2114.009</p>
        <div class="footer-container-box">
            <div class="grid-box">
                <!-- saytning eng pastki footer qismdagi ma'lumotlar -->
                <div class="col"><a href="https://t.me/sobirjon_dev"><i class="fa fa-telegram"> Telegram</i></a></div>
                <div class="col"><a href="https://www.instagram.com/sobirjon_dev"><i class="fa fa-instagram"> Instagram</i></a></div>
                <div class="col"><a href="https://www.facebook.com/profile.php?id=100074357748224"><i class="fa fa-facebook-official"> Facebook</i></a></div>
                <div class="col"><a href="https://www.linkedin.com/in/sobirjon-xakimov-a7b51723a/"><i class="fa fa-linkedin"> LinkedIn</i></a></div>
                <div class="col"><a href="mailto: xakimovsobirjon@mail.ru"><i class="fa fa-envelope"> E-mail</i></a></div>
                <div class="col"><a href="tel:+998934293572"><i class="fa fa-phone"> +998 93 429 35 72</i></a></div>
            </div>
            <!-- Qo'shimcha content uchun -->
            <div class="content-box">
                <p>

                </p>
            </div>
        </div>
    </div>
    <!-- Pastki qism end -->

@endsection
