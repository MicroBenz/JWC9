@foreach($registrants as $registrant)
    <a href="https://www.facebook.com/search/top/?q={{ $registrant->FacebookName }}">
        <img src="{{ str_replace('type=normal', 'width=1000&height=1000', $registrant->FacebookAvatar) }}"
             style="width: 270px; height: 270px; display: inline-block;">
    </a>
@endforeach
