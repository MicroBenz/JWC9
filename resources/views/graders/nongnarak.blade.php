
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
                        <th width="300" class="text-center">
                            Profile Photo
                        </th>
                        <th class="text-center">
                            Camper Info
                        </th>
                        <th width="300" class="text-center">
                            Facebook Photo
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($qualifies as $camper)
                    <tr>
                        <td width="300">
                            <a href="https://www.facebook.com/{{ $camper->FacebookUniqueID }}">
                                <img style="max-width: 300px;" src="https://jwc9.jwc.in.th/storage/{{ $camper->ProfilePicture }}">
                            </a>
                        </td>
                        <td class="text-center">
                            <h1 style="padding-top: 80px;"><b>{{ $camper->Nickname }}</b></h1><br>
                            <p style="padding-top: 5px; color: #666;">{{ $camper->FirstName }} {{ $camper->LastName }}</p>
                        </td>
                        <td width="300">
                            <a href="https://www.facebook.com/{{ $camper->FacebookUniqueID }}">
                                <img style="max-width: 300px;"  src="https://graph.facebook.com/v2.8/{{ $camper->FacebookUniqueID }}/picture/?width=1000&height=1000">
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection