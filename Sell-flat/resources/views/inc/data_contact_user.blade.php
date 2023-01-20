<div class="StepThree">
    <h5 class="text-center text-muted">Данные, которые будут указаны при размещении на сайтах:</h5>

    <div class="row">
    <label class="col-sm-4 col-form-label text-sm-right required">Имя</label>
    <div class="col-sm-8 form-group has-danger">
        <input type="text" class="form-control" id="prop_12280" value="" name="owner_name"><br>
    </div>


<div id="form_direct_phone" class="row">
        <label class="col-sm-4 col-form-label text-sm-right required" for="phone_full">Номер телефона</label>
    <div class="col-sm-8 form-group has-danger">
        <div class="row">
            <div class="col-sm-6">
                <input type="tel" class="form-control" id="phone_full" name="owner_phone" value="7" im-insert="true" placeholder="+_ (___) ___-__-__">
                <p class="tips form-text text-muted phone_tip" id="phone_full_tip">Пример: +7 (999) 888-77-66</p>
            </div>
            <div id="direct_phone_additional_wrap" class="col-sm-6 mt-2 mt-sm-0 order-2 order-sm-1">
                <input type="tel" class="form-control" id="phone_additional" name="owner_second_phone" value="7" im-insert="true">
                <p class="tips form-text text-muted phone_tip" id="phone_additional_tip">Второй номер, при наличии</p>
            </div>
            <div class="col-sm-12 mt-2 order-1 order-sm-2">
                <input type="hidden" name="fields[is_whatsapp_phone]" value="0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="owner_get_message_whatsapp" value="1" id="is_whatsapp_phone">
                    <label class="form-check-label" for="is_whatsapp_phone">Получать сообщения в whatsapp на этот номер</label>
                </div>
            </div>
        </div>
    <div class="form-control-feedback"></div></div>

</div>

    <div id="form_virtual_phone"></div>

    <div class="row">
        <label class="col-sm-4 col-form-label text-sm-right required">E-mail</label>
        <div class="col-sm-8 form-group">
        <input type="email" class="form-control suggestions-input" id="prop_12281" value="" name="owner_email" data-api="email.input" data-type="dadata" autocomplete="off"><div class="suggestions-wrapper"><span class="suggestions-addon" style="left: 373.663px; top: -43px; height: 42px; width: 42px;"></span><ul class="suggestions-constraints" style="left: 16px; top: -22px;"></ul><div class="suggestions-suggestions suggestions-mobile" style="position: absolute; display: none; left: -328.525px; top: 0px; width: 850px;"></div></div>
    </div>
</div>
