<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|unique:comics,title|min:5|max:150',
            'description' => 'required|min:15|max:1500',
            'thumb' => 'required|max:250',
            'price' => 'required|decimal:2|max:6',
            'series' => 'required|min:5|max:150',
            'sale_date' => 'required|min:8|max:20',
            'type' => 'required|min:5|max:150',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'il titolo e` richiesto',
            'title.unique' => 'il titolo deve essere univoco',
            'title.min' => 'il titolo deve contenere almeno :min caratteri',
            'title.max' => 'il titolo puo` contenere massimo :max caratteri',
            'description.required' => 'la descrizione e` richiesta',
            'description.min' => 'la descrizione deve contenere almeno :min caratteri',
            'description.max' => 'la descrizione puo` contenere massimo :max caratteri',
            'thumb.required' => 'la thumb e` richiesta',
            'thumb.max' => 'la thumb puo` contenere massimo :max caratteri',
            'price.required' => 'il prezzo e` richiesto',
            'price.max' => 'il prezzo puo` contenere massimo :max caratteri',
            'price.decimal' => 'il prezzo deve essere un numero decimale con massimo 2 cifre dopo la virgola',
            'series.required' => 'la serie e` richiesta',
            'series.min' => 'la serie deve contenere almeno :min caratteri',
            'series.max' => 'la serie puo` contenere massimo :max caratteri',
            'sale_date.required' => 'la data e` richiesta',
            'sale_date.min' => 'la data deve contenere almeno :min caratteri',
            'sale_date.max' => 'la data puo` contenere massimo :max caratteri',
            'type.required' => 'il tipo e` richiesto',
            'type.min' => 'il tipo deve contenere almeno :min caratteri',
            'type.max' => 'il tipo puo` contenere massimo :max caratteri',
        ];
    }
}
