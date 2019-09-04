<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h3 class="card-title">@lang('appointment.title')</h3>
                        <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.investigate_date')</label>
                                           <input type="date" name="investigate_date" id="investigate_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.investigate_time')</label>
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                data-autoclose="true">
                                                <input type="text" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('appointment.attr.interviewee_type')</label>
                                            <input type="text" name="interviewee_type" id="interviewee_type" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.dependents_name')</label>
                                           <input type="text" name="dependents_name" id="dependents_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.interviewee_name')</label>
                                            <input type="text" name="interviewee_name" id="interviewee_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.address')</label>
                                            <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.officer_name')</label>
                                           <input type="text" name="officer_name" id="officer_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.officer_email')</label>
                                            <input type="text" name="officer_email" id="officer_email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('appointment.attr.investigate_site')</label>
                                            <input type="text" name="investigate_site" id="investigate_site" class="form-control">
                                    </div>
                                </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button>
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('insuredPerson.save')</button>
                                </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>