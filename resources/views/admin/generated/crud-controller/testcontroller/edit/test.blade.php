<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car77220492.fields.test') }}" for="7" :errors="$errors->get('testCar77220492.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car77220492.fields.test')}}" name="testCar77220492.test" id="7" wire:model.defer="testCar77220492.test" />
</x-laragen::input.group>