<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                            <form action="#">
                                    <h3 class="card-title">@lang('investigationInformation.title')</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('investigationInformation.attr.date')</label>
                                               <input type="date" name="date" id="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('investigationInformation.attr.date_of_IP')</label>
                                               <input type="date" name="date_of_IP" id="date_of_IP" class="form-control">
                                            </div>
                                        </div>    
                                    </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.question_1')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.question_2')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('investigationInformation.attr.question_3')</label><br>
                                           <br><select class="form-control">
                                                <option>@lang('investigationInformation.attr.yes')</option> 
                                                <option>@lang('investigationInformation.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>   
                                </div>    
                                <div class="row p-t-20">
                                    
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('investigationInformation.attr.question_4')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                            </div>
                                        </div>
                                        
            
                                <div class="col-md-4">
                                            <div class="form-group">
                                                 <label class="control-label">@lang('investigationInformation.attr.question_5')</label>
                                                 <select class="form-control">
                                                        <option>@lang('investigationInformation.attr.yes')</option> 
                                                        <option>@lang('investigationInformation.attr.no')</option> 
                                                    </select>
                                            </div>
                                        </div>
                                </div>
            
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.wrong_benefit')</label>
                                                 <input type="text" name="wrong_benefit" id="wrong_benefit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.system_recommendation')</label>
                                                <input type="text" name="system_recommendation" id="system_recommendation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-danger">@lang('investigationInformation.cancel')</button>
                                <button type="button" class="btn btn-warning">@lang('investigationInformation.clear')</button>
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('investigationInformation.save')</button>
                            </div>              
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>