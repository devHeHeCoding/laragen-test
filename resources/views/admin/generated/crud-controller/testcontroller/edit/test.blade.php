<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car760085987.fields.test') }}" for="7" :errors="$errors->get('testCar760085987.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar760085987.test" id="7" wire:model.defer="testCar760085987.test" />
</x-laragen::input.group>