@extends('template')

@section('title','Employee List')

@section('content')
<div class="title">
    <h3>Tables</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <h4>Simple Table</h4>
    </div>
    <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <h4><small>Simple With Actions</small></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Since</th>
                        <th class="text-right">Gender</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employe)
                    <tr>
                        <td class="text-center">{{ $employe->emp_no }}</td>
                        <td>{{ $employe->first_name.' '.$employe->last_name }}</td>
                        <td>{{ $employe->birth_date }}</td>
                        <td>{{ date('Y', strtotime($employe->hire_date)) }}</td>
                        @if ($employe->gender == "M")
                        <td>{{ "Male" }}</td>
                        @else
                        <td>{{ "Female" }}</td>
                        @endif
                        <td class="td-actions text-right">
                            <a href="/detail/{{ $employe->emp_no }}">
                                <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons">detail</i>
                                </button>
                            </a>
                            <a href="/edit/{{ $employe->emp_no }}">
                                <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                </button>
                            </a>
                            <a href="/delete/{{ $employe->emp_no }}">
                                <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm"
                                    data-original-title="" title="">
                                    <i class="material-icons">delete</i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection