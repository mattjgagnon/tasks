<?php

namespace Modules\Tags\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class TagRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
}
