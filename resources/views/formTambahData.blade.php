@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Experience</div>
                <div class="card-body">
                    <form action="/SaveData">

                    <div class="form-group">
                        <label for="fname">Job</label>
                        <input class="form-control" type="text" name="job" placeholder="Your job..">
                    </div>

                    <div class="form-group">
                        <label for="lname">Company</label>
                        <input class="form-control" type="text" name="company" placeholder="Your company..">
                    </div>

                    <div class="form-group">
                        <label for="lname">Start </label>
                        <input class="form-control" type="date" name="start" placeholder="Your Timeline..">
                    </div>

                    <div class="form-group">
                        <label for="lname">End</label>
                        <input class="form-control" type="date" name="end" placeholder="Your Timeline..">
                    </div>

                    <div class="form-group">
                        <label for="subject">Description</label>
                        <textarea class="form-control" id="subject" name="description" placeholder="Your Description.." style="height:200px"></textarea>
                    </div>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
