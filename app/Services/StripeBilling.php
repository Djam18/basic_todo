<?php

namespace App\Services;

use App\Contracts\BillingInterface;

class StripeBilling implements BillingInterface
{
    public function charge($amount)
    {
        return "Chargement de {$amount} FCFA via Stripe.";
    }
}

