<?php include '../app/src/atas.php'?>
<main>
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">Kelompok Kelas Terbang</h1>
                    <p class="hero-paragraph">ga tau kata katanta euyy isi weh.. hehe</p>
                    <div class="hero-cta">
                        <a class="button button-primary" href="../index.php?next=4">Kumpulan Tugas</a>
                        <a class="button" href="../index.php?next=2">Mau Gabung? klik</a>
                    </div>
                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill:transparent;" />
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="features section">
        <h1 style="text-align: center;">Member</h1>
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
                <div class="features-wrap">
                    <?php 
                        include '../app/models/config.php';
                        $query = $conf->query("SELECT * FROM member");

                        while($data = mysqli_fetch_array($query)){
                    ?>    
                    <a href="<?= $data['lk']?>">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="../app/imgs/<?= $data['gb']?>" alt="Feature 02" style="border-radius:10px;">
                                </div>
                                <h4 class="feature-title mt-24"><?= $data['nd']?> <?= $data['nb']?></h4>
                                <p class="text-sm mb-0"><?= $data['dk']?></p>
                            </div>
                        </div>
                    </a>
                    <?php }?>
                    <!-- <a href="">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="src/images/dafin.png" alt="Feature 03">
                                </div>
                                <h4 class="feature-title mt-24">Naufal Dhafin N</h4>
                                <p class="text-sm mb-0">Isi sendiri aja weh atuh.</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="src/images/aca.png" alt="Feature 04">
                                </div>
                                <h4 class="feature-title mt-24">Natasya Eka Nanda S P</h4>
                                <p class="text-sm mb-0">Isi sendiri aja weh atuh.</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="src/images/rama.png" alt="Feature 05">
                                </div>
                                <h4 class="feature-title mt-24">Ramallah Salam Arramadhan</h4>
                                <p class="text-sm mb-0">Isi sendiri aja weh atuh.</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="src/images/raka.png" alt="Feature 06">
                                </div>
                                <h4 class="feature-title mt-24">Rakha Alfian</h4>
                                <p class="text-sm mb-0">Isi sendiri aja weh atuh.</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="src/images/cesar.png" alt="Feature 06">
                                </div>
                                <h4 class="feature-title mt-24">Chaisar Faridzky</h4>
                                <p class="text-sm mb-0">Isi sendiri aja weh atuh.</p>
                            </div>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Unlimited for all</h2>
                            <p class="section-paragraph mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut ad quis nostrud.</p>
                        </div>
						<div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span class="pricing-table-price-currency h2">$</span><span class="pricing-table-price-amount h1">49</span><span class="text-xs">/month</span></div>
                                        </div>
										<div class="pricing-table-features-title text-xs pt-24 pb-24">What you will get</div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Lorem ipsum dolor sit nisi</span>
                                            </li>
                                            <li>
                                                <span>Lorem ipsum dolor sit nisi</span>
                                            </li>
                                            <li>
                                                <span>Lorem ipsum dolor sit nisi</span>
                                            </li>
											<li>
												<span>Lorem ipsum dolor sit nisi</span>
											</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">Pre order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

    <!-- <section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">Still not convinced on buying?</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="#">Get in touch</a>
						</div>
					</div>
				</div>
			</section> -->
</main>
<?php include '../app/src/bawah.php'?>