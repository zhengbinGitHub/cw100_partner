<?php
/**
 * Created by PhpStorm.
 * User: maczheng
 * Date: 2020-11-05
 * Time: 22:26
 */

namespace CwApp\Models;

use Illuminate\Database\Eloquent\Model;

class OauthClient extends Model
{
    protected $table = 'oauth_clients';

    protected $guarded = [];
}