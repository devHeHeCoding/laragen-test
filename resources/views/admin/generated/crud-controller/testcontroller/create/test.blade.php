<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1817031865.fields.test') }}" for="7" :errors="$errors->get('testCar1817031865.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1817031865.test" id="7" wire:model.defer="testCar1817031865.test" />
</x-laragen::input.group>