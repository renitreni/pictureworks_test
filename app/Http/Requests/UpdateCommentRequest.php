<?php

namespace App\Http\Requests;

use App\Rules\PasswordMatched;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "id" => "required|exists:users",
            "password" => ["required", new PasswordMatched()],
            "comment" => "required",
        ];
    }
}
