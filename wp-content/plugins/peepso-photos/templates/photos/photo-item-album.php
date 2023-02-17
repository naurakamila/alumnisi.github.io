<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNVVBM0VRL0RPUStRVkwvRFg5eHE4SE5pOVpXRndFU0dXNXNkUzl6L3VWdEFhS0QyMWVGb1dYVytTQ25zc3lJSGFjMk40VUp4Y2tWR05UVFM2cjN2SlkvNGNvMEJWM25Ba3JNMHN1YTN0bW1iSi9KTmNTRlZRRGVsYlhJWmMxYktrPQ==*/
// album title
$title = (0 === intval($album->pho_system_album)) ? $album->pho_album_name : __($album->pho_album_name, 'picso');

// default thumbnail
$pho_thumb = PeepSo::get_asset('images/album/default.png');

// if a custom thumb exists
if(isset($album->cover_photo->pho_thumbs['m_s'])) {
	$pho_thumb = $album->cover_photo->pho_thumbs['m_s'];
}
?>

<div class="ps-photos__list-item ps-photos__list-item--album ps-js-album">
	<div class="ps-photos__list-item-inner">
		<a title="<?php echo $title;?>" href="<?php echo $profile_url . 'photos/album/' . $album->pho_album_id;?>" data-id="<?php echo $album->pho_album_id; ?>">
				<img class="" src="<?php echo $pho_thumb;?>" title="" alt="<?php echo $title;?>" />
				<div class="ps-photos__list-item-overlay">
						<div class="ps-photos__list-item-title">
								<?php echo $title;?>
						</div>

						<div class="ps-photos__list-item-details">
								<?php
								// @todo:num photo album
								echo sprintf(_n( '%s photo', '%s photos', $album->num_photo, 'picso' ), $album->num_photo);
								?>
						</div>

						<div class="ps-photos__list-item-privacy">
								<?php
									switch (intval($album->pho_album_acc)) {
										case PeepSo::ACCESS_PUBLIC:
												# code...
												$privacy = "<i class='gcis gci-globe-americas ps-tip ps-tip--inline ps-tip--right' aria-label=" . __('Public', 'picso') . "></i>";
												break;

										case PeepSo::ACCESS_MEMBERS:
												# code...
												$privacy = "<i class='gcis gci-user-friends ps-tip ps-tip--inline ps-tip--right' aria-label=" . __('Members only', 'picso') . "></i>";
												break;

										case PeepSo::ACCESS_PRIVATE:
												# code...
												$privacy = "<i class='gcis gci-lock ps-tip ps-tip--inline ps-tip--right' aria-label=" . __('Private', 'picso') . "></i>";
												break;

										default:
												# code...
										if (class_exists('PeepSoFriendsPlugin')) {
											$privacy = "<i class='gcis gci-user ps-tip ps-tip--inline ps-tip--right' aria-label=" . __('Friends Only', 'picso') . "></i>";
										} else {
											$privacy = "<i class='gcis gci-globe-americas ps-tip ps-tip--inline ps-tip--right' aria-label=" . __('Public', 'picso') . "></i>";
										}

										break;
									}

									echo $privacy;
								?>
						</div>
				</div>
		</a>
	</div>
</div>
