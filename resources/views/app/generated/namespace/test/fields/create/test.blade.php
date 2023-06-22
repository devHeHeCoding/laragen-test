<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car2132963918.fields.test') }}" for="7" :errors="$errors->get('testCar2132963918.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2132963918.fields.test')}}" name="testCar2132963918.test" id="7" wire:model.defer="testCar2132963918.test" />
</x-laragen::input.group>