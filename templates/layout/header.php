<div class="header">
	
		<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<div class="header-left">
				<a class="logo-header peShiner" href="">
					<img class="" onerror="this.src='assets/images/noimage.png';" src="<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo" title="logo"/>
				</a>
			</div>
			<div class="header-right">
				<div class="header1 d-flex justify-content-between">

				 	<a class="logo-mobile" href="">
		                <img class="lazy" onerror="this.src='assets/images/noimage.png';" data-src="<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo" title="logo"/>
		        	</a>
        
					<div class="hotline-header1">
						<span class="title-hotline">Hotline liên hệ:</span>
						<div class="box-hotline d-flex justify-content-start align-items-center">
							<p class="number-hotline"><?=$func->formatPhone($optsetting['hotline'])?></p> -
							<p class="number-hotline"><?=$func->formatPhone($optsetting['phone'])?></p> - 
							<p class="number-hotline"><?=$func->formatPhone($optsetting['hotline1'])?></p>
						</div>
					</div>
					<div class="email-header">
						<span class="title-hotline">Email liên hệ:</span>
						<p class="number-hotline"><?=$optsetting['email']?></p>
							
					</div>
				    <div class="timkiem-google-translate">
                        <div id="google_language_translator"></div>
                    </div>
				</div>
				<?php include TEMPLATE.LAYOUT."menu.php";?>
			</div>
		</div>
	</div>
</div>