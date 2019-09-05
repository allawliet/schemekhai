<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.casetype')</label>
                                    <select class="form-control" data-placeholder="caseType_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="FHUK">@lang('wages.attr.fhuk')</option>
                                        <option value="PI">@lang('wages.attr.pi')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.notice')</label>
                                    <input type="text" id="noticeID_els" name="notice" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.rev_type')</label>
                                    <input type="text" id="revType_els" name="rev_type" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.revReason')</label>
                                    <select class="form-control" data-placeholder="revReason_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Application">@lang('wages.attr.application')</option>
                                        <option value="Review">@lang('wages.attr.review')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.source')</label>
                                    <select class="form-control" data-placeholder="source_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Email">@lang('wages.attr.email')</option>
                                        <option value="OTC">@lang('wages.attr.otc')</option>
                                        <option value="Portal">@lang('wages.attr.portal')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateRevNotice')</label>
                                    <input type="date" id="dateRevNotice_els" name="dateRevNotice" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">@lang('noticetype.reset')</button>

                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
