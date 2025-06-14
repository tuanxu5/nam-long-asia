<?php if(!empty($popup)) { ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?=$popup['name'.$lang]?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="<?=$popup['link']?>">
						<img class="lazy w-100 " onerror="this.src='<?=THUMBS?>/800x530x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/800x530x1/<?=UPLOAD_PHOTO_L.$popup['photo']?>" alt="Popup" title="Popup"/>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup-lienhe" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?=$popup['name'.$lang]?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
<!-- Modal quickview -->
<div class="modal popup-custom fade" id="popup-quickview" tabindex="-1" role="dialog" aria-labelledby="popup-quickview-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<!-- Modal cart -->
<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-cart-label"><?=giohangcuaban?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<?php /*
<!-- Modal prototype -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">
	Open Modal
</button>
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
*/ ?>