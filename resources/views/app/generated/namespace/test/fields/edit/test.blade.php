<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car466614596.fields.test') }}" for="7" :errors="$errors->get('testCar466614596.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car466614596.fields.test')}}" name="testCar466614596.test" id="7" wire:model.defer="testCar466614596.test" />
</x-laragen::input.group>