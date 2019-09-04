<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                       <h3 class="card-title">@lang('fhus.title')</h3>
                       <hr>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhus.attr.notice_ID')</label>
                                        <input type="text" name="notice_ID" id="notice_ID" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhus.attr.case_type')</label>
                                         <input type="text" name="case_type" id="case_type" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('fhus.attr.potential_HUK')</label><br>
                                       <input type="text" name="potential_HUK" id="potential_HUK" class="form-control">   
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