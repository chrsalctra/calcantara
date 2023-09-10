<?php

composer require stripe/stripe-php

\Stripe\Stripe::setApiKey("sk_live_2a2xKLY0ICCQnprIoxUyPziz007B2kCdNp");
\Stripe\ApplePayDomain::create([
  'domain_name' => 'calcantara.me'
]);


// Set your secret key: remember to switch to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey('sk_test_OEAdCO9ywdVhXXVcWkqXL8bo003PVCvvT1');
$customer = \Stripe\Customer::create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);
echo $customer;
$intent = \Stripe\PaymentIntent::create([
    'amount' => 1,
    'currency' => 'usd',
]);
?>
