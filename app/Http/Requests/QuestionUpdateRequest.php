<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'question' => 'required|min:3',
            'image' => 'image|nullable|max:1024|mimes:jpg,png,jpeg',
            'answer1' => 'required|min:1',
            'answer2' => 'required|min:1',
            'answer3' => 'required|min:1',
            'answer4' => 'required|min:1',
            'correct_answer' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'question' => 'Question',
            'image' => 'Question image',
            'answer1' => 'I. answer',
            'answer2' => 'II. answer',
            'answer3' => 'III. answer',
            'answer4' => 'IV. answer',
            'correct_answer' => 'True answer'
        ];
    }
}
