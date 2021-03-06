<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util;

class PermissionDefaults extends Model
{
	protected $table = "permissions_default";
	protected $fillable = ["permission", "value_default", "value_assigned"];
	public $timestamps = false;
	public $incrementing = false;

	public static function find( $permission )
	{
		foreach ( self::get() as $perm )
			if ( preg_match( Util::prepareExpression( $perm->permission ), $permission ) )
				return $perm;
	}
}
