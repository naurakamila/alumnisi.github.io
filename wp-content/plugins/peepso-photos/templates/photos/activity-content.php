<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmlra3ltVW5XVENzTnlYSDBMb3pOcjVIM0h3MENtVmlPbFNsMGRuL0kzWUZWYnZ2ZmlhcDhUQlRDc1Z4QndUdjBuakJQTGJhOFo5d0NUaENnTnJNQTFrVlpYaE13K3BLaEJrWm9laVBFQkJkRXN4MDFZWmVPWDc1Ym45ZHhoZTNZPQ==*/

$PeepSoPhotos = PeepSoPhotos::get_instance();
$max_photos = isset($max_photos) ? $max_photos : 5;
$count_photos = isset($count_photos) ? $count_photos : $max_photos;

$has_extra_photos = FALSE;
if ($count_photos > $max_photos) {
	$has_extra_photos = TRUE;
}

?>
<div class="ps-post__attachment cstream-attachment photo-attachment">
	<div class="ps-post__gallery ps-media-photos ps-media-grid <?php echo $count_photos > 1 ? '' : 'ps-post__gallery--single ps-media-grid--single' ?> ps-clearfix"
			data-ps-grid="photos">
		<?php

		$counter = 0;
		foreach ($photos as $photo) {
			if ($counter >= $max_photos) break;
			$counter++;

			if (TRUE === $has_extra_photos && $counter == $max_photos) {
				$photo->has_extra_photos = $count_photos - $max_photos +1;
			}

			$PeepSoPhotos->show_photo($photo);
		}

		?>
		<div class="ps-post__gallery-loading ps-media-loading ps-js-loading">
			<div class="ps-spinner">
				<div class="ps-spinner-bounce1"></div>
				<div class="ps-spinner-bounce2"></div>
				<div class="ps-spinner-bounce3"></div>
			</div>
		</div>
	</div>
</div>
