<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">@lang('scheme/index.attr.remarks')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-10">
                                <div class="card">
                                    <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>@lang('scheme/remark.attr.date')</th>
                                                <th>@lang('scheme/remark.attr.time')</th>
                                                <th>@lang('scheme/remark.attr.from')</th>
                                                <th>@lang('scheme/remark.attr.to')</th>
                                                <th>@lang('scheme/remark.attr.remark')</th>
                                            </tr>
                                        </thead>
                                        <tbody class='align-middle'>
                                            <tr> 
                                                <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >No Record</td>
                                                <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required ></td>
                                                <td> <input  type="hidden" id="from" name="from" value="" class="form-control" required ></td>
                                                <td> <input  type="hidden" id="to" name="to" value="" class="form-control" required ></td>
                                                <td> <input  type="hidden" id="remark" name="remark" value="" class="form-control" required ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/remark.attr.remark')</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>