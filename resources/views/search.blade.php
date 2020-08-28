  <?php
   if(isset($results)){ ?>
  @foreach($results as $result)
  {{{ $result['code'] }}}
 @endforeach
  <?php } else {
  echo "Goods not set";
  }
?>