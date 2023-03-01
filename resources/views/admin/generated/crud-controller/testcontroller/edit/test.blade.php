<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1139604965.fields.test') }}" for="7" :errors="$errors->get('testCar1139604965.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1139604965.test" id="7" wire:model.defer="testCar1139604965.test" />
</x-laragen::input.group>