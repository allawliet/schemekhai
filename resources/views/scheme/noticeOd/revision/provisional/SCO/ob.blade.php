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
                             <label class="control-label">Notice ID</label>
                             <input type="text" name="notice_id" id="notice_id" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                              </div>
                            </div>
                          </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Identification Type</label>
                                  <select class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="" selected>New IC</option>
                                    <option value="">Old IC</option>
                                    <option value="">Army ID</option>
                                    <option value="">Police ID</option>
                                    <option value="">Social Security Number ID (SSN)</option>
                                    <option value="">CID</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Identification No.</label>
                                <input type="text" name="idno" id="idno" class="form-control">
                              </div>
                            </div>
                          </div>
                           <div class="row p-t-20">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Accident Date</label>
                                <input type="date" name="accdate" id="accdate" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Notice Date</label>
                                <input type="date" name="noticedate" id="noticedate" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row p-t-20">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" name="status" id="status" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Gender</label>
                                  <select class="form-control">
                                    <option value="" selected>Please Select</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                  </select>
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
