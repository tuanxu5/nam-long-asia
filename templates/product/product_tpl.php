<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<?php 

if($config['website']['watermark'] == true){
    $isWatermark = WATERMARK."/product/";
}else{
        $isWatermark = THUMBS."/";
    }
$thumbs_size="285x326x1";
?>

<div class="content-main">
    <?php if (!empty($product)) { ?>
        <div class="flex-cus row">
            <?php foreach ($product as $k => $v) { ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mg-cus mb-3">
                    <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/<?=$thumbs_size?>/assets/images/noimage.png';" data-src="<?= $isWatermark?><?=$thumbs_size?>/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            
                        </div>
                        <div class="info-pro">
                            <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                            <div class="price-product">
                                Giá:
                                <?php if ($v['discount']) { ?>
                                    <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                    <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                    
                                <?php } else { ?>
                                    <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</div>