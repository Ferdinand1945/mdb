                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Customer Listing</div>
                                <div class="actions"><a href="#" class="btn btn-info btn-xs"><i class="fa fa-plus"></i>&nbsp;
                                    New Customer</a>&nbsp;
                                    <div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-warning btn-xs dropdown-toggle"><i class="fa fa-wrench"></i>&nbsp;
                                        Tools</a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Export to Excel</a></li>
                                            <li><a href="#">Export to CSV</a></li>
                                            <li><a href="#">Export to XML</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Print Invoices</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row mbm">
                                    <div class="col-lg-12">
                                        <div style="display: none;" class="alert alert-danger tb-alert-error">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div style="display: none" class="alert alert-success tb-alert-success">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <textarea style="display: none;" class="gw-row">
                                    <tr>
                                        <td>{checkbox}</td>
                                        <td>{index}</td>
                                        <td>{name}</td>
                                        <td>{country}</td>
                                        <td>{gender}</td>
                                        <td>{order}</td>
                                        <td>{date}</td>
                                        <td>{price}</td>
                                        <td>{status}</td>
                                        <td>
                                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                Edit
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                </textarea>

                                <div class="row mbm">
                                    <div class="col-lg-6">
                                        <div class="pagination-panel">Page
                                            &nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-prev"><i class="fa fa-angle-left"></i></a>&nbsp;<input type="text" maxlenght="5" value="1" class="pagination-panel-input form-control input-mini input-inline input-sm text-center gw-page"/>&nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-next"><i class="fa fa-angle-right"></i></a>&nbsp;
                                            of 6 | View
                                            &nbsp;<select class="form-control input-xsmall input-sm input-inline gw-pageSize">
                                                <option value="20" selected="selected">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="150">150</option>
                                                <option value="-1">All</option>
                                            </select>&nbsp;
                                            records | Found total 58 records
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tb-group-actions pull-right"><span>10 records selected:</span><select class="table-group-action-select form-control input-inline input-small input-sm mlm">
                                            <option value="0">Select...</option>
                                            <option value="1">Cancel</option>
                                            <option value="2">Hold</option>
                                            <option value="3">On Hold</option>
                                            <option value="4">Close</option>
                                        </select>&nbsp;
                                            <button class="btn btn-sm btn-primary submit-action"><i class="fa fa-check"></i>&nbsp;
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                    <thead>
                                    <tr>
                                        <th width="3%"><input type="checkbox" class="checkall"/></th>
                                        <th width="9%">Record #</th>
                                        <th>Username</th>
                                        <th width="10%">Country</th>
                                        <th width="10%">Gender</th>
                                        <th width="7%">Order</th>
                                        <th width="12%">Date</th>
                                        <th width="10%">Price</th>
                                        <th width="9%">Status</th>
                                        <th width="12%">Actions</th>
                                    </tr>
                                    <tr role="row" class="filter">
                                        <td></td>
                                        <td><input type="text" class="form-control form-filter input-sm"/></td>
                                        <td><input type="text" class="form-control form-filter input-sm"/></td>
                                        <td><select class="form-control input-sm">
                                            <option value="">Country</option>
                                            <option value="0">United States</option>
                                            <option value="1">France</option>
                                            <option value="2">Spain</option>
                                        </select></td>
                                        <td><select class="form-control input-sm">
                                            <option value="">Gender</option>
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select></td>
                                        <td>
                                            <div class="mbs"><input type="text" placeholder="From" class="form-control input-sm mbs"/></div>
                                            <input type="text" placeholder="To" class="form-control input-sm"/></td>
                                        <td>
                                            <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm mbs"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
                                            <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
                                        </td>
                                        <td>
                                            <div class="mbs"><input type="text" placeholder="From" class="form-control input-sm mbs"/></div>
                                            <input type="text" placeholder="To" class="form-control input-sm"/></td>
                                        <td><select class="form-control input-sm">
                                            <option value="">Select...</option>
                                            <option value="pending">Pending</option>
                                            <option value="closed">Closed</option>
                                            <option value="hold">On Hold</option>
                                        </select></td>
                                        <td>
                                            <div class="mbs">
                                                <button class="btn btn-xs btn-success filter-submit"><i class="fa fa-search"></i>&nbsp;
                                                    Search
                                                </button>
                                            </div>
                                            <button class="btn btn-xs btn-info filter-cancel"><i class="fa fa-times"></i>&nbsp;
                                                Reset
                                            </button>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox"/></td>
                                        <td>1</td>
                                        <td>Henry</td>
                                        <td>United States</td>
                                        <td>Male</td>
                                        <td>32</td>
                                        <td>20-05-2014</td>
                                        <td>$240.50</td>
                                        <td><span class="label label-sm label-success">Approved</span></td>
                                        <td>
                                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                Edit
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"/></td>
                                        <td>2</td>
                                        <td>John</td>
                                        <td>United States</td>
                                        <td>Female</td>
                                        <td>45</td>
                                        <td>20-05-2014</td>
                                        <td>$240.50</td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                        <td>
                                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                Edit
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                  </tbody></table></div></div></div></div>