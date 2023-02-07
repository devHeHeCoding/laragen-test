<x-laragen::input.group label="{{ @trans('cruds.test-car154622430.fields.test') }}" for="7" :errors="$errors->get('testCar154622430.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar154622430.test" id="7" wire:model.defer="testCar154622430.test" />
</x-laragen::input.group>