
<div class="w-sanpham">
    <div class="wrap-content padding-top-bottom">
        <div class="title-main">
            <span>Sản phẩm nổi bật</span>
        </div>
        <div class="d-flex justify-content-between ">
            <div class="sp-left">    
                <?php include TEMPLATE.LAYOUT."danhmucsp.php";?>
            </div>
            <div class="sp-right ">
                <?php if(count($pronb1)){?>
                    <div class="row flex-cus">
                        <?php foreach($pronb1 as $k => $v){?>
                            <div class="col-6  col-sm-4 mb-3 mg-cus">
                                <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="pic-product">
                                        <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x325x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/285x325x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
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
                        <?php }?>
                    </div>
                <?php }?>
                <?php if(count($pronb1) == 6 ){?>
                    <div class="add-sanpham">
                        <a class="text-decoration-none hover_xemthem" href="san-pham" title="Sản Phẩm">Xem tất cả</a>
                    </div> 
                <?php }?>
            </div>
        </div>
    </div>
</div>


<?php if (count($splistnb)) {foreach ($splistnb as $vlist) {
$spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id']));
?>
<div class="wrap-product wrap-content padding-top-bottom">
<h2 class="title-main" data-aos="fade-up" data-aos-delay="300"><span><?= $vlist['name' . $lang] ?></span></h2>
<div class="cap2 d-catnb d-flex flex-wrap justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
<a class="clicksp active text-decoration-none" data-list="<?= $vlist['id'] ?>" data-cat="0">Tất cả</a>
<?php if (count($spcat)) {
 foreach ($spcat as $v) { ?>
<a class="clicksp text-decoration-none" data-list="<?= $vlist['id'] ?>" data-cat="<?= $v['id'] ?>"><?= $v['name' . $lang] ?></a>
<?php }
} ?>
 </div>
<div class="paging-product-category1 paging-product-category1-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>">
</div>
</div>
<?php }} ?>

<?php if (count($dichvunb )) { ?>
    <div class="dichvu-wrapper">
        <div class="wrap-content">
            <p class="title-main"><span>Dịch vụ của chúng tôi</span></p>
            <div class="owl-page owl-carousel owl-theme" 
            data-xsm-items="1:10" 
            data-sm-items="2:10" 
            data-md-items="3:10" 
            data-lg-items="3:10" 
            data-xlg-items="3:20" 
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
            <?php foreach ($dichvunb  as $k => $v) { ?>
                <div class="dichvu-item">
                    <div class="dichvu-img">
                       <img src="assets/images/mask.png" alt="mask">
                        <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/388x285x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/388x285x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                        </a>  
                    </div>
                    <div class="dichvu-info">
                        <h3 class="mb-0">
                            <a class="dichvu-name text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </h3>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
   <?php if (count($visaonb)) { ?>
        <div class="visao-wrapper">
            <div class="wrap-content">
                <p class="title-main"><span>Vì sao chọn chúng tôi</span></p>
                <div class="owl-page owl-carousel owl-theme" 
                data-xsm-items="1:10" 
                data-sm-items="2:10" 
                data-md-items="3:10" 
                data-lg-items="3:10" 
                data-xlg-items="4:18" 
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
                <?php foreach ($visaonb as $k => $v) { ?>
                    <div class="visao-item">
                        <div class="visao-img">
                            <a class="" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="" onerror="this.src='<?=THUMBS?>/78x82x3/assets/images/noimage.png';" src="<?=THUMBS?>/78x82x3/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>   
                            </a>
                        </div>
                        <div class="visao-info">
                            <h3 class="mb-0">
                                <a class="visao-name text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="visao-desc text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
   <?php if (count($newsnb)) { ?>
        <div class="tintuc-wrapper">
            <div class="wrap-content">
                <p class="title-main"><span>Tin Tức sự kiện</span></p>
                <div class="owl-page owl-carousel owl-theme" 
                data-xsm-items="1:10" 
                data-sm-items="2:10" 
                data-md-items="3:10" 
                data-lg-items="3:10" 
                data-xlg-items="3:20" 
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
                <?php foreach ($newsnb as $k => $v) { ?>
                    <div class="tintuc-item">
                        <div class="tintuc-img">
                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/387x388x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/387x388x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                                 <div class="info-nleft">
                                    <p class="time-newshome-day">
                                    <?=date("M",$v['date_created'])?>  
                                    </p>
                                    <p class="time-newshome-month">
                                    <?=date("d",$v['date_created'])?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="tintuc-info">
                            <h3 class="mb-0">
                                <a class="tintuc-name text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="tintuc-desc text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>