<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriberEmail extends Model{
    use SoftDeletes;
    protected $table                = 'subscriber_email';
}
