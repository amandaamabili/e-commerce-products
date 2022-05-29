<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
        $id = $this->product ?? '';
        return [
            'name' => ['required', 'min:3', 'max:255', "unique:products,name,{$id},id"],
            'sugest_price' => ['required',   'min:3', 'max:9999'],
            'category' => ['nullable', 'min:2', 'max:255'],
            'brand' => ['min:2', 'max:255'],
            'stock_quantity'=> ['required'],
        ];
    }
}
