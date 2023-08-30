@extends('layouts.navbarTwoForTeacher')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/inputGrade.css') }}" rel="stylesheet">
</head>
<body>

    @section('container')
    <div class="container2">
        <div class="user-profile">
            <a href=""><img src="{{ asset('img/profile.svg') }}" alt="description of myimage" class="ppa"></a>
            <div class="user-data">
                <h1>Michael Varian</h1>
                <h2>10 Science 1 - Historical Literacy</h2>
            </div>
        </div>
        <div class="bottom2">
            <div class="answers2">
                <h1 class="answers2h1">Main topic</h1>
             <p>The American Revolution, which took place from 1775 to 1783, was a
                    monumental event in the history of the United States. Fueled by a
                    growing discontent with British colonial rule, American colonists rose
                    up to challenge the authority of the British Empire</p>
                <h1 class="answers2h1">The purpose of the article</h1>
                <p>The American Revolution, which took place from 1775 to 1783, was a
                    monumental event in the history of the United States. Fueled by a
                    growing discontent with British colonial rule, American colonists rose
                    up to challenge the authority of the British Empire</p>
                <h1 class="answers2h1">Conclusion</h1>
                <p>The American Revolution, which took place from 1775 to 1783, was a
                    monumental event in the history of the United States. Fueled by a
                    growing discontent with British colonial rule, American colonists rose
                    up to challenge the authority of the British Empire</p>
            </div>
            <div class="inputbox">
                <h1>Input Grade</h1>
                <input type="text" class="boxedit">
                <button class="savegrade"><a href="/grade2">Save</a></button>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
