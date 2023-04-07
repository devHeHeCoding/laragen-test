<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car4305551.fields.test') }}" for="7" :errors="$errors->get('testCar4305551.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car4305551.fields.test')}}" name="testCar4305551.test" id="7" wire:model.defer="testCar4305551.test" />
</x-laragen::input.group>