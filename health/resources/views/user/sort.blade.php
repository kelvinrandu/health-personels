@extends('layouts.app')

@section('content')

                    <div class="row">
                        <div class="col-md-12">
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
                                                <a href="{{ route('index') }}">
                                                    <button id="sample_editable_1_new" class="btn green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
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
                                                <th> Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($records as $row)
                                            <tr>
                                                <td>{{$row->professional_name}}</td>
                                                <td> {{$row->id_number}}</td>
                                                <td> {{$row->registration_number}}</td>
                                                <td> {{$row->gender}} </td>
                                                <td> {{$row->workstation}} </td>
                                                <td> {{$row->facility_type}} </td>
                                                                                                              
                                                <td>
                                                @php

                                                    $deadLineDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($row->annual_license_date)) . " + 365 day"));                                                 
 
                                                @endphp

                                                @if  ($deadLineDate >=$now )

                                                    <a href="" class="btn green"> active </a>

                                                @else 

                                                    <a href="" class="btn red"> expired </a> 

                                                @endif
                                                    
                        
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection