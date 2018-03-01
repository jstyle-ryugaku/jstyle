<?php $options = get_design_plus_option(); ?>

<!------- phpタグ取り外したのここから ------>

		<div id="js-hero-header" class="p-hero-header">
				<ul class="p-hero-header__nav u-clearfix">
						<li class="p-hero-header__nav-item is-active"><a href="" data-target="#js-hero-header__content1"><span class="p-hero-header__nav-item-title" style="font-size: 34px;">留学</span></a></li>
						<li class="p-hero-header__nav-item"><a href="" data-target="#js-hero-header__content2"><span class="p-hero-header__nav-item-title" style="font-size: 34px;">MODERN</span></a></li>
						<li class="p-hero-header__nav-item"><a href="" data-target="#js-hero-header__content3"><span class="p-hero-header__nav-item-title" style="font-size: 34px;">SUPERIOR</span></a></li>
						<li class="p-hero-header__nav-item"><a href="" data-target="#js-hero-header__content4"><span class="p-hero-header__nav-item-title" style="font-size: 34px;">INFINITY</span></a></li>
					</ul>

<!------- 留学相談とか資料請求のボタン ------>

	<div class="js-hero-header__button u-clearfix">
			<div class="js-hero-header__leftbutton">
				留学相談
			</div>
			<div class="js-hero-header__rightbutton">
				資料請求
			</div>	
	</div>

<!------- 留学相談とか資料請求のボタンここまで ------>

				<div id="js-hero-header__content1" class="p-hero-header__content is-active" style="background-image: url(http://tcdwp.info/tcd051/wp-content/uploads/2017/09/01.jpg);">
					</div>
				<div id="js-hero-header__content2" class="p-hero-header__content" style="background-image: url(http://tcdwp.info/tcd051/wp-content/uploads/2017/08/story.jpg); display: none;">
						<div class="p-hero-header__content-video">
				<video loop>
					<source src="http://tcdwp.info/tcd051/wp-content/uploads/2017/09/02.mp4">
				</video>
			</div>
					</div>
				<div id="js-hero-header__content3" class="p-hero-header__content" style="background-image: url(http://tcdwp.info/tcd051/wp-content/uploads/2017/09/hakubo.jpg); display: none;">
					</div>
				<div id="js-hero-header__content4" class="p-hero-header__content" style=" display: none;">
						<div class="p-hero-header__content-video">
				<video loop>
					<source src="http://tcdwp.info/tcd051/wp-content/uploads/2017/09/01.mp4">
				</video>
			</div>
					</div>
						<a id="js-hero-header__link" href="#js-contents-builder" class="p-hero-header__link">VOGUEの魅力を知る</a>
</div>

<style>
.p-hero-header{
	height: 60vh;
}
.p-hero-header__nav{
	position: absolute;
}
.js-hero-header__button{
	top: 30vh;
	position: relative;
	z-index: 100;
	width: 500px;
	margin: auto;
}
.js-hero-header__leftbutton,.js-hero-header__rightbutton{
	display: inline-block;
	cursor: pointer;
	border:2px solid black;
	border-radius: 5px;
	color: white;
	background: #014099;
	height: 50px;
	line-height: 50px;
	width: 200px;
	text-align: center;
	margin: 10px 0; /*やや隙間をあける*/
}
.js-hero-header__leftbutton{
	float: left;
}
.js-hero-header__rightbutton{
	float: right;
}
</style>
	
<!------- 留学相談とか資料請求のボタンここまで ------>


<!------- phpタグ取り外したのここまで ------>


<!-- 	<div id="js-hero-header" class="p-hero-header">
		<?php if ( wp_is_mobile() ) : // TB, SP ?>
		<div id="js-hero-header__slider" class="p-hero-header__slider">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
			<div class="p-hero-header__slider-item" style="background-image: url(<?php echo esc_attr( wp_get_attachment_url( $options['hero_header_image_sp' . $i], 'full' ) ); ?>); ">
				<a href="<?php echo esc_url( $options['hero_header_url' . $i] ); ?>"><span class="p-hero-header__slider-item-title" style="font-size: <?php echo esc_attr( $options['hero_header_catch_font_size' . $i] ); ?>px;"><?php echo esc_html( $options['hero_header_catch' . $i] ); ?></span></a>
			</div>
			<?php endfor; ?>
		</div>
		<?php else : // PC ?>
		<ul class="p-hero-header__nav u-clearfix">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
			<li class="p-hero-header__nav-item<?php if ( 1 === $i ) { echo ' is-active'; } ?>"><a href="<?php echo esc_url( $options['hero_header_url' . $i] ); ?>" data-target="#js-hero-header__content<?php echo esc_attr( $i ); ?>"><span class="p-hero-header__nav-item-title" style="font-size: <?php echo esc_attr( $options['hero_header_catch_font_size' . $i] ); ?>px;"><?php echo esc_html( $options['hero_header_catch' . $i] ); ?></span></a></li>
			<?php endfor; ?>
		</ul>
		<?php
		for ( $i = 1; $i <= 4; $i++ ) : 
			$style = '';
			if ( $options['hero_header_image' . $i] ) { 
				$style .= 'background-image: url(' . wp_get_attachment_url( $options['hero_header_image' . $i], 'full' ) . ');';
			}
			// 1つ目以外は最初は非表示にする
			if ( 1 !== $i ) {
				$style .= ' display: none;';
			}
		?>
		<div id="js-hero-header__content<?php echo $i; ?>" class="p-hero-header__content<?php if ( 1 === $i ) { echo ' is-active'; } ?>" style="<?php echo esc_attr( $style ); ?>">
			<?php
			// video の場合、<video>タグを出力する
			if ( 'type2' === $options['hero_header_type' . $i] ) :
			?>
			<div class="p-hero-header__content-video">
				<video loop>
					<source src="<?php echo esc_attr( wp_get_attachment_url( $options['hero_header_video' . $i] ) ); ?>">
				</video>
			</div>
			<?php 
			// YouTube の場合、<iframe>タグを出力する
			elseif ( 'type3' === $options['hero_header_type' . $i] ) :
				$origin = ( empty( $_SERVER['HTTPS'] ) ? 'http://' : 'https://' ) . $_SERVER['HTTP_HOST'];
			?>
			<div class="p-hero-header__content-youtube">
				<iframe id="player<?php echo $i; ?>" class="p-hero-header__content-youtube-iframe" type="text/html" src="https://www.youtube.com/embed/<?php echo esc_attr( $options['hero_header_yt' . $i] ); ?>?enablejsapi=1&origin=<?php echo esc_attr( $origin ); ?>&loop=1&playlist=<?php echo esc_attr( $options['hero_header_yt' . $i] ); ?>&controls=0" frameborder="0"></iframe>
			</div>
			<?php endif; ?>
		</div>
		<?php endfor; ?>
		<?php endif; ?>
		<a id="js-hero-header__link" href="#js-contents-builder" class="p-hero-header__link"><?php echo esc_html( $options['hero_header_link_text'] ); ?></a>
	</div> 