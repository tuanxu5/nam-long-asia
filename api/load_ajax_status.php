<?php 
	include "config.php";

	$status = (!empty($_POST['status'])) ? htmlspecialchars($_POST['status']) : "";
	$tempLink = "";
	$where = "";
	$params = array();


	/* Get data */
	$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham'  and find_in_set('$status',status) and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
	$sqlCache = $sql;
    $items = $cache->get($sqlCache, $params, 'result', 7200);

	/* Count all data */
	$countItems = count($cache->get($sql, $params, 'result', 7200));
?>
<?php if($countItems) { ?>
	<div class="owl-pronb owl-page owl-carousel owl-theme"
	    data-xsm-items="1:10" 
	    data-sm-items="2:10" 
	    data-md-items="3:10" 
	    data-lg-items="3:10" 
	    data-xlg-items="4:20" 
	    data-rewind="1" 
	    data-autoplay="1" 
	    data-loop="0" 
	    data-lazyload="0" 
	    data-mousedrag="1" 
	    data-touchdrag="1" 
	    data-smartspeed="500" 
	    data-autoplayspeed="3500" 
	    data-dots="0" data-nav="0" 
	    data-navtext="" 
	    data-navcontainer="">
	    <?php foreach ($items as $k => $v) { ?>
	        <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
					<div class="pic-product">
						<a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
							<img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= WATERMARK?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
						</a>
					</div>
					<h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
					<div class="price-product">
						<?php if ($v['discount']) { ?>
							<span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
							<span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
							<?php /*<span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>*/?>
						<?php } else { ?>
							<span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
						<?php } ?>
					</div>
				</div>
	    <?php } ?>
	</div>
<?php } ?>