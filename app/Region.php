<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable =['name','avgAge','avgDailyIncomeInUSD','avgDailyIncomePopulation'];
}
