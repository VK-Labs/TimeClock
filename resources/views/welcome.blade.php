@extends('layouts.app')

@section('content')
<title>Time Clock</title>
<script src="js/numpad.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Request::cookie('TimeClockLocation') }}</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form>
                                <input type="password" name="emppin" id="emppin" class="form-control text-center input-lg">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="num-pad">
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            1
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            2
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            3
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            4
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            6
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            7
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            8
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            9
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            <span class="glyphicon glyphicon-remove" id="empremove" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            0
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="empnum">
                                        <div class="txt">
                                            <span class="glyphicon glyphicon-ok" id="empok" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
