<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    protected $fillable = [
        'cake_name',
        'cake_type',
        'cake_flavour',
        'cake_price',
        'cake_description',
        'cake_size',
        'image_path'
    ];
 
    // Constants for cake types
    const TYPE_WEDDING = 'Wedding Cakes';
    const TYPE_BIRTHDAY = 'Birthday Cakes';
    const TYPE_BROWNIES = 'Brownies';
    const TYPE_CUPCAKES = 'Cup Cakes';

    // Constants for cake flavours
    const FLAVOUR_CHOCOLATE = 'Chocolate';
    const FLAVOUR_VANILLA = 'Vanilla';
    const FLAVOUR_FRUIT = 'Fruit';
    const FLAVOUR_RED_VELVET = 'Red Velvet';

    // Constants for cake sizes
    const SIZE_SMALL = 'Small';
    const SIZE_MEDIUM = 'Medium';
    const SIZE_LARGE = 'Large';

    // Get all cake types
    public static function getCakeTypes()
    {
        return [
            self::TYPE_WEDDING,
            self::TYPE_BIRTHDAY,
            self::TYPE_BROWNIES,
            self::TYPE_CUPCAKES,
        ];
    }

    // Get all cake flavours
    public static function getCakeFlavours()
    {
        return [
            self::FLAVOUR_CHOCOLATE,
            self::FLAVOUR_VANILLA,
            self::FLAVOUR_FRUIT,
            self::FLAVOUR_RED_VELVET,
        ];
    }

    // Get all cake sizes
    public static function getCakeSizes()
    {
        return [
            self::SIZE_SMALL,
            self::SIZE_MEDIUM,
            self::SIZE_LARGE,
        ];
    }
}