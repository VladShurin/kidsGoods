<div id="header">
    <div class="container">
        <img src={{asset('img/logo.png')}} height="100px" style="float: left; border-radius: 70px">

        <div style="padding: 5px 100px; float: left">
            <p>
                <img src="{{asset('img/logo_mts.png')}}" height="20px">
                <label style="margin-left: 20px;">+375(29)000-00-00</label>
            </p>
            <p style="margin-left: 20px">
                <img src="{{asset('img/logo_velcom.png')}}" height="20px">
                <label style="margin-left: 20px;">+375(44)000-00-00</label>
            </p>
        </div>
    </div>
</div>

<div>
    <div class="container" id="navBar">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="catalog/{{$category->id}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>