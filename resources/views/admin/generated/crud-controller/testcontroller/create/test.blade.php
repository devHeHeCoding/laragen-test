<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1070024050.fields.test') }}" for="7" :errors="$errors->get('testCar1070024050.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1070024050.test" id="7" wire:model.defer="testCar1070024050.test" />
</x-laragen::input.group>