<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h3 class="card-title">@lang('comment.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('comment.attr.comment_by')</label>
                                        <input type="text" name="comment_by" id="comment_by" class="form-control">
                                    </div>
                                </div>
                            
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('comment.attr.comment_date')</label>
                                        <input type="date" name="comment_date" id="comment_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('comment.attr.comment_desc')</label>
                                        <input type="text" name="comment_desc" id="comment_desc" class="form-control">
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