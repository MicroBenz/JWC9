@foreach($registrants as $registrant)
    <a href="https://www.facebook.com/search/top/?q={{ $registrant->FacebookName }}">
        <img src="https://jwc9.jwc.in.th/storage/{{ $registrant->ProfilePicture }}"
             style="width: 270px; height: 270px; display: inline-block;">
    </a>
@endforeach
