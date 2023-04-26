<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car126577550.fields.test') }}" for="7" :errors="$errors->get('testCar126577550.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car126577550.fields.test')}}" name="testCar126577550.test" id="7" wire:model.defer="testCar126577550.test" />
</x-laragen::input.group>