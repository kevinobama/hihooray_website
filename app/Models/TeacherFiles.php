<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherFiles extends Model
{
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'persistentId', 'inputBucket', 'inputKey', 'cmd', 'hash', 'itemsKey', 'pipeline', 'reqid', 'page_num', 'description', 'created_at', 'updated_at'];

    public function rules()
    {
        return [
            'inputKey' => 'required|mimes:ppt'
        ];
    }

}
