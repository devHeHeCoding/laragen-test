<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1906489997.fields.test') }}" for="7" :errors="$errors->get('testCar1906489997.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1906489997.test" id="7" wire:model.defer="testCar1906489997.test" />
</x-laragen::input.group>