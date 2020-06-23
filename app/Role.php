<?php

namespace App;

use App\Traits\AppendPharmacy;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use AppendPharmacy;
}
