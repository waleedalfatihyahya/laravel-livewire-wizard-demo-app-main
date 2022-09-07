<?php

namespace App\Http\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class DeliveryAddressStepComponent extends StepComponent
{
    public string $name = '';
    public string $street = '';
    public string $number = '';
    public string $city = '';
    public string $zip = '';


    public array $rules = [
        'name'=> 'required',
        'street'=> 'required',
        'number'=> 'required',
        'city'=> 'required',
        'zip'=> 'required',



    ];

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Delivery address',
        ];
    }

    public function render()
    {
        return view('livewire.orderWizard.steps.deliveryAddress');
    }
}
