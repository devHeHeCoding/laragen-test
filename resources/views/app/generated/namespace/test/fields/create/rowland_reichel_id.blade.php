<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car547282329.fields.rowland_reichel_id') }}" for="3" :errors="$errors->get('testCar547282329.rowland_reichel_id')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car547282329.fields.rowland_reichel_id')}}" name="testCar547282329.rowland_reichel_id" id="3" wire:model.defer="testCar547282329.rowland_reichel_id" />
</x-laragen::input.group>