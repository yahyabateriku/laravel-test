<?php

declare(strict_types=1);

namespace App\Interfaces;

interface SmsInterface
{
    public function apiKey(): string;
    public function send($phoneNumber, $message): string;
}
