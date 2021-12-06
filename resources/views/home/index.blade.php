<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lab</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/jquery.mobile-1.3.2.min.js"></script>
    <link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>" />
</head>

<body>
    <div data-role="page" data-theme="c">

        <div data-role="header">
            <h1>User Details</h1>
        </div>

        <div data-role="content">
            <a href='/create'>新增資料</a>
            <ul data-role=" listview" data-filter="true">

                @foreach ($userList as $user)
                <li>
                    <a href="userDetails.html?id=1" data-ajax="false">
                        <h4>{{ $user->account }} {{ $user->name }}</h4>
                        <p>{{ $user->email }}</p>
                    </a>
                    <button onclick="location.href=`/edit_page/{{$user->id}}`">編輯</button>

                </li>
                @endforeach


            </ul>
        </div>

    </div>
</body>

</html>