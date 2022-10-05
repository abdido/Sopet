@extends('layouts.ecommerce')

@section('title')
    <title>Pusat Belanja Kebutuhan Hewan</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Solusi untuk Peliharaan Anda
							<br /></h3>
						<p>sopet merupakan aplikasi web yang bertujuan untuk membantu anda dalam merawat hewan peliharaan kesayangan anda.</p>
						<a class="white_bg_btn" href="#">Lebih lengkap</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" height="315" width="515" src="{{ asset('ecommerce/img/product/hot_deals/hot-offer-1.jpeg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" height="315" width="515" src="{{ asset('ecommerce/img/product/hot_deals/hot-offer-2.jpeg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Hot Deals Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Terbaru</h2>
						<p>Tampil trendi dengan kumpulan produk kekinian kami.</p>
					</div>
				</div>
				<div class="row">
                    @forelse($products as $row)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
                                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
								<div class="p_icon">
									<a href="{{ url('/product/' . $row->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
                            <a href="{{ url('/product/' . $row->slug) }}">
                                <h4>{{ $row->name }}</h4>
							</a>
                            <h5>Rp {{ number_format($row->price) }}</h5>
						</div>
					</div>
                    @empty
                    
                    @endforelse
				</div>

				<div class="row">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
@endsection