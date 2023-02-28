<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1616682440.fields.test') }}" for="7" :errors="$errors->get('testCar1616682440.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1616682440.test" id="7" wire:model.defer="testCar1616682440.test" />
</x-laragen::input.group>