<?php

namespace App\Traits;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    /**
     * Log an activity
     * 
     * @param string $action
     * @param string $description
     * @param mixed $model
     * @param array $properties
     * @return ActivityLog
     */
    protected function logActivity($action, $description, $model = null, $properties = [])
    {
        $data = [
            'user_id' => Auth::id(),
            'action' => $action,
            'description' => $description,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'properties' => $properties,
        ];

        if ($model) {
            $data['model_type'] = get_class($model);
            $data['model_id'] = $model->id ?? null;
        }

        return ActivityLog::create($data);
    }

    /**
     * Log a login activity
     */
    protected function logLogin($user)
    {
        ActivityLog::create([
            'user_id' => $user->id,
            'action' => 'login',
            'description' => "User {$user->name} logged in",
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    /**
     * Log a logout activity
     */
    protected function logLogout()
    {
        if (Auth::check()) {
            $user = Auth::user();
            ActivityLog::create([
                'user_id' => $user->id,
                'action' => 'logout',
                'description' => "User {$user->name} logged out",
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }
    }

    /**
     * Log a create activity
     */
    protected function logCreate($model, $description = null)
    {
        $modelName = class_basename($model);
        $desc = $description ?? "Created {$modelName} record";
        
        return $this->logActivity('create', $desc, $model, [
            'model_name' => $modelName,
            'model_data' => $model->toArray(),
        ]);
    }

    /**
     * Log an update activity
     */
    protected function logUpdate($model, $description = null, $changes = [])
    {
        $modelName = class_basename($model);
        $desc = $description ?? "Updated {$modelName} record";
        
        return $this->logActivity('update', $desc, $model, [
            'model_name' => $modelName,
            'changes' => $changes,
        ]);
    }

    /**
     * Log a delete activity
     */
    protected function logDelete($model, $description = null)
    {
        $modelName = class_basename($model);
        $desc = $description ?? "Deleted {$modelName} record";
        
        return $this->logActivity('delete', $desc, $model, [
            'model_name' => $modelName,
            'model_data' => $model->toArray(),
        ]);
    }

    /**
     * Log a view activity
     */
    protected function logView($model, $description = null)
    {
        $modelName = class_basename($model);
        $desc = $description ?? "Viewed {$modelName} record";
        
        return $this->logActivity('view', $desc, $model, [
            'model_name' => $modelName,
        ]);
    }
}
