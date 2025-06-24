<?php 
	include "config.php";

    /* Paginations */
    include LIBRARIES."class/class.PaginationsAjax.php";
    $pagingAjax = new PaginationsAjax();
    $pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
    $eShow = htmlspecialchars($_GET['eShow']);
    $id = (isset($_POST['id']) && $_POST['id'] > 0) ? htmlspecialchars($_POST['id']) : 0;
    $idlist = (isset($_POST['id']) && $_POST['idlist'] > 0) ? htmlspecialchars($_POST['idlist']) : 0;
    $option = (isset($_POST['option']) && $_POST['option'] != '') ? htmlspecialchars($_POST['option']) : '';
    $p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
    $start = ($p-1) * $pagingAjax->perpage;
    $pageLink = "api/load_api_product.php?perpage=".$pagingAjax->perpage;
    $tempLink = "";
    $where = "";
    $params = array();

    /* Math url */
    if($id)
    {
        $tempLink .= "&idCat=".$id;
        $where .= " and id_cat = ?";
        array_push($params, $id);
    }
    else
    {
        $tempLink .= "&idList=".$idList;
        $where .= " and id_list = ?";
        array_push($params, $idList);
    }
    
    $tempLink .= "&p=";
    $pageLink .= $tempLink;

    /* Get data */
     if($id > 0){
        $sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = 'san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
    }else{
        $sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, install, type from #_product where type = ? $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
    }
    $sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->get($sqlCache, $params, 'result', 7200);

    /* Count all data */
    $countItems = count($cache->get($sql, $params, 'result', 7200));

    /* Get page result */
    $pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);

        // $product = $cache->get("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = ? and id_cat = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham', $id), 'result', 7200);
    
        // $product = $cache->get("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, install, type from #_product where type = ? and id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham', $idlist), 'result', 7200);


?>
<?php if(count($countItems)) { ?>
    <div class="d-hiden">
        <div class="flex-cus row">
            <?php foreach($items as $k => $v) { if($k==8){break;}?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mg-cus mb-3">
                    <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/550x550x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/550x550x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
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
                </div>
            <?php  } ?>
        </div>
        <div class="pagination-ajax"><?=$pagingItems?></div>
    </div>
    
<?php }?>
