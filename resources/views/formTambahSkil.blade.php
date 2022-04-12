@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Skill</div>
                <div class="card-body">
                    <form action="/SaveSkill">

                    <div class="form-group">
                        <label for="fname">First Step</label>
                        <input class="form-control" type="text" name="firststep" placeholder="Your job..">
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Step</label>
                        <input class="form-control" type="text" name="laststep" placeholder="Your company..">
                    </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
