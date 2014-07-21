<?php

namespace SASEdev\Commons\PostgresqlBundle;

use Doctrine\DBAL\Types\Type;
use SASEdev\Doctrine\DBAL\Pgsql\Types\BigFloatArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\BigFloatType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\BigIntArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\BooleanArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\BoxType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\DateIntervalType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\FloatArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\IntegerArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\SmallIntArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\TextArrayType;
use SASEdev\Doctrine\DBAL\Pgsql\Types\TimeTzType;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 *
 * @author sasedev <sasedev.bifidis@gmail.com>
 *
 */
class SASEdevCommonsPostgresqlBundle extends Bundle
{
    public function __construct()
    {
        Type::addType(BigFloatType::BIGFLOAT, 'SASEdev\Doctrine\DBAL\Pgsql\Types\BigFloatType');
        Type::addType(BigFloatArrayType::BIGFLOATARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\BigFloatArrayType');
        Type::addType(BigIntArrayType::BIGINTARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\BigIntArrayType');
        Type::addType(BooleanArrayType::BOOLEANARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\BooleanArrayType');
        Type::addType(BoxType::BOX, 'SASEdev\Doctrine\DBAL\Pgsql\Types\BoxType');
        Type::addType(DateIntervalType::DATEINTERVAL, 'SASEdev\Doctrine\DBAL\Pgsql\Types\DateIntervalType');
        Type::addType(FloatArrayType::FLOATARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\FloatArrayType');
        Type::addType(HstoreType::HSTORE, 'SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreType');
        Type::addType(HstoreArrayType::HSTOREARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreArrayType');
        Type::addType(IntegerArrayType::INTEGERARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\IntegerArrayType');
        Type::addType(SmallIntArrayType::SMALLINTARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\SmallIntArrayType');
        Type::addType(TextArrayType::TEXTARRAY, 'SASEdev\Doctrine\DBAL\Pgsql\Types\TextArrayType');
        Type::addType(TimeTzType::TIME_TZ, 'SASEdev\Doctrine\DBAL\Pgsql\Types\TimeTzType');
    }
}
