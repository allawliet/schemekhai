<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('similarWorker.title')</h5>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('similarWorker.attr.similar_idtype')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                            <option>@lang('accidentDetails.choose2')</option>
                                            <option value="">@lang('similarWorker.attr.new_ic')</option>
                                            <option value="">@lang('similarWorker.attr.old_ic')</option>
                                            <option value="">@lang('similarWorker.attr.army_id')</option>
                                            <option value="">@lang('similarWorker.attr.police_id')</option>
                                            <option value="">@lang('similarWorker.attr.ssn_id')</option>
                                            <option value="">@lang('similarWorker.attr.cid')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('similarWorker.attr.new_identification_no')</label>
                                        <input type="text" id="similar_empcode" class="form-control">
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="form-group"><br>
                                        <button class="btn btn-facebook waves-effect waves-light" id="btn_search" type="button"> <i class="fas fa-search"></i> </button>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Old Identification No.</label>
                                            <input type="text" id="similar_empname" class="form-control">
                                    </div>
                                </div> --}}
                            </div>
                            
                            <div class="similar_work" id="similar_work">
                                <div class="row p-t-20">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                        <label class="control-label">@lang('similarWorker.attr.similar_name')</label>
                                        <input type="text" name="similarName" id="similarName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_emptype')</label>
                                                <input type="text" name="similar_emptype" id="similar_emptype" class="form-control">
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_empcode')</label>
                                                <input type="text" id="similar_empcode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_empname')</label>
                                                <input type="text" id="similar_empname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_startdate')</label>
                                            <input type="date" name="similar_startdate" id="similar_startdate" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_enddate')</label>
                                                <input type="date" name="similar_enddate" id="similar_enddate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                

                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            </div>             
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#similar_work').hide();
        $('#btn_search').click(function () {

            $('#similar_work').show();

        });              
    });
</script>