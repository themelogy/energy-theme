@if(!empty($links[0]["website"]))
    <div class="table-responsive">
        <table class="table">
            @foreach($links as $link)
                <tr>
                    <td>{{ $link['date'] }}</td>
                    <td>{{ $link['author'] }}</td>
                    <td>{{ $link['title'] }}</td>
                    <td><a target="_blank" href="{{ $link['website'] }}">{{ $link['website'] }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endif