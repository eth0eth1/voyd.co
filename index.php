<?php
class foo
{
  function do_foo($in)
  {
    echo "Foo $in";
  }
}

$bar = new foo();

$bar->do_foo("Test");

//Test

?>
