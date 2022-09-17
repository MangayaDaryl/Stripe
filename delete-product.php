<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIJPEdScbJy4tGrF6MjEY4xeZ69mJzNoqAWIRWEUsXbSG906quQgq07kswNKE5ZDbcGAkuek360PVMs5whjxKn00uXIf8VJy'
);
$result = $stripe->products->delete(
  'prod_MP7KMHqgalH5vP',
  []
);

var_dump($result);