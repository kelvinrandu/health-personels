@extends('layouts.app')

@section('content')

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase"> Health  professionals  records</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button id="sample_editable_1_new" class="btn green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th> Professional Name </th>
                                                <th> ID No </th>
                                                <th> Registration No</th>
                                                <th> Gender </th>
                                                <th> Workstation </th>
                                                <th> Facility Type </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Kelvin Randu</td>
                                                <td> 31626923 </td>
                                                <td> M </td>
                                                <td> MUBILI </td>
                                                <td> Public </td>
                                                <td class="center"> power user </td>
                                                <td>
                                                    <a href="javascript:;" class="btn green"> edit </a>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn red"> delete </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>


@endsection