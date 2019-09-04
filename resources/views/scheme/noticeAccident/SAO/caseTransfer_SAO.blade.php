<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            <h3 class="card-title">@lang('caseTransfer.title')</h3>
                                <hr>
                                    <div class="row p-t-20">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseTransfer.attr.transfer')</label>
                                                <input type="text" name="transfer" id="transfer" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <label class="control-label">@lang('caseTransfer.attr.remark')</label>
                                                <input type="text" name="remark" id="remark" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('caseTransfer.attr.origin')</label>
                                               <input type="text" name="origin" id="origin" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('caseTransfer.attr.current')</label>
                                                    <input type="text" id="current" name="current" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('insuredPerson.save')</button>
                                </div>              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>