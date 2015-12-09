<?php

use Cake\Routing\Router;
use Cake\View\Helper\UrlHelper;

?>
<div class="ui-widget">
<?php
        echo $this->Form->create('Users', array('action' => 'search'));
        echo $this->Form->input('name',array('id' => 'Autocomplete')); 
        echo $this->Form->end();
?>
</div>
<div class="ui-widget" style="margin-top:2em; font-family:Arial">
  Result:
  <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>
<script type="text/javascript">
$(document).ready(function($){
$('#Autocomplete').autocomplete({
source:'<?php echo Router::url(array("controller" => "users", "action" => "search")); ?>',
  minLength: 1
    });  });
</script>