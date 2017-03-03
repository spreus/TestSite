<?php

namespace App;

use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustRoleTrait;

class Role extends EntrustRole {

    use EntrustRoleTrait;

    protected static $adminRole;

    /**
     * @return static
     */
    public static function getAdminRole() {
        if (self::$adminRole == null) {
            self::$adminRole = self::whereName('admin')->get()->first();
        }
        return self::$adminRole;
    }

}
