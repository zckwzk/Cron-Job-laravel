<div class="header-wrapper" id="home">
    <!-- Begin Hero -->
    <section class="hero is-fullheight">
        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
            <!-- Begin Burger Menu -->
            <div class="navbar-brand is-fixed-top">
                <div class="navbar-burger burger" data-target="mobile-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- End Burger Menu -->
            <div id="mobile-nav" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a class="navbar-item" href="#regular-section">
                            Pesan
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a class="navbar-item" href="#lokasi">
                            Lokasi
                        </a>
                    </div>

                    <div class="navbar-item">
                        <a class="navbar-item" href="#tentang-sherly-daeng">
                            Tentang Sherly dan Daeng
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a class="navbar-item" href="#rsvp">
                            RSVP
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Mobile Nav -->
        <!-- Begin Hero Content-->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="subtitle">Belum Menikah</h1>
                <h2 class="title">Kiki & Zaka</h2>
                <h4 class="subtitle tempatwaktu">

                    Minggu, 10 Oktober 2021
                    </br>
                    Kurahan
                    </br>
                    Bantul

                </h4>
            </div>
            <!-- Start Countdown -->
            <div>
                <ul id="hitungmundur">
                    <li><span class="days">00</span>
                        <p class="days_text">Hari</p>
                    </li>
                    <li class="separator">:</li>
                    <li><span class="hours">00</span>
                        <p class="hours_text">Jam</p>
                    </li>
                    <li class="separator">:</li>
                    <li><span class="minutes">00</span>
                        <p class="minutes_text">Menit</p>
                    </li>
                    <li class="separator">:</li>
                    <li><span class="seconds">00</span>
                        <p class="seconds_text">Detik</p>
                    </li>
                </ul>
                <div class="spasi">
                </div>
                <script type="text/javascript">
                    var now = new Date();
                    var day = now.getDate();
                    var month = now.getMonth() + 1;
                    var year = now.getFullYear() + 1;

                    var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
                    var harih = '10/10/2021 10:00:00';

                    $('#hitungmundur').countdown({
                        date: harih, // TODO Date format: 07/27/2017 17:00:00
                        offset: +7, // TODO Your Timezone Offset
                        day: 'Hari',
                        days: 'Hari'
                    }, function() {
                        alert('Done!');
                    });
                </script>
            </div>
            <!-- End Countdown -->
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot ">
            <div class="hero-foot--wrapper">
                <div class="columns">
                    <div class="column is-12 hero-menu-desktop has-text-centered">
                        <ul>
                            <li class="is-active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#regular-section">Pesan</a>
                            </li>
                            <li>
                                <a href="#ucapan">Ucapan</a>
                            </li>
                            <li>
                                <a href="#tentang-sherly-daeng">Tentang Sherly & Daeng</a>
                            </li>

                            <li>
                                <a href="#rsvp">RSVP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Menu -->
    </section>
    <!-- End Hero -->
</div>
<!-- End Header -->
