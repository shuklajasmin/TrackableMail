<?php

namespace Shuklajasmin\Track\Models;

use Illuminate\Database\Eloquent\Model;

class EmailOpen extends Model
{
    protected $table = 'shukla_jasmin_email_opens';

    protected $fillable=['opened_at','campaign_id'];
}
