<header>
    {{ csrf_token() }}
    <h4 style="padding: 0.3cm;"><button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button></h4>
    <hr>



    <div>
        <h1>Module</h1>
    </div>

    @if(count($errors)>0)
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach

                </ul>

            </div>

        </div>
    @endif

    <div class="col-sm-12" style="padding-bottom: 10%;">
        <div class="container" style="float: left;  border-style: inset; padding-bottom: 5%; background-color: white;">


            <h2>Add Module</h2>
            {{--{{route('save_course')}}--}}
            <form action="#" method="POST">
                {!!csrf_field()!!}
                <div class="form-group">
                    <label for="class_module_id">Enter Module Id:</label>
                    <input type="text" class="form-control" name="class_module_id" id="class_module_id" placeholder="Enter module id">
                </div>
                <div class="form-group">
                    <label for="module_code">Module Code:</label>
                    <select name="module_code" id="module_code" >

                        @foreach($modules as $module)
                            <option value={{$module->module_code}}>{{$module->module_code}}</option>
                        @endforeach

                    </select>
                    {{--<input type="text" class="form-control" name='module_code' id="module_code" placeholder="Enter module title">--}}
                </div>
                <div class="form-group">
                    <label for="instrument">Instrument:</label>
                    <select name="instrument" id="instrument" >

                        {{--@foreach($courses as $course)--}}
                        {{--<option value={{$course->id}}>{{$course->name}}</option>--}}
                        {{--@endforeach--}}

                    </select>
                    {{--<input type="text" class="form-control" name='instrument' id="instrument" placeholder="Enter instrument">--}}
                </div>
                <div class="form-group">
                    <label for="monthly_class_fee">Module Fee:</label>
                    <input type="text" class="form-control" name="monthly_class_fee" id="monthly_class_fee" placeholder="Enter module fee">
                </div>
                <div class="form-group">
                    <label for="hall_name">Hall Name:</label>
                    <select name="hall_name" id="hall_name" >


                        {{--@foreach($courses as $course)--}}
                        {{--<option value={{$course->id}}>{{$course->name}}</option>--}}
                        {{--@endforeach--}}

                    </select>
                    {{--<input type="text" class="form-control" name="hall_name" id="hall_name" placeholder="Enter location">--}}
                </div>
                <div class="form-group">
                    <label for="num_student">Enter Number of Student:</label>
                    <input type="text" class="form-control" name="num_student" id="num_student" placeholder="Enter number of student">
                </div>
                <div class="form-group">
                    <label for="teacher_fee_percentage">Enter Teacher Fee Percentage:</label>
                    <input type="text" class="form-control" name="teacher_fee_percentage" id="teacher_fee_percentage" placeholder="Enter teacher fee percentage">
                </div>
                <div class="form-group">
                    <label for="class_type">Enter Class Type:</label>
                    <select name="class_type" id="class_type" >

                        {{--<option value="" disabled selected>Group</option>--}}
                        <option value="1">Group</option>
                        <option value="2">Individual</option>

                    </select>
                    {{--<input type="text" class="form-control" name="class_type" id="class_type" placeholder="Enter class type">--}}
                </div>





                {{--<div class="checkbox">--}}
                {{--<label><input type="checkbox"> Remember me</label>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-default" style="float:left;  color: #d9edf7; background-color: #2a88bd" value="submit">Save</button>

            </form>


        </div>
    </div>



    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 60% ">
        <div class="container" style="border-style: inset; padding-bottom: 5%; width: 100%; float: left; background-color: white;">
            <h2>All Modules</h2>

            <div class="input-group">
                {{--{{route('search_course')}}--}}
                <form action="#" method="post"  type="text" class="form-control" placeholder="Search by title | instrument | location .." name="searchValue">
                    <span class="input-group-btn">
                        <button  type="submit" class="btn btn-default" name="search"  >
                            {{--<a href="{{URL::route('/check')}}"></a>--}}
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>



            <div class="row" style="padding-top: 2%;">
                <div class="col-md-12">
                    <table class="table table-bordered" style="border: groove;">
                        <tr>
                            <th>Name</th>
                            <th>Module Name</th>
                            <th>Type</th>
                            <th>Fee</th>
                        </tr>

                        {{--@foreach($courses as $course)--}}
                            {{--<tr>--}}
                                {{--<th>{{ $course->name }}</th>--}}
                                {{--<th>{{ $course->module_code }}</th>--}}
                                {{--<th>{{ $course->type }}</th>--}}
                                {{--<th>{{ $course->fee }}</th>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    </table>
                </div>
            </div>

        </div>

    </div>


</header>