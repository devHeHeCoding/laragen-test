<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car708960866.fields.test') }}" for="11" :errors="$errors->get('testCar708960866.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car708960866.fields.test')}}" name="testCar708960866.test" id="11" wire:model.defer="testCar708960866.test" />
</x-laragen::input.group>