<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Member</h1>
<form method="POST" action="{{ route('members.update', $member->id) }}">
    @csrf
    @method('PATCH')
    Name: <input type="text" name="name" value="{{ $member->name }}"><br>
    Email: <input type="email" name="email" value="{{ $member->email }}"><br>
    <button type="submit">Update</button>
</form>

</body>
</html>