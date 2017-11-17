PHP FedEX Tracking API Wrapper
==============================

<a name="track-class"></a>
## Track Class

The Track Class allows you to track a shipment using the FedEx Tracking API by simply providing a Tracking # or Order Tag number.

<a name="tracking-class-example"></a>
### Example

```php
$tracking = new FedEx\TrackService\Track($accessKey, $password, $acctNum, $meterNum);

try {
  $shipment = $tracking->getByTrackingId('TRACKING NUMBER');
  header('Content-Type: application/json');
  echo json_encode($shipment);
} catch (Exception $e) {
  echo $e->getMessage();
}
```
