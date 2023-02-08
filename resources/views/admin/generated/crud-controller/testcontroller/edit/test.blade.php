<x-laragen::input.group label="{{ @trans('cruds.test-car1750227684.fields.test') }}" for="7" :errors="$errors->get('testCar1750227684.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1750227684.test" id="7" wire:model.defer="testCar1750227684.test" />
</x-laragen::input.group>