<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1879614189.fields.test') }}" for="7" :errors="$errors->get('testCar1879614189.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1879614189.test" id="7" wire:model.defer="testCar1879614189.test" />
</x-laragen::input.group>