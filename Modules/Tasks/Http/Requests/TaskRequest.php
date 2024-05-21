<?php

namespace Modules\Tasks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|max:50',
            'priority' => 'required|string|max:50',
            'assigned_user_id' => 'nullable|exists:users,id',
            'reporter_user_id' => 'required|exists:users,id',
            'due_date' => 'nullable|date',
        ];
    }
}
