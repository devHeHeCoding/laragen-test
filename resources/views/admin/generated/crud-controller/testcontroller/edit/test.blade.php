<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car822257703.fields.test') }}" for="7" :errors="$errors->get('testCar822257703.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar822257703.test" id="7" wire:model.defer="testCar822257703.test" />
</x-laragen::input.group>