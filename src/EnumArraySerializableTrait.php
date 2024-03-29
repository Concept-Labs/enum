<?php
namespace Cl\Enum;

/**
 * Enum ArraySerializable Trait
 */
trait EnumArraySerializableTrait
{
    use EnumNamesTrait;
    use EnumValuesTrait;
    use EnumFromNameTrait;
    
    /**
     * Name => value array
     *
     * @return array
     */
    public static function array(): array
    {
        return array_combine(static::names(), static::values());
    }
}