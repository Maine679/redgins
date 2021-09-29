@foreach($product as $item)
    <p>{{$item['id']}}</p>
    <h1>{{$item['name']}}</h1>
    <span>{{$item['price']}}</span>
    <span>{{$item['colour_id']}}</span>
    <span>{{$item['form_id']}}</span>
    <h3>{{$item['season_id']}}</h3>
    <p>{{$item['categories_id']}}</p>
    <h3>{{$item['sale']}}</h3>

@endforeach
