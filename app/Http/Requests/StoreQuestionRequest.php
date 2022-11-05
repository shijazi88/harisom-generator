<?php

namespace App\Http\Requests;

use App\Models\Question;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('question_create');
    }

    public function rules()
    {
        return [
            'package_id' => [
                'required',
                'integer',
            ],
            'question_ar' => [
                'required',
            ],
            'price' => [
                'numeric',
                'required',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
