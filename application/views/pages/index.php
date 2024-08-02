<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("layout/_head"); ?>
	<!-- Plugin: SwiperJS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<!-- Plugin: SwiperJS -->

	<!-- Plugin: LightGallery -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js" integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js" integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js" integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Plugin: LightGallery -->

	<!-- Plugin: TypewriterJS -->
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<!-- Plugin: TypewriterJS -->
</head>

<body>
	<header>
		<?php $this->load->view('layout/_header'); ?>
	</header>
	<main>
		<article>
			<div class="hero-wrapper position-relative">
				<div class="media-content">
					<div class="wrap">
						<video muted autoplay loop id="heroVideo">
							<source src="<?= base_url('assets/media/background/promo-video.mp4') ?>">
						</video>
					</div>
				</div>
				<div class="text-content text-white position-absolute text-center">
					<div class="">
						<h1 id="heroText" class="title-font text-hero"></h1>
					</div>
					<div class="mb-4 mb-md-5">
						<p class="title-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vero rerum voluptatem debitis dignissimos velit, mollitia necessitatibus omnis error doloribus.
						</p>
					</div>
					<div class="">
						<a href="" class="btn btn-outline-white">Lorem, ipsum dolor.</a>
					</div>
				</div>
				<div class="controller position-absolute" id="videoSoundController">
					<i class="fa-solid fa-volume-xmark"></i>
					<!-- <i class="fa-solid fa-volume-high"></i> -->
				</div>
				<script>
					new Typewriter('#heroText', {
						cursor: '.'
					}).typeString('Lorem ipsum dolor sit amet.').start();
					$("#videoSoundController").on('click', () => {
						if ($("#heroVideo").prop('muted')) {
							$("#heroVideo").prop('muted', false);
							$("#videoSoundController i.fa-solid").removeClass("fa-volume-xmark")
							$("#videoSoundController i.fa-solid").addClass("fa-volume-high")
						} else {
							$("#heroVideo").prop('muted', true);
							$("#videoSoundController i.fa-solid").removeClass("fa-volume-high")
							$("#videoSoundController i.fa-solid").addClass("fa-volume-xmark")
						}
					})
				</script>
			</div>
		</article>
		<section class="">
			<div class="row g-0 align-items-center">
				<div class="col-xl-4 col-md-6 col-12">
					<div class="media-content bg-image" data-aos="fade-right" style="background-image: url('<?= base_url('assets/media/images/') ?>truck00002.jpg'); background-position: 85% top;">
						<div class="wrap"></div>
					</div>
				</div>
				<div class="col-xl-8 col-md-6 col-12">
					<div class="section">
						<div class="text-content">
							<div class="section-title">
								<h2 data-aos="fade-left">Lorem ipsum dolor sit amet consectetur.</h2>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officiis assumenda quibusdam aut molestiae soluta iure! Odit animi tempore consequatur reiciendis autem vitae, laudantium aperiam soluta ullam officiis totam asperiores nam impedit quisquam? Porro neque corporis fuga veritatis tempora error. Praesentium inventore nam, eaque eius magnam accusamus tempora odio nihil!
								</p>
							</div>
							<div class="">
								<a href="" class="btn btn-outline-black">Lorem, ipsum dolor.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-eco text-white">
			<div class="row g-0 align-items-center flex-row-reverse">
				<div class="col-xl-4 col-md-6 col-12">
					<div class="media-content bg-image" data-aos="fade-left" style="background-image: url('<?= base_url('assets/media/images/') ?>tech00001.jpg'); background-position: 50% top;">
						<div class="wrap"></div>
					</div>
				</div>
				<div class="col-xl-8 col-md-6 col-12">
					<div class="section">
						<div class="text-content">
							<div class="section-title">
								<h2 data-aos="fade-right">Lorem ipsum dolor sit amet consectetur.</h2>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officiis assumenda quibusdam aut molestiae soluta iure! Odit animi tempore consequatur reiciendis autem vitae, laudantium aperiam soluta ullam officiis totam asperiores nam impedit quisquam? Porro neque corporis fuga veritatis tempora error. Praesentium inventore nam, eaque eius magnam accusamus tempora odio nihil!
								</p>
							</div>
							<div class="">
								<a href="" class="btn btn-outline-white">Lorem, ipsum dolor.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="">
			<div class="row g-0">
				<div class="col-lg-6 col-12">
					<div class="hero-media-caption position-relative">
						<div class="media-content bg-image" style="background-image: url('<?= base_url('assets/media/images/') ?>truck00001.jpg'); background-position: 85% top;">
							<div class="wrap"></div>
						</div>
						<div class="caption position-absolute text-white" data-aos="fade-up">
							<div class="text-content">
								<div class="title">
									<h3 class="text-capitalize mb-2">Lorem ipsum dolor sit.</h3>
								</div>
								<div class="desc">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
								</div>
								<div class="">
									<a href="" class="text-link text-white"><span>View Details</span><div class="icon"><i class="fa-solid fa-circle-chevron-right"></i></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="hero-media-caption position-relative">
						<div class="media-content bg-image" style="background-image: url('<?= base_url('assets/media/images/') ?>truck00002.jpg'); background-position: 85% top;">
							<div class="wrap"></div>
						</div>
						<div class="caption position-absolute text-white" data-aos="fade-up"  data-aos-delay="300">
							<div class="text-content">
								<div class="title">
									<h3 class="text-capitalize mb-2">Lorem ipsum dolor sit.</h3>
								</div>
								<div class="desc">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
								</div>
								<div class="">
									<a href="" class="text-link text-white"><span>View Details</span><div class="icon"><i class="fa-solid fa-circle-chevron-right"></i></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="">
			<div class="row g-0 align-items-center">
				<div class="col-xl-4 col-md-6 col-12">
					<div class="media-content bg-image" data-aos="fade-right" style="background-image: url('<?= base_url('assets/media/images/') ?>truck00001.jpg'); background-position: 85% top;">
						<div class="wrap"></div>
					</div>
				</div>
				<div class="col-xl-8 col-md-6 col-12">
					<div class="section">
						<div class="text-content">
							<div class="section-title">
								<h2 data-aos="fade-left">Lorem ipsum dolor sit amet consectetur.</h2>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officiis assumenda quibusdam aut molestiae soluta iure! Odit animi tempore consequatur reiciendis autem vitae, laudantium aperiam soluta ullam officiis totam asperiores nam impedit quisquam? Porro neque corporis fuga veritatis tempora error. Praesentium inventore nam, eaque eius magnam accusamus tempora odio nihil!
								</p>
							</div>
							<div class="">
								<a href="" class="btn btn-outline-black">Lorem, ipsum dolor.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php $this->load->view('layout/_footer'); ?>
	</footer>
	<?php $this->load->view('layout/_js'); ?>
</body>

</html>
