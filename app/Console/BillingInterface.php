<?php

namespace App\Contracts;

interface BillingInterface
{
    public function charge($amount);
}
