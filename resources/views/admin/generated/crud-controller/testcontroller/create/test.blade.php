<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car469150571.fields.test') }}" for="7" :errors="$errors->get('testCar469150571.test')" >
    <x-laragen::input.text placeholder="test" name="testCar469150571.test" id="7" wire:model.defer="testCar469150571.test" />
</x-laragen::input.group>