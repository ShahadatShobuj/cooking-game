<?php

namespace App\Http\Requests\WoodChop\WC2A;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id_ing = is_null($this->route('ingredient')) ? null : $this->route('ingredient')->id_ing;
        return [
            'ing' => ['required', 'string', 'unique:2A_ingredients,ing,' . $id_ing . ',id_ing'],
            'ing_priority' => ['required', 'numeric'],
            'ing_score' => ['required', 'numeric'],
        ];
    }
}
