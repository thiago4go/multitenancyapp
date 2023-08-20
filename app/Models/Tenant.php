<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $dispatchesEvents = [
        'created' => \Tenancy\Tenant\Events\Created::class,
        'updated' => \Tenancy\Tenant\Events\Updated::class,
        'deleted' => \Tenancy\Tenant\Events\Deleted::class,
    ];
}
