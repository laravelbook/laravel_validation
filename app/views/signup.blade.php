<html>
  <body>
    <h2>Sign-up Form</h2>
    @if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>

      <ul>
        @foreach( $errors->all() as $message )
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    @endif

    <form method="POST" action="/signup">

      <!-- real name field -->
      <p>
          <label for="real_name">Real Name (*)</label><br/>
          <input type="text" name="real_name" id="real_name">
      </p>

      <!-- email field -->
      <p>
          <label for="email">E-mail (*)</label><br/>
          <input type="text" name="email" id="email">
      </p>

      <!-- password field -->
      <p>
          <label for="password">Password (*)</label><br/>
          <input type="password" name="password" id="password">
      </p>

      <!-- password confirmation field -->
      <p>
          <label for="password_confirmation">Password (*)</label><br/>
          <input type="password" name="password_confirmation" id="password_confirmation">
      </p>

      <!-- age field -->
      <p>
          <label for="age">Age</label><br/>
          <input type="text" name="age" id="age">
      </p>

      <p><small>Fields denoted with an asterisk (*) are mandatory</small></p>

      <!-- submit button -->
      <p><input type="submit" value="Sign-up"></p>

    </form>
  </body>
</html>