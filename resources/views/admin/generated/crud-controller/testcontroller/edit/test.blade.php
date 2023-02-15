<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car171292457.fields.test') }}" for="7" :errors="$errors->get('testCar171292457.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar171292457.test" id="7" wire:model.defer="testCar171292457.test" />
</x-laragen::input.group>