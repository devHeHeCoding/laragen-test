<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car738781303.fields.test') }}" for="7" :errors="$errors->get('testCar738781303.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car738781303.fields.test')}}" name="testCar738781303.test" id="7" wire:model.defer="testCar738781303.test" />
</x-laragen::input.group>