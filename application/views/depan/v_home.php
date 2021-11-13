<section class="hero-wrap js-fullheight" style="background-image: url('assets/img/bg-3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-lg-9 ftco-animate text-center">
                <div class="mt-5">
                    <h1 class="mb-4">Welcome to Darussalam Mosque</h1>
                    <p style="font-size:50px;" class="mb-2">اَللّهُمَّ يَسِّرْ وَ لَا تُعَسِّر</p>
                    <p style="font-size:25px;" class="mb-4">“Ya Allah permudahlah dan jangan Engkau persulit!”</p>
                    <p><a href="https://api.whatsapp.com/send/?phone=6281234567&text=Assalamualaikum&app_absent=0" target="_blank" class="btn btn-primary">Hubungi Kami</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="about-wrap img w-100" style="background-image: url(assets/img/tentang.jpg);">
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="row justify-content-center mb-4 pt-md-4">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Selamat Datang</span>
                        <h2 class="mb-4">Selamat Datang Di SISI Masjid Darussalam</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit, doloribus omnis debitis autem ea, sed atque quis rem pariatur assumenda minima enim magni voluptatum. Earum hic corrupti magnam molestias..</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?= $this->db->count_all('tb_pengurus') ?>">0</strong>
                                <span>Jumlah Pengurus</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?= $this->db->count_all('tb_imam') ?>">0</strong>
                                <span>Jumlah Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?= $this->db->count_all('tb_muazin') ?>">0</strong>
                                <span>Jumlah Muazin</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?= $this->db->count_all('tb_khatib') ?>">0</strong>
                                <span>Jumlah Khatib</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?= $this->db->count_all('tb_remajamasjid') ?>">0</strong>
                                <span>Remaja Masjid</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>