<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1949212830.fields.test') }}" for="7" :errors="$errors->get('testCar1949212830.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1949212830.test" id="7" wire:model.defer="testCar1949212830.test" />
</x-laragen::input.group>