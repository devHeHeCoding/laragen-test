<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1305333820.fields.test') }}" for="7" :errors="$errors->get('testCar1305333820.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1305333820.test" id="7" wire:model.defer="testCar1305333820.test" />
</x-laragen::input.group>