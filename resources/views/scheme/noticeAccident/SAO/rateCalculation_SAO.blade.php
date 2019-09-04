<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                       <h3 class="card-title">@lang('rateCalculation.title')</h3>
                       <hr>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.assumed_wage')</label>
                                        <input type="text" name="assumed_wage" id="assumed_wage" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.total_assumed_wage')</label>
                                         <input type="text" name="total_assumed_wage" id="total_assumed_wage" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.assumed_average_month_wage')</label><br>
                                       <input type="text" name="assumed_average_month_wage" id="assumed_average_month_wage" class="form-control">   
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.assumed_average_daily_wage')</label>
                                        <input type="text" name="assumed_average_daily_wage" id="assumed_average_daily_wage" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.FHUS_daily_rate')</label>
                                         <input type="text" name="FHUS_daily_rate" id="FHUS_daily_rate" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.minimum_daily_rate')</label><br>
                                       <input type="text" name="minimum_daily_rate" id="minimum_daily_rate" class="form-control">   
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.maximum_daily_rate')</label>
                                        <input type="text" name="maximum_daily_rate" id="maximum_daily_rate" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.total_HUS_days_approved')</label>
                                         <input type="text" name="total_HUS_days_approved" id="total_HUS_days_approved" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.total_FHUS_payment')</label><br>
                                       <input type="text" name="total_FHUS_payment" id="total_FHUS_payment" class="form-control">   
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.total_deduction_of_overpayment')</label>
                                        <input type="text" name="total_deduction_of_overpayment" id="total_deduction_of_overpayment" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.ssab_decision')</label>
                                         <input type="text" name="ssab_decision" id="ssab_decision" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.high_court_decision')</label><br>
                                       <input type="text" name="high_court_decision" id="high_court_decision" class="form-control">   
                                     </div>
                                </div>   
                            </div> 
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.appellate_court_decision')</label>
                                        <input type="text" name="appellate_court_decision" id="appellate_court_decision" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.overpayment_waived')</label>
                                         <input type="text" name="overpayment_waived" id="overpayment_waived" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.calculation_approved_date')</label><br>
                                       <input type="text" name="calculation_approved_date" id="calculation_approved_date" class="form-control">   
                                     </div>
                                </div>   
                            </div>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.calculation_status')</label>
                                        <input type="text" name="calculation_status" id="calculation_status" class="form-control">   
                                    </div>
                                </div>
                            </div>

                             <h3>@lang('rateCalculation.title1')</h3>
                            <hr>

                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.overpayment_reason')</label>
                                        <input type="text" name="overpayment_reason" id="overpayment_reason" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.debtor_ID')</label>
                                         <input type="text" name="debtor_ID" id="debtor_ID" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.overpayment_method')</label><br>
                                       <input type="text" name="overpayment_method" id="overpayment_method" class="form-control">   
                                     </div>
                                </div>   
                            </div>

                            <h3>@lang('rateCalculation.title2')</h3>
                            <hr><hr>

                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.benefit_approve_date')</label>
                                        <input type="text" name="benefit_approve_date" id="benefit_approve_date" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('rateCalculation.attr.benefit_approve_by')</label>
                                         <input type="text" name="benefit_approve_by" id="benefit_approve_by" class="form-control">   
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('rateCalculation.attr.remarks')</label><br>
                                       <input type="text" name="remarks" id="remarks" class="form-control">   
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