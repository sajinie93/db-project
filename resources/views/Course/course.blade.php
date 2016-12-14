<header>

    <h4 style="padding: 0.3cm;"><button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button></h4>
    <hr>



    <div>
        <h1>Class</h1>
    </div>


    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 5% ">
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
                </form>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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