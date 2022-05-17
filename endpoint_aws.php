<?php

	require_once("assets/head.php");

	$endpoint = "arn:aws:lambda:sa-east-1:355331038472:function:icsRealtimeTrackingEnvio";

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<br>
<h3>Endpoint RealTimeTracking:</h3>
<div class="alert alert-dark" role="alert"><?php echo $endpoint; ?></div>
</body>
</html>
