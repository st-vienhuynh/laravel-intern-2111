<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task';
    protected $fillable = [
        'title', 'description', 'type', 'status', 'start_date', 'due_date', 'assignee', 'estimate', 'actual'
    ];

    public $timestamps = true;

    /**
     *Convert number to string in column status.
     *
     * @param  string  $value
     * @return string
     */
    public function getStatusAttribute($value)
    {
        return [
            '1' => 'open',
            '2' => 'In progress',
            '3' => 'Resolved',
            '4' => 'Pending',
            '5' => 'Verified',
            '6' => 'Closed',
        ][$value];
    }

    /**
     *Convert number to string in column type.
     *
     * @param  string  $value
     * @return string
     */
    public function getTypeAttribute($value)
    {
        return [
            '1' => 'Story',
            '2' => 'Task',
            '3' => 'Bug'
        ][$value];
    }

    /**
     * Convert string to number in column status.
     *
     * @param  string  $value
     * @return void
     */
    public function setStatusAttribute($value)
    {
        $status = [
            '1' => 'open',
            '2' => 'In progress',
            '3' => 'Resolved',
            '4' => 'Pending',
            '5' => 'Verified',
            '6' => 'Closed',
        ];
        foreach ($status as $k => $v) {
            if ($v == $value) {
                $this->attributes['status'] =  $k;
            }
        }
    }

    /**
     * Convert string to number in column type.
     *
     * @param  string  $value
     * @return void
     */
    public function setTypeAttribute($value)
    {
        $type = [
            '1' => 'story',
            '2' => 'Task',
            '3' => 'Bug'
        ];
        foreach ($type as $k => $v) {
            if ($v == $value) {
                $this->attributes['type'] =  $k;
            }
        }
    }
}
