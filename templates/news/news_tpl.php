<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="content-main">
    <?php if(isset($news) && count($news) > 0) { ?> 

            <div class="flex-news row ">
                <?php foreach($news as $k=>$v) { ?>
                    <div class="news w-clear col-sm-6 pb-4" data-aos="fade-up" data-aos-duration="1000">
                        <a class="pic-news scale-img text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                            <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/576x432x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/576x432x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                        </a>
                        <div class="info-news">
                            <h3>
                                <a class="name-news text-decoration-none text-split" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                            </h3>
                            <p class="time-news"><?=ngaydang?>: <?=date("d/m/Y h:i A",$v['date_created'])?></p>
                            <div class="desc-news text-split"><?=$v['desc'.$lang]?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

    <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>

