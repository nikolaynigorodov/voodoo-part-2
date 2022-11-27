@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center">Cinema Hall</h2>
            <h3 class="text-center" id="nameOfMovie"></h3>
            <div class="col-md-12">
                <div class="row d-none alert alert-danger d-none-alert-danger">
                    <p>Select a date or time</p>
                </div>
                <div class="row d-none alert alert-success d-none-alert-success">
                    <p></p>
                </div>
                <div class="form-group" style="width: 15%">
                    <label for="datepicker">Date</label>
                    <input class="form-control" type="text" id="datepicker">
                </div>

                <div class="form-group" style="width: 15%">
                    <label for="movieSession">Movie Seances</label>
                    <select class="form-control" id="movieSession">
                        <option selected>Choose a seance time</option>
                    </select>
                </div>
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class='cinemaHall hall'></div>
                </div>
            </div>
        </div>
    </div>
@endsection
