<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">@lang('scheme/caseinfo.title')</h5>
                        <hr> --}}
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">JD Type</label>
                              <select class="form-control">
                                <option value="" selected>Please Select</option>
                                <option value="">JD</option>
                                <option value="">JDK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">JD/JDR Session Date</label>
                              <input type="date" name="sessiondate" id="sessiondate" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Assessment Type</label>
                              <input type="text" name="assessment_type" id="assessment_type" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-20">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">JD/JDR Result</label>
                              <input type="text" name="result" id="result" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Assessment %</label>
                              <input type="text" name="assessment" id="assessment" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">ELS</label>
                              <input type="text" name="els" id="els" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Remarks</label>
                              <textarea type="text" name="remarks" id="remarks" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Accrual Date</label>
                              <input type="date" name="accrual_date" id="accrual_date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Provisional Assessment End Date</label>
                              <input type="date" name="provisional_end" id="provisional_end" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Provisional Assessment Accrual Date</label>
                              <input type="date" name="provisional_accrual" id="provisional_accrual" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Final Assessment Accrual Date</label>
                              <input type="date" name="final_date" id="final_date" class="form-control">
                            </div>
                          </div>
                        </div>
                          <div class="form-actions">
                              <button type="submit" class="btn btn-success"> @lang('scheme/caseinfo.save')</button>
                          </div>
                              {{-- <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                              <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button> --}}
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
