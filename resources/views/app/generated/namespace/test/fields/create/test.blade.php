<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1518294816.fields.test') }}" for="11" :errors="$errors->get('testCar1518294816.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1518294816.fields.test')}}" name="testCar1518294816.test" id="11" wire:model.defer="testCar1518294816.test" />
</x-laragen::input.group>