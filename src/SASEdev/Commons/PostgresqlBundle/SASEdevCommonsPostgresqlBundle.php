<?php

namespace SASEdev\Commons\PostgresqlBundle;

use Doctrine\DBAL\Types\Type;
use SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreType;
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
        Type::addType(HstoreType::HSTORE, 'SASEdev\Doctrine\DBAL\Pgsql\Types\HstoreType');
    }
}
