<?php
require_once("connection.php");


?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <form action="">
      <fieldset>
        <legend>Juice size</legend>
        <p>
          <input type="radio" name="size" id="size1" value="small" />
          <label for="size1">Small</label>
        </p>
        <p>
          <input type="radio" name="size" id="size2" value="medium" />
          <label for="size2">medium</label>
        </p>
        <p>
          <input type="radio" name="size" id="size3" />
          <label for="size3">Large</label>
          <button
            type="submit"
            style="display: block; margin-top: 15px; margin-left: 15px"
          >
            Submit
          </button>
        </p>
      </fieldset>
    </form>
  </body>
</html>

