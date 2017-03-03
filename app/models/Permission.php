<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;

/**
 *  "The permission display_name allows a user to description."
 */
class Permission extends EntrustPermission {

    use EntrustPermissionTrait;
}
