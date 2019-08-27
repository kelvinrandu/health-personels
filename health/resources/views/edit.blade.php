@extends('layouts.app')

@section('content')

                    <div class="row">

<div class="col-md-6 ">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase"> Edit details</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{route('user.edit')}}" method="post" > 
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Professional Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Enter full names">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">ID Number</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Enter id number">
                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Registration No</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Enter registration number">
                    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <div class="mt-radio-inline">
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" checked> Male
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios26" value="option2" checked> Female
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Workstation</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Enter workstation">
                    
                        </div>
                    </div>              
           
                    <div class="form-group">
                        <label class="col-md-3 control-label">Facility type</label>
                        <div class="col-md-9">
                            <select class="form-control">
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <button type="button" class="btn default">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>


@endsection