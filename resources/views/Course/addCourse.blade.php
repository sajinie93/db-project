<header>
    {{ csrf_token() }}
    <h4 style="padding: 0.3cm;"><button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button></h4>
    <hr>



    <div>
        <h1>Class</h1>
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


            <h2>Add Class</h2>
            <form action="{{route('save_course')}}" method="POST">
                {!!csrf_field()!!}
                <div class="form-group">
                    <label for="title">Course Name:</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Enter course title">
                </div>
                <div class="form-group">
                    <label for="instrument">Module Code:</label>
                    <input type="text" class="form-control" name='module_code' id="module_code" placeholder="Enter instrument">
                </div>
                <div class="form-group">
                    <label for="fee">Course Fee:</label>
                    <input type="text" class="form-control" name="fee" id="fee" placeholder="Enter course fee">
                </div>
                <div class="form-group">
                    <label for="location">Type:</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Enter location">
                </div>

                {{--<div class="checkbox">--}}
                {{--<label><input type="checkbox"> Remember me</label>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-default" style="float:left;  color: #d9edf7; background-color: #2a88bd" value="submit">Save</button>
                {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            </form>


        </div>
    </div>



    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 60% ">
        <div class="container" style="border-style: inset; padding-bottom: 5%; width: 100%; float: left; background-color: white;">
            <h2>All Classes</h2>

            <div class="input-group">
                <form action="{{route('search_course')}}" method="post"  type="text" class="form-control" placeholder="Search by title | instrument | location .." name="searchValue">
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

                        @foreach($courses as $course)
                            <tr>
                                <th>{{ $course->name }}</th>
                                <th>{{ $course->module_code }}</th>
                                <th>{{ $course->type }}</th>
                                <th>{{ $course->fee }}</th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

    </div>


</header>