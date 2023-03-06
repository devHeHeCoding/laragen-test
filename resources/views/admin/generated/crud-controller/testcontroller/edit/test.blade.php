<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1320179828.fields.test') }}" for="7" :errors="$errors->get('testCar1320179828.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1320179828.test" id="7" wire:model.defer="testCar1320179828.test" />
</x-laragen::input.group>