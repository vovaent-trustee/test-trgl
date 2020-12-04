<header class="header">
  <div class="container">
    <div class="inner-header">
		<div class="header__left">
			@if ($custom_logo_id = get_theme_mod('custom_logo'))
				<a class="brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
					{!! $logo_img = wp_get_attachment_image(
					$custom_logo_id,
					'full',
					false,
					[
					'class' => 'img-svg',
					'itemprop' => 'logo',
					]
					) !!}
				</a>
			@else
				<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
			@endif
		</div>
		<!-- ./header__left -->
		<div class="header__right">
      @php pll_the_languages(['dropdown' => 1]) @endphp
    </div>
		<!-- /.header__right -->
    </div>
    <!-- ./inner-header -->
  </div>
</header>
