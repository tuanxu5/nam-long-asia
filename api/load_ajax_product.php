<?php
include "config.php";
$id = (isset($_POST['id']) && $_POST['id'] > 0) ? htmlspecialchars($_POST['id']) : 0;
$idlist = (isset($_POST['idlist']) && $_POST['idlist'] > 0) ? htmlspecialchars($_POST['idlist']) : 0;
?>
<div class="paging-product-category paging-product-category-<?= $idlist ?>" data-list="<?= $idlist ?>" data-cat="<?= $id ?>"></div>
<script type="text/javascript">
    $(document).ready(function() {
        var list = <?= $idlist ?>;
        var cat = <?= $id ?>;
        loadPaging("api/product.php?perpage=8&idlist=" + list + "&idcat=" + cat, '.paging-product-category-' + list);
    });
</script>