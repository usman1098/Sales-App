<?php
if (!function_exists('generate_uuid_key')) {
    function generate_uuid_key()
    {
        $contractId = strtotime(date('Y-m-d H:i:s')) . '-' . Str::random(4) . '-' . Str::random(6) . '-' . Str::random(8) . '-' . Str::random(10) . '-' . Str::random(12);
        return $contractId;
    }
}