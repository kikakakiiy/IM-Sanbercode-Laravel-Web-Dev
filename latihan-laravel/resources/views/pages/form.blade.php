@extends('layouts.master')
@section('judul','Form')
@section('content')
<h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/signup" method="POST">
        @csrf
        <label for="">First Name</label><br>
        <input type="text" name="fname" required><br><br>
        <label for="">Last Name</label><br>
        <input type="text" name="lname" required><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" required>Female<br>
        <input type="radio" name="gender" required>Male<br><br>
        <label>Nationality: </label>
        <select name="nationality" required>
            <option value="Indonesian" required>Indonesian</option>
            <option value="Malaysia" required>Malaysia</option>
            <option value="Singapura" required>Singapura</option>
            <option value="Germany" required>Germany</option>
            <option value="American" required>American</option>
            <option value="Belanda" required>Belanda</option>
            <option value="Australia" required>Australia</option>
        </select><br><br>
        <label required>Languange Spoken: </label><br>
        <input type="checkbox" name="languange[]" value="Indonesia">Indonesia<br>
        <input type="checkbox" name="languange[]" value="Melayu">Melayu<br>
        <input type="checkbox" name="languange[]" value="German">German<br>
        <input type="checkbox" name="languange[]" value="English">English<br>
        <input type="checkbox" name="languange[]" value="Belanda">Belanda<br><br>
        <label>Bio: </label><br>
        <textarea name="bio" rows="10" cols="30" required></textarea>
        <br><br>
        <button type="submit">Sign Up</button>
    </form>
@endsection


