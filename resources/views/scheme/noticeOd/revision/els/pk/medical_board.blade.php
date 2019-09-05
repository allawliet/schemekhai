<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    <h5 class="card-title">@lang('insuredPerson.huk')</h5>
                        <hr>
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('insuredPerson.attr.jdType')</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">@lang('wages.attr.jdr')</option>
                                        <option value="JDK">@lang('wages.attr.JDK')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.jdorjdrsesionDate')</label>
                                    <input type="text" readonly id="jdorjdrsesionDate_els" name="jdorjdrsesionDate" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.asessment')</label>
                                <input type="text" readonly id="idNum_els" name="asessment" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.els')</label>
                                <input type="text" readonly id="els_els" name="els" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.remarks')</label>
                                    <input type="text" readonly id="remarks_els" name="remarks" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('insuredPerson.invalidity')</h5>
                        <hr>
                        <div class="row p-t-20">
                        <div class="col-md-4">
                            <label class="control-label">@lang('insuredPerson.attr.jdType')</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els" tabindex="2">
                                   <option selected readonly disabled hidden>Please Select</option>                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">@lang('wages.attr.jdr')</option>
                                        <option value="JDK">@lang('wages.attr.JDK')</option>
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('insuredPerson.attr.jdSessionDate')</label>
                                   <input type="date" readonly id="jdSessionDate_els" name="jdSessionDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.morbidDate')</label>
                                <input type="date" readonly id="morbidDate_els" name="morbidDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.els')</label>
                                    <input type="text" readonly id="els_els" name="els" value="" class="form-control">
                                </div>
                            </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.invalidityDecision')</label>
                                <input type="text" readonly id="invalidityDecision_els" name="invalidityDecision" value="" class="form-control">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
