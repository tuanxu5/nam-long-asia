
 <div class="dmuc">
    <a class="tdmuc" href="javascript:voi();">Danh mục sản phẩm </a>
    <div class="dmuc1 <?php if($source=='index') { ?>dmuc10 active<?php } ?>">
        <div class="dmuc2">
            <?php if(count($splistdm)) { ?>
                <ul class="ulchay">
                    <?php foreach($splistdm as $klist => $vlist) { 
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id']));
                    ?>
                        <li class="<?php if(count($splistdm)>0) echo 'dmsp';?>">
                            <a class="" title="<?=$vlist['name'.$lang]?>" href="<?=$vlist[$sluglang]?>">

                                <?=$vlist['name'.$lang]?>
                                <?php if(!empty($spcat)) { ?>
                                    <span class="has-child"><i class="bi bi-chevron-right"></i></span>
                                <?php } ?>
                            </a>
                            <?php if(!empty($spcat)) { ?>
                                <ul>
                                    <?php foreach($spcat as $kcat => $vcat) { ?>
                                        <li>
                                            <a class="transition" title="<?=$vcat['name'.$lang]?>" href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>                   
        </div> 
    </div>
</div>