<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                       <h3 class="card-title">@lang('fhuk.title')</h3>
                       <hr>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhuk.attr.notice_ID')</label>
                                        <input type="text" name="notice_ID" id="notice_ID" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhuk.attr.notice_ID_FHUS')</label>
                                         <input type="text" name="notice_ID_FHUS" id="notice_ID_FHUS" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('fhuk.attr.case_type')</label><br>
                                       <input type="text" name="case_type" id="case_type" class="form-control">   
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhuk.attr.potential_HUK')</label>
                                        <input type="text" name="potential_HUK" id="potential_HUK" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhuk.attr.if_related')</label>
                                         <input type="text" name="if_related" id="if_related" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('fhuk.attr.ilat_notice_ID')</label><br>
                                       <select>
                                           <option></option>
                                       </select>
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('fhuk.attr.option_huk_or_ilat')</label>
                                                <input type="date" name="option_huk_or_ilat" id="option_huk_or_ilat" class="form-control">   
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('fhuk.attr.date_option_received')</label>
                                            <input type="date" name="date_option_received" id="date_option_received" class="form-control">   
                                        </div>
                                    </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('investigationInformation.save')</button>
                            </div>              
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>