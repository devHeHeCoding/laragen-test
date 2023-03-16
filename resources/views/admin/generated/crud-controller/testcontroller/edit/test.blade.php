<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car396889675.fields.test') }}" for="7" :errors="$errors->get('testCar396889675.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar396889675.test" id="7" wire:model.defer="testCar396889675.test" />
</x-laragen::input.group>