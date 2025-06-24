<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>

      
        <div class="search-res">
            <p class="icon-search transition"><i class="bi bi-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword-res');" value="<?php if( !empty($_GET['keyword-res']) ) {echo $_GET['keyword-res'];}?>" />
                <p onclick="onSearch('keyword-res');"><i class="bi bi-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="" title="<?=trangchu?>"><?=trangchu?></a></li>
            <li><a href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li>
                <a href="san-pham" title="<?=sanpham?>"><?=sanpham?></a>
                <?php if(count($splist)) { ?>
                    <ul>
                        <?php foreach($splist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?=$vlist['name'.$lang]?>" href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                                <?php if(!empty($spcat)) { ?>
                                    <ul>
                                        <?php foreach($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                                            <li>
                                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>" href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        
            <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a>
                 <?php if(count($dvlist)) { ?>
                    <ul>
                        <?php foreach($dvlist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?=$vlist['name'.$lang]?>" href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                                <?php if(!empty($spcat)) { ?>
                                    <ul>
                                        <?php foreach($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                                            <li>
                                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>" href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a href="du-an" title="Dự án">Dự án</a></li>
            <li><a href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a></li>
            <li><a href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
        </ul>
    </nav>
</div>