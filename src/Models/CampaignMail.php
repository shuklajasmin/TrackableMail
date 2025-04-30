<?php

namespace Shuklajasmin\Track\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignMail extends Model
{
    protected $table = 'shukla_jasmin_campaign_mails';

    protected $fillable=['email','subject'];
}
