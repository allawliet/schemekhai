<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('caseFact.title')</h5>
                            <hr>
                            <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('caseFact.attr.case_facts')</label>
                                            <textarea name="caseFacts" id="caseFacts" class="form-control"></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseFact.attr.recommendation')</label>
                                            <textarea name="recommendation" id="recommendation"  class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row p-t-20">
                                <div class="col-md-8 ">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseFact.attr.reviews_approval')</label>
                                        <textarea name="reviewApproval" id="reviewApproval" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                        <div class="form-group">
                                        <label class="control-label">@lang('caseFact.attr.investigator_name')</label>
                                            <input type="text" id="investigator_name" name="investigator_name" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseFact.attr.date')</label>
                                            <input type="date" id="date" name="date" class="form-control" value="{{date('Y-m-d')}}">
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