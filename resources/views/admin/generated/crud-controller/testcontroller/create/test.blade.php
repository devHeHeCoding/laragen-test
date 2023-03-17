<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1157138218.fields.test') }}" for="7" :errors="$errors->get('testCar1157138218.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1157138218.fields.test')}}" name="testCar1157138218.test" id="7" wire:model.defer="testCar1157138218.test" />
</x-laragen::input.group>