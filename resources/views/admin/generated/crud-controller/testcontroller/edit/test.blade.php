<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2084720087.fields.test') }}" for="7" :errors="$errors->get('testCar2084720087.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar2084720087.test" id="7" wire:model.defer="testCar2084720087.test" />
</x-laragen::input.group>