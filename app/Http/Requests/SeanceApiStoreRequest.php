<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeanceApiStoreRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_start' => ['required', 'exists:seances,date_start'],
            'time_start' => ['required', 'exists:seances,time_start'],
            'ticket' => ['required', 'exists:tickets,ticket', 'integer'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'date_start' => $this->date,
            'time_start' => $this->time,
        ]);
    }
}
