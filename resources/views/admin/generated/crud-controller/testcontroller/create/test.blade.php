<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1302454223.fields.test') }}" for="7" :errors="$errors->get('testCar1302454223.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1302454223.test" id="7" wire:model.defer="testCar1302454223.test" />
</x-laragen::input.group>