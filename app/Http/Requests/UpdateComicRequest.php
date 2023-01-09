<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('comics')->ignore($this->comic->id),
                'min:5',
                'max:150',
            ],
            'description' => 'required|min:15|max:1500',
            'thumb' => 'required|max:250',
            'price' => 'required|max:6|decimal:2',
            'series' => 'required|min:5|max:150',
            'sale_date' => 'required|min:8|max:20',
            'type' => 'required|min:5|max:150',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Non puoi cancellare questo campo, il titolo e` richiesto',
            'title.min' => 'il titolo deve contenere almeno :min caratteri',
            'title.max' => 'il titolo puo` contenere massimo :max caratteri',
            'description.required' => 'Non puoi cancellare questo campo, la descrizione e` richiesta',
            'description.min' => 'la descrizione deve contenere almeno :min caratteri',
            'description.max' => 'la descrizione puo` contenere massimo :max caratteri',
            'thumb.required' => 'Non puoi cancellare questo campo, la thumb e` richiesta',
            'thumb.max' => 'la thumb puo` contenere massimo :max caratteri',
            'price.required' => 'Non puoi cancellare questo campo, il prezzo e` richiesto',
            'price.max' => 'il prezzo puo` contenere massimo :max caratteri',
            'price.decimal' => 'il prezzo deve essere un numero decimale con massimo 2 cifre dopo la virgola',
            'series.required' => 'Non puoi cancellare questo campo, la serie e` richiesta',
            'series.min' => 'la serie deve contenere almeno :min caratteri',
            'series.max' => 'la serie puo` contenere massimo :max caratteri',
            'sales_date.required' => 'Non puoi cancellare questo campo, la data e` richiesta',
            'sales_date.min' => 'la data deve contenere almeno :min caratteri',
            'sales_date.max' => 'la data puo` contenere massimo :max caratteri',
            'type.required' => 'Non puoi cancellare questo campo, il tipo e` richiesto',
            'type.min' => 'il tipo deve contenere almeno :min caratteri',
            'type.max' => 'il tipo puo` contenere massimo :max caratteri',
        ];
    }
}
