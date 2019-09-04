<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                           <h3 class="card-title">@lang('medicalBoard.title')</h3>
                           <hr>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.potential_not_emp_injury')</label>
                                            <input type="text" name="potential_not_emp_injury" id="potential_not_emp_injury" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.speciality')</label>
                                             <input type="text" name="speciality" id="speciality" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('medicalBoard.attr.part_injury')</label><br>
                                           <input type="text" name="part_injury" id="part_injury" class="form-control">   
                                         </div>
                                    </div>   
                                </div> 
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.app_loc')</label>
                                            <input type="text" name="app_loc" id="app_loc" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.JD_session_date')</label>
                                             <input type="text" name="JD_session_date" id="JD_session_date" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('medicalBoard.attr.JD_Decision')</label><br>
                                           <select id="idtype" class="form-control" value="" name="idtype" required>
                                                <option value=""></option>
                                            </select>
                                         </div>
                                    </div>   
                                </div> 
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('medicalBoard.attr.JD_Type')</label>
                                                <input type="text" name="JD_Type" id="JD_Type" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.assesment_type')</label>
                                                <input type="text" name="assesment_type" id="assesment_type" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('medicalBoard.attr.assesment')</label>
                                                <input type="text" name="assesment" id="assesment" class="form-control">   
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('medicalBoard.attr.els')</label>
                                                    <input type="text" name="els" id="els" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalBoard.attr.remark')</label>
                                                    <input type="text" name="remark" id="remark" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalBoard.attr.hus_end_date')</label>
                                                    <input type="text" name="hus_end_date" id="hus_end_date" class="form-control">   
                                            </div>
                                        </div>
                                </div>
                                <div class="row p-t-20"> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('medicalBoard.attr.accrual_date')</label>
                                                    <input type="text" name="accrual_date" id="accrual_date" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalBoard.attr.proviaional_assesment_accrual_date')</label>
                                                    <input type="text" name="proviaional_assesment_accrual_date" id="proviaional_assesment_accrual_date" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalBoard.attr.provisional_end_Date')</label>
                                                    <input type="text" name="provisional_end_Date" id="provisional_end_Date" class="form-control">   
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