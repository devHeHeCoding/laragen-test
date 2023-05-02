<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car977334066.fields.test') }}" for="7" :errors="$errors->get('testCar977334066.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car977334066.fields.test')}}" name="testCar977334066.test" id="7" wire:model.defer="testCar977334066.test" />
</x-laragen::input.group>