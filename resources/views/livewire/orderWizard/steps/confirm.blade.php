<div>
    @include('livewire.orderWizard.navigation')

    <h1>Order confirmation</h1>

    <div class="text-xs text-under text-gray-400 cursor-pointer" wire:click="previousStep">⬅ Previous</div>

    <div class="mt-4 space-y-4">
        <div>Please verify this information:</div>
        <div>Amount: {{ $amount }}</div>
        <div>
            <div>Address:</div> <br> <hr>

            <h2>Name:</h2></h2><div>{{ $address['name'] }}</div><hr>
            <h2>Street:</h2><div>{{ $address['street'] }}</div><hr>
            <h2>Number:</h2><div>{{ $address['number'] }} </div><hr>
            <h2>City:</h2><div>{{ $address['city'] }}</div><hr>
            <h2>Zip Code:</h2><div> {{ $address['zip'] }}</div><hr>

        </div>






        <x-button label="Confirm order" wire:click="confirm"/>
    </div>

</div>
