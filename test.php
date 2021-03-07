<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("Personal Hotel App Login");
?>


<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
<!-- Add Jquery -->
<?php Shared::addJquery() ?>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

</script>



<?php
Shared::footer();
?>

