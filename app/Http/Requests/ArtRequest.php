<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtRequest extends FormRequest
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
            'title'=>"required|string|max:255",
            'style'=>"required|string|max:255",
            'min_est_price'=>"required|numeric",
            'max_est_price'=>"required|numeric",
            'buyout_price'=>"required|numeric",
            'width'=>"required|numeric",
            'height'=>"required|numeric",
            'depth'=>"numeric",
            'year'=>"required|numeric",
            'description'=>"required|string",
            'condition'=>"required|string",
            'origin'=>"required|string",
            'image'=>"required|image",
            'signature_image'=>"required|image",
            'optional_image'=>"image",
            'end_date'=>"required|date|after:today",
            //
        ];
    }
}
