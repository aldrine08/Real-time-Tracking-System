<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'rider_id' => ['required','exists:riders,id'],

            'latitude' => ['required','numeric'],

            'longitude' => ['required','numeric'],

            'speed' => ['nullable','numeric'],

            'heading' => ['nullable','numeric'],

            'accuracy' => ['nullable','numeric'],

            'vehicle_id' => ['nullable','exists:vehicles,id'],

            'shipment_id' => ['nullable','exists:shipments,id'],

            'recorded_at' => ['required','date'],

        ];
    }
}