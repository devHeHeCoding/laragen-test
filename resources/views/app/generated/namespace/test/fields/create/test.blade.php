<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car493133983.fields.test') }}" for="11" :errors="$errors->get('testCar493133983.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car493133983.fields.test')}}" name="testCar493133983.test" id="11" wire:model.defer="testCar493133983.test" />
</x-laragen::input.group>