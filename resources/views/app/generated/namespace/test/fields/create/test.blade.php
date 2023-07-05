<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car2010916739.fields.test') }}" for="11" :errors="$errors->get('testCar2010916739.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2010916739.fields.test')}}" name="testCar2010916739.test" id="11" wire:model.defer="testCar2010916739.test" />
</x-laragen::input.group>