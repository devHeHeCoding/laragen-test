<div class="form-group {{$errors->has('testCar1471706017.mr._floy_gottlieb_d_v_m_id') ? 'error' : ''}}">
    <label for="1">
        {{ trans('cruds.test-car1471706017.fields.mr._floy_gottlieb_d_v_m_id') }}        <input type="text"
               id="1"
               name="testCar1471706017.mr._floy_gottlieb_d_v_m_id"
               class="form-control"
               placeholder="mr._floy_gottlieb_d_v_m_id"
               wire:model.defer="testCar1471706017.mr._floy_gottlieb_d_v_m_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1471706017.mr._floy_gottlieb_d_v_m_id')}}        </span>
    </label>
</div>
