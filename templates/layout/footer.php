<div class="footer">
    <div class="footer-article">
        <div class="flex-wrap wrap-content d-flex align-items-start justify-content-between">
            <div class="footer-news">
                <p class="name-company-footer"><?=$footer['name'.$lang]?></p>
                <div class="footer-info"><?=htmlspecialchars_decode($footer['content'.$lang])?></div>
                <?php if(count($social)) { ?>
                    <div class="social social-footer d-flex align-items-center">
                        <p class="mxh">Liên kết mạng xã hội: </p>
                        <?php foreach($social as $k => $v) { ?>
                            <a href="<?=$v['link']?>" target="_blank" class="mr-2 text-decoration-none">
                                <img class="lazy" data-src="<?=THUMBS?>/44x45x3/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>" >
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="footer-news">
                <p class="footer-title">chính sách <span>& hỗ trợ</span></p>
                <ul class="footer-ul">

                    <?php foreach($policy as $v) { ?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title">Fanpage <span>facebook</span></p>
                <?=$addons->set('fanpage-facebook', 'fanpage-facebook', 2);?>
            </div>
        </div>
    </div>
    

    <div class="footer-powered">
        <div class="flex-wrap wrap-content d-flex align-items-center justify-content-center">
            <div class="copyright">  Copyright © 2023 <?=$copyright['name'.$lang]?>. Designed by Nina</div>
           
        </div>
    </div>
    <?=$addons->set('footer-map', 'footer-map', 6);?>
    <?=$addons->set('messages-facebook', 'messages-facebook', 2);?>
</div>


<div class="btn-zalo btn-frame text-decoration-none" >
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
    <p>
        <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
        <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['phone']);?>"><?=$func->formatPhone($optsetting['phone'])?></a>
        <a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['hotline1']);?>"><?=$func->formatPhone($optsetting['hotline1'])?></a>
    </p>
</div>
<div class="btn-phone btn-frame text-decoration-none" >
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
    <p>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['phone']);?>"><?=$func->formatPhone($optsetting['phone'])?></a>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline1']);?>"><?=$func->formatPhone($optsetting['hotline1'])?></a>
    </p>
</div>
