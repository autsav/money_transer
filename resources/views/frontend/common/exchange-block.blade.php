<div class="form-group from">
    <label for="youSend">You Send</label>
    <div class="input-group">
        <input type="number" class="form-control" data-bv-field="youSend" id="youSend" step="0.001" name="amount">
        <div class="input-group-append">
                                                <span class="input-group-text p-0">
                                                    <select id="youSendCurrency"
                                                            name="curr1"
                                                            data-style="custom-select bg-transparent border-0"
                                                            data-container="body" data-live-search="true"
                                                            class="selectpicker form-control bg-transparent"
                                                            required="">
                                                  <optgroup label="Popular Currency">
                                                  @foreach($popularCurrency as $currency)
                                                          @isset($currencySubText[$currency])
                                                              <option data-icon="currency-flag currency-flag-{{strtolower($currency)}} mr-1"
                                                                      data-subtext="{{$currencySubText[$currency]}}" {{$currency==$defaultFromCurrency ? 'selected' : ''}}>{{$currency}}</option>
                                                          @endisset
                                                      @endforeach
                                                  </optgroup>
                                                  <option data-divider="true"></option>
                                                  <optgroup label="Other Currency">
                                                      @foreach($currencies as $currency)
                                                          @isset($currencySubText[$currency])
                                                              <option data-icon="currency-flag currency-flag-{{strtolower($currency)}} mr-1"
                                                                      data-subtext="{{$currencySubText[$currency]}}">{{$currency}}</option>
                                                          @endisset
                                                      @endforeach
                                                  </optgroup>
                                                </select>
                                                </span>
        </div>
    </div>
    <div id="from_error" class="error"></div>
</div>

<div class="text-muted mb-3">Total fees  - <span class="font-weight-500"><span id="feeAmount"></span> <span class="sendCurr"></span></span></div>

<div class="form-group to">
    <label for="recipientGets">Recipient Gets</label>
    <div class="input-group">
        <input type="number" class="form-control" data-bv-field="recipientGets" id="recipientGets" step="0.001">
        <div class="input-group-append">
                                                <span class="input-group-text p-0">
                                                    <select id="recipientCurrency"
                                                            name="curr2"
                                                            data-style="custom-select bg-transparent border-0"
                                                            data-container="body" data-live-search="true"
                                                            class="selectpicker form-control bg-transparent"
                                                            required="">
                                                      <optgroup label="Popular Currency">
                                                          @foreach($popularCurrency as $currency)
                                                              @isset($currencySubText[$currency])
                                                                  <option data-icon="currency-flag currency-flag-{{strtolower($currency)}} mr-1"
                                                                          data-subtext="{{$currencySubText[$currency]}}" {{$currency==$defaultToCurrency ? 'selected' : ''}}>{{$currency}}</option>
                                                              @endisset
                                                          @endforeach
                                                      </optgroup>
                                                      <option data-divider="true"></option>
                                                      <optgroup label="Other Currency">
                                                          @foreach($currencies as $currency)
                                                              @isset($currencySubText[$currency])
                                                                  <option data-icon="currency-flag currency-flag-{{strtolower($currency)}} mr-1"
                                                                          data-subtext="{{$currencySubText[$currency]}}">{{$currency}}</option>
                                                              @endisset
                                                          @endforeach
                                                      </optgroup>
                                                    </select>
                                                </span>
        </div>
    </div>
    <div id="to_error" class="error"></div>
</div>