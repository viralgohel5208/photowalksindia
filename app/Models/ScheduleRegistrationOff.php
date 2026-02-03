<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ScheduleRegistrationOff extends Model{
    protected $table = 'schedule_register_off_data';

    public function city() {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function scheduleName() {
        return $this->hasOne(Schedule::class, 'id', 'schedule_id');
    }
}
