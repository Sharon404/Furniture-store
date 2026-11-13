<?php

if (! function_exists('format_currency')) {
    /**
     * Format a numeric value as Kenyan shillings.
     */
    function format_currency(float|int|string|null $amount, string $currency = 'KSh', int $decimals = 0): string
    {
        if ($amount === null || $amount === '') {
            $amount = 0;
        }

        $amount = (float) $amount;

        return sprintf('%s %s', $currency, number_format($amount, $decimals, '.', ','));
    }
}

if (! function_exists('ksh')) {
    /**
     * Convenience helper for all KSh formatting.
     */
    function ksh(float|int|string|null $amount, int $decimals = 0): string
    {
        return format_currency($amount, 'KSh', $decimals);
    }
}
