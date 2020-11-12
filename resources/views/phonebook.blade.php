<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <style>
      </style>
  </head>
  <body>
  <form action="{{route('phonebook.create')}}">
      <p>Input name</p>
      <input type="text" name ="name"
             pattern="[a-zA-Z]{3,255}"
             required>
      <p>Input number</p>
      <input type="tel" id="phone" name="number"
             pattern="[0-9]{12,20}"
             required>
      <br>
      <input type="submit" value="Send">
  </form>
  </body>
</html>
