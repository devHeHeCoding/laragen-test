<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1170914345.fields.test') }}" for="7" :errors="$errors->get('testCar1170914345.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1170914345.fields.test')}}" name="testCar1170914345.test" id="7" wire:model.defer="testCar1170914345.test" />
</x-laragen::input.group>