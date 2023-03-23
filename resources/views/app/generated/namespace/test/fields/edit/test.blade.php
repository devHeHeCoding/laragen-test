<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car5020602.fields.test') }}" for="7" :errors="$errors->get('testCar5020602.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car5020602.fields.test')}}" name="testCar5020602.test" id="7" wire:model.defer="testCar5020602.test" />
</x-laragen::input.group>