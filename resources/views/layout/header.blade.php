<div id="header">
    <div class="container">
        <img src={{asset('img/logo.png')}} height="100px" style="float: left; border-radius: 70px" id="logo">

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

        <div id="authUser">
            <span style="float: left"><img src="{{asset('img/avtorisation.png')}}" width="50px"
                                           style="margin-right: 20px"></span>
            <span style="float: right">
                <a id="buttonNewUser">Регистрация</a><br>
                <a id="buttonAuthUser">Войти</a>
            </span>
        </div>
    </div>
</div>

<div>
    <div class="container" id="navBar">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="/{{$category->id}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div id="modalNewUser">
    <p>
        <label for="newLogin" data-icon="u">Ваш логин</label>
        <input id="newLogin" name="newLogin" required="required" type="text" placeholder="Логин"/>
    </p>
    <p>
        <label for="newEmail" data-icon="u">Ваша почта</label>
        <input id="newEmail" name="newEmail" required="required" type="text" placeholder="Почта"/>
    </p>
    <p>
        <label for="newPassword" data-icon="u">Ваш пароль</label>
        <input id="newPassword" name="newPassword" required="required" type="text" placeholder="Пароль"/>
    </p>
    <p>
        <label for="newRepPassword" data-icon="u">Повторите пароль</label>
        <input id="newRepPassword" name="newRepPassword" required="required" type="text" placeholder="Повторите пароль"/>
    </p>
</div>

<div id="modalAuth">
    <p>
        <label for="authLogin" data-icon="u">Ваш логин</label>
        <input id="authLogin" name="authLogin" required="required" type="text" placeholder="Логин"/>
    </p>
    <p>
        <label for="authPassword" data-icon="u">Ваш пароль</label>
        <input id="authPassword" name="authPassword" required="required" type="text" placeholder="Пароль"/>
    </p>
</div>