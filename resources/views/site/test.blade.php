@extends('layouts.app')

@section('content')
    <!-- Page Title-->
    <div class="row" style="margin-top: 9%!important; margin-bottom: 4%!important;">
        <div class="col text-center"><img src="images/logo.png"></div>
        <div class="col-sm-6 text-center">
            <h2>Fight Club <span style="color: darkred">Jiu Jitsu</span>
                <small class="text-muted">Grading Sheet</small>
            </h2>
        </div>
        <div class="col text-center"><img src="images/logo.png"></div>
    </div>

    <!-- Student Info-->
    <form>
        <div class="row" >
            <div class="col">
                <label for="firstname">First Name:</label>
                <input id="firstname" type="text" class="form-control" >
            </div>
            <div class="col">
                <label for="lastname">Last Name:</label>
                <input id="lastname" type="text" class="form-control" >
            </div>
            <div class="col">
                <label for="date">Date:</label>
                <input id="date" type="text" class="form-control" >
            </div>
        </div>
        <div class="row" style="margin-top: 15px!important; margin-bottom: 4%!important;">
            <div class="col">
                <label for="instructor">Instructor:</label>
                <input id="instructor" type="text" class="form-control" >
            </div>
            <div class="col">
                <label for="rank">Current Rank:</label>
                <input id="rank" type="text" class="form-control" >
            </div>
            <div class="col">
                <label for="beltattempting">Belt Attempting:</label>
                <input id="beltattempting" type="text" class="form-control" >
            </div>
        </div>
    </form>

    <!-- Rest of Page Content Inside Here (col-sm-8) -->
    <div class="row">
        <div class="col"></div>

        <div class="col-sm-8">
            <!-- Grading Scores-->
            <table class="table table-hover">

                <tr>
                    <td colspan="3" class="table-dark"><b>Knowledge</b></td>
                </tr>
                <tr>
                    <td>Participation and development of FCJJ</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="table-dark"><b>Solo Drills</b></td>
                </tr>
                <tr>
                    <td>Demonstrate your own solo drill</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="table-dark"><b>Standing Combinations</b></td>
                </tr>
                <tr>
                    <td>Double leg to run the pipe</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Run the pipe to high crotch</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Scissor takedown</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="table-dark"><b>Heel Hooks</b></td>
                </tr>
                <tr>
                    <td>Heel hook defending knee shield</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Heel hook defending x-guard</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Reverse toehold</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Inverted heel hook from 50/50</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Heel hook from butterfly sweep</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Heel hook from open guard (standing)</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Knee reap submission</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
                <tr>
                    <td>Knee reap footlock</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Pass</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" >Fail</label>
                    </td>
                </tr>
            </table>

            <br>
            <br>

            <!-- Comments Section -->
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Grading Notes:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>

            <!-- Graded By Info-->
            <form>
                <div class="row" style="margin-top: 25px!important; margin-bottom: 150px!important;">
                    <div class="col">
                        <label for="gradedby">Graded By:</label>
                        <input id="gradedby" type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="gradedate">Date:</label>
                        <input id="gradedate" type="text" class="form-control">
                    </div>
                </div>
            </form></div>

        <div class="col"></div>
    </div>

@endsection

@section('scripts')

@endsection

