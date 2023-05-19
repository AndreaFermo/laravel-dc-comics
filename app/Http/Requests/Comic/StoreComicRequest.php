<?php

namespace App\Http\Requests\Comic;

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
            'title' => 'required|max:100',
            'description' => 'required|max:5000',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:25',
            'sale_date' => 'required|max:11',
            'type' => 'required|max:30'
        ];
    }

    public function messages() {

        return [
        'title.required' => 'Il campo Titolo è obbligatorio',
        'title.max' => 'Il campo Titolo deve essere massimo di 100 caratteri',
        'description.required' => 'Il campo Descrizione è obbligatorio',
        'description.max' => 'Il campo Descrizione deve essere massimo di 5000 caratteri',
        'thumb.required' => 'Il campo Immagine è obbligatorio',
        'thumb.url' => 'Il campo Immagine deve essere un url',
        'thumb.max' => 'Il campo Descrizione deve essere massimo di 255 caratteri',
        'price.required' => 'Il campo Prezzo è obbligatorio',
        'price.max' => 'Il campo Prezzo deve essere massimo di 10 caratteri',
        'series.required' => 'Il campo Serie è obbligatorio',
        'series.max' => 'Il campo Serie deve essere massimo di 25 caratteri',
        'sale_date.required' => 'Il campo Data di vendita è obbligatorio',
        'sale_date.max' => 'Il campo Data di vendita deve essere massimo di 11 caratteri',
        'type.required' => 'Il campo Tipologia è obbligatorio',
        'type.max' => 'Il campo Tipologia deve essere massimo di 30 caratteri',
        ];
    }
}