<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1966287723.fields.test') }}" for="7" :errors="$errors->get('testCar1966287723.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1966287723.test" id="7" wire:model.defer="testCar1966287723.test" />
</x-laragen::input.group>