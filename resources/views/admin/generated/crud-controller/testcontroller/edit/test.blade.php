<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2120781035.fields.test') }}" for="7" :errors="$errors->get('testCar2120781035.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar2120781035.test" id="7" wire:model.defer="testCar2120781035.test" />
</x-laragen::input.group>