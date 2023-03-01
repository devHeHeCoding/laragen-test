<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car169681796.fields.test') }}" for="7" :errors="$errors->get('testCar169681796.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar169681796.test" id="7" wire:model.defer="testCar169681796.test" />
</x-laragen::input.group>