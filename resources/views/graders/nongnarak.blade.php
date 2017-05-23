
@extends('graders.layout', ['title' => 'น้องๆผู้น่ารัก'])

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        น้องๆผู้น่ารัก
    </h3>

    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            Facebook Photo
                        </th>
                        <th>
                            Camper Info
                        </th>
                        <th>
                            Profiles Photo
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($qualifies as $camper)
                    <tr>
                        <td><img style="max-width: 300px;" src="https://jwc9.jwc.in.th/storage/{{ $camper->ProfilePicture }}"></td>
                        <td class="text-center">
                            <b>{{ $camper->Nickname }}</b><br>
                            <small>{{ $camper->FirstName }} {{ $camper->LastName }}</small>
                        </td>
                        <td><img style="max-width: 300px;"  src="https://graph.facebook.com/v2.8/{{ $camper->FacebookUniqueID }}/picture/?width=1000&height=1000"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection