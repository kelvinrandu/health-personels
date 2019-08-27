@extends('layouts.app')

@section('content')

<div class="row">


<div class="col-md-6 ">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase"> Please enter details</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ route('update.record',$records->id) }}" method="post" > 
            {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Professional Name</label>
                        <div class="col-md-9">
                            <input type="text" name="professional_name" class="form-control" placeholder="{{ $records->professional_name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">ID Number</label>
                        <div class="col-md-9">
                            <input type="text" name="id_number" class="form-control" placeholder="{{ $records->id_number}}">
                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Registration No</label>
                        <div class="col-md-9">
                            <input type="text" name="registration_number" class="form-control" placeholder="{{ $records->registration_number}}">
                    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <div class="mt-radio-inline">
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios25" value="M" checked> Male
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios26" value="F" checked> Female
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Workstation</label>
                        <div class="col-md-9">
                            <input type="text" name="workstation" class="form-control" placeholder="{{ $records->workstation}}">
                    
                        </div>
                    </div>              
           
                    <div class="form-group">
                        <label class="col-md-3 control-label">Facility type</label>
                        <div class="col-md-9">
                            <select name="facility" placeholder="" class="form-control">
                            <option value="" disabled selected hidden>{{ $records->facility_type}}</option>
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
   <div class="col-md-4">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</div>



@endsection
