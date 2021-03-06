<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/obform" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            
                            @if(Session::get('messageob'))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messageob')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messageob))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messageob}}
                                </div>
    
                            </div>
                            @endif
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">JD Type</label><span
                                            class="required">*</span>
                                        <input type="text" id="jd_type" name="jd_type" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">JDR Session Date</label><span
                                            class="required">*</span>
                                            <input type="date" name="jdr_date" id="jdr_date" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Result of Permission Revision Application </label><span
                                            class="required">*</span>
                                        <input type="text" name="result_permission" id="result_permission" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Remarks</label><span
                                                class="required">*</span>
                                                <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                            </div>
                           
                            
                        </div>
                       
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">Save</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">Reset</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    