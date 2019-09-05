 <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            {{-- <h5 class="card-title">@lang('scheme/wages.title')</h5>
                            <hr> --}}
                            <!-- Column -->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table id="demo-foo-row-toggler" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('scheme/wages.attr.num')</th>
                                                        <th style='width:7%' class="text-center">@lang('scheme/wages.attr.year')</th>
                                                        <th style='width:7%' class="text-center">@lang('scheme/wages.attr.month')</th>
                                                        <th style='width:7%' class="text-center">@lang('scheme/wages.attr.wages')</th>
                                                        <th style='width:7%' class="text-center">@lang('scheme/wages.attr.contribution')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-expanded="true">
                                                        <td>1</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>  
                                                    <tr data-expanded="true">
                                                        <td>2</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>  
                                                    <tr data-expanded="true">
                                                        <td>3</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>  
                                                    <tr data-expanded="true">
                                                        <td>4</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>  
                                                    <tr data-expanded="true">
                                                        <td>5</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>   
                                                    <tr data-expanded="true">
                                                        <td>6</td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                 <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('scheme/wages.attr.february')</option>
                                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                    <option value="June">@lang('scheme/wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('scheme/wages.attr.september')</option>
                                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('scheme/wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('scheme/wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-15">
                                                                <input type="text" id="year" name="year" value="" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label" for="customCheck7"></label>
                                        <label class="control-label">@lang('scheme/wages.attr.minimum_wages')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    {{-- <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button> --}}
                                    <button type="submit" class="btn btn-success"> @lang('scheme/caseinfo.save')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>