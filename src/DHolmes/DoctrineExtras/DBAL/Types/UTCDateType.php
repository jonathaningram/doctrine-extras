<?php

namespace DHolmes\DoctrineExtras\DBAL\Types\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;

class UTCDateType extends AbstractUTCDateType
{
    /**
     * @param AbstractPlatform $platform
     * @return string
     */
    protected function getPlatformFormatString(AbstractPlatform $platform)
    {
        return $platform->getDateFormatString();
    }
}