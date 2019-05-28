@extends('layouts.admin.master')
@section('content')
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>EDIT NEWS</legend>

        <!-- Text input-->
        <div class="row">
        </div>
        <div class="form-group inline mx-5">
            <label class="col-md-4 control-label" for="DSD">DATE</label>
            <div class="col-md-12">
                <input id="DSD" name="DSD" type="date" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group inline mx-5">
            <label class="col-md-4 control-label" for="textarea">NEWS & EVENTS</label>
            <div class="col-md-12">
                <textarea class="form-control" id="textarea" name="textarea"></textarea>
            </div>
        </div>

        <!-- Insert Image For this is -->
        <div class="container">
            <div class="form-group inline mx-5">
                <input type="file" class="form-control-file border">
                <div class="col-md-12">
                </div>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group inline mx-5">
            <label class="col-md-4 control-label" for="button1idDDSA"></label>
            <div class="col-md-12">
                <button id="button1idDDSA" name="button1idDDSA" class="btn btn-warning">SUBMIT</button>
            </div>
        </div>

    </fieldset>
</form>

@endsection
