<?php
require_once __DIR__.'/vendor/autoload.php';

$tracking = new FedEx\TrackService\Track('AcW4eRXGeIUhkrG6', 'k9R7YOiy7BiFRWFNUlcKZYl6y', '875836447', '111891120');

try {
	$arr = array('788465842276','789166522204');
	$shipment = $tracking->getByTrackingId($arr);
	header('Content-Type: application/json');
	echo json_encode($shipment);

} catch (Exception $e) {
	echo $e->getMessage();
}

?>
