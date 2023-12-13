<?php

use App\Enums\SuporteStatus;

if (!function_exists('getStatusSuporte')) {
    function getStatusSuporte(string $status): string
    {
        return SuporteStatus::fromValue($status);
    }
}

if (!function_exists('getInitials')) {
    function getInitials($name)
    {
        $words = explode(' ', $name); // Split the name into an array of words
        $initials = '';

        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1)); // Append the first character of each word
            if (strlen($initials) >= 2) {
                break; // Stop appending initials once we reach the limit
            }
        }

        return $initials;
    }
}