<?php
namespace JCS\Country;

class Country
{
    public static function all()
    {
        return collect(json_decode(file_get_contents(__DIR__ . '/countries.json'), true));
    }

    public static function getByCode(string $code)
    {
        return self::all()->firstWhere('code', strtoupper($code));
    }

    public static function getByName(string $name)
    {
        return self::all()->firstWhere('name', $name);
    }
}
