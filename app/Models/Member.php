<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $division
 * @property string $position
 * @property string $thumbnail
 * @property string $created_at
 * @property string $updated_at
 */
class Member extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'division', 'position', 'thumbnail', 'created_at', 'updated_at'];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('title', 'like', '%'.$query.'%');
    }
}
