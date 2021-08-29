<?
	if(strpos($_SERVER["REQUEST_URI"], "card")):
		$title = "Каталог";
	elseif(strpos($_SERVER["REQUEST_URI"], "cart")):
		$title = "Корзина";
	endif;
?>
<section class="breadcrumbs">
	<div class="breadcrumbs-container container">
		<div class="breadcrumbs-row row">
			<div class="breadcrumbs-title"><?=$title?></div>
			<ul class="breadcrumbs-list">
				<li class="breadcrumbs-list__item">
					<a href="/app" class="breadcrumbs-list__link">
						<img src="svg/home.svg" alt="" class="breadcrumbs-list__icon">
					</a>
				</li>
                <? if(strpos($_SERVER["REQUEST_URI"], "card")): ?>
				<li class="breadcrumbs-list__item">
					<a href="#" class="breadcrumbs-list__link">Основы свечные</a>
				</li>
				<li class="breadcrumbs-list__item">
					<span>Парафин для свечей</span>
				</li>
				<?endif?>
                <? if(strpos($_SERVER["REQUEST_URI"], "cart")): ?>
					<li class="breadcrumbs-list__item">
						<span><?=$title?></span>
					</li>
				<? endif; ?>
			</ul>
		</div>
	</div>
</section>