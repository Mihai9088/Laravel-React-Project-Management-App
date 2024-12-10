<?php

namespace App\Models;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function project ()
    {
        return $this->belongsTo(Project::class);
    }

    public function assiggnedUser ()
    {
        return $this->belongsTo(User::class, 'assigned_user');
    }

    public function createdBy ()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy ()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
