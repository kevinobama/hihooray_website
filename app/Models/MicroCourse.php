<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MicroCourse extends Model
{
    protected $table = 'micro_course';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'video_url', 'video_duration', 'gradename', 'price', 'publish', 'content'];

    /**
     * Get the name of the "created at" column.
     *
     * @return string
     */
    public function getCreatedAtColumn()
    {
        return 'create_time';
    }

    /**
     * Get the name of the "updated at" column.
     *
     * @return string
     */
    public function getUpdatedAtColumn()
    {
        return 'update_time';
    }
}
