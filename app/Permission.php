<?php

namespace App;

use App\Traits\AppendPharmacy;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use AppendPharmacy;
}
