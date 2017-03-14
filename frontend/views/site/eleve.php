<?php
echo "page eleve";
echo $model->username;
echo $EmploiTemps->jour;
$tabledays=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
$tableseance=["#","s1","s2","s3","s4","s5","s6","s7","s8"];
?>
 <div class="table-responsive">          
  <table class="table">
<tr>
	<?php foreach ($tableseance as $seance) {
	 ?>
	<th id="Seance"> <?php echo $seance ; ?></th>
	<?php } ?>
</tr>
<?php foreach ($tabledays as $day) {
	 ?>
<tr>
	
	<th id="Day"> <?php echo $day ; ?></th>
	<?php for($i=0;$i<8;$i++){?>
	<th class="seance" id="seance"><?php echo $i; ?></th>
	<?php }?>
	
</tr>
<?php } ?>
</table></div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p id="detail"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
$script= <<< JS
$('th').click(function(){
	var id =$(this).text();
$.get('index.php?r=site/ajax',{id : id},function(response){
	var data=$.parseJSON(response);
$( "#detail" ).append( "<strong></strong>" );
$( "#detail" ).append( "<strong>"+data.jour+"</strong>" );
$("#myModal").modal('show');
})
});
JS;
$this->registerJs($script);
?>