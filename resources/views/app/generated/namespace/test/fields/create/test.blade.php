<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1592227481.fields.test') }}" for="7" :errors="$errors->get('testCar1592227481.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1592227481.fields.test')}}" name="testCar1592227481.test" id="7" wire:model.defer="testCar1592227481.test" />
</x-laragen::input.group>