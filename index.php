<?php
class foo
{
  function do_foo($in)
  {
    echo "Foo $in";
  }
}

$bar = new foo("Test");

$bar->do_foo();

//Test

?>
