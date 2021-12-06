<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Info</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/jquery.mobile-1.3.2.min.js"></script>
    <link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>" />
</head>

<body>
    <div></div>
    <div class="action-list">
        <div>
            <h1>編輯帳號資料</h1>
        </div>
        <div>
            <form method="patch" action="/edit/{id}">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="field my-2">
                    <label for="account">account:</label>
                    <input type="text" id="account" name="account" value="{{$editAccountInfo->account}}" />
                </div>
                <div class="field my-2">
                    <label for="name">name:</label>
                    <input type="text" id="name" name="name" value="{{$editAccountInfo->name}}" />
                </div>
                <div class="field my-2">
                    <label for="gender">gender:</label>
                    <input type="text" id="gender" name="gender" value="{{$editAccountInfo->gender}}" />
                </div>
                <div class="field my-2">
                    <label for="email">email:</label>
                    <input type="text" id="email" name="email" value="{{$editAccountInfo->email}}" />
                </div>
                <div class="field my-2">
                    <label for="birthday">birthday:</label>
                    <input type="date" id="birthday" name="birthday" value="{{$editAccountInfo->birthday}}" />
                </div>
                <div class="field my-2">
                    <label for="other">other:</label>
                    <textarea type="text" name="other" id="other" cols="30" rows="10" value="{{$editAccountInfo->other}}></textarea>
                </div>


                <div class="">
                    <div class=" ui-block-a"><input type="submit" name="btnOKCancel" value="OK" /></div>
                    <div class="ui-block-b"><input type="button" name="btnOKCancel" value="Cancel" onclick="window.location.href='/'" /></div>
                </div>


            </form>
        </div>
    </div>
</body>

</html>