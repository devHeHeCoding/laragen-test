<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car811601916.fields.test') }}" for="7" :errors="$errors->get('testCar811601916.test')" >
    <x-laragen::input.text placeholder="test" name="testCar811601916.test" id="7" wire:model.defer="testCar811601916.test" />
</x-laragen::input.group>