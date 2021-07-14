<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<form action="/user/create" method="post">
    @csrf
    <div>
        Identity number
        <input type="text" name="identityNumber">
        @error('identityNumber')
        <p class="error">* {{ $message }}</p>

        @enderror
    </div>
    <br>
    <div>
        FirstName
        <input type="text" name="firstName">
        @error('firstName')
        <p class="error">* {{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        LastName
        <input type="text" name="lastName">
        @error('lastName')
        <p class="error">* {{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        Phone
        <input type="text" name="phone">
        @error('phone')
        <p class="error">* {{ $message }}</p>
        @enderror
    </div>
    <div>
        Gender
        <input type="radio" id="male" name="gender" value="0">
        <label for="male">Male</label>
        <input type="radio" id="famale" name="gender" value="1">
        <label for="famale">Famale</label><br>
        @error('gender')
        <p class="error">* {{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Save</button>
   <button type="reset">Reset</button>
    
</form>

</body>
</html>
