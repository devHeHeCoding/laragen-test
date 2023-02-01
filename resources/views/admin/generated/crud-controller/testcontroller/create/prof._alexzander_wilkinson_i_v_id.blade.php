<div class="form-group {{$errors->has('testCar1572913987.prof._alexzander_wilkinson_i_v_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1572913987.fields.prof._alexzander_wilkinson_i_v_id') }}        <input type="text"
               id="3"
               name="testCar1572913987.prof._alexzander_wilkinson_i_v_id"
               class="form-control"
               placeholder="prof._alexzander_wilkinson_i_v_id"
               wire:model.defer="testCar1572913987.prof._alexzander_wilkinson_i_v_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1572913987.prof._alexzander_wilkinson_i_v_id')}}        </span>
    </label>
</div>
