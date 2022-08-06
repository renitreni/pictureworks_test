<?php

namespace App\Http\Requests;

use App\Rules\PasswordMatched;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validate request params.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id" => "required|exists:users",
            "password" => ["required", new PasswordMatched()],
            "comment" => "required",
        ];
    }
}
