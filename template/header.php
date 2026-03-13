<?php 

?>

<!DOCTYPE html>
<html lang="de">
<head>
    
    <title>SCUM RP - Final Hell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo '/assets/css/scum.css'; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	
    <style>
		h2, h3 {
			background-color: #444;
			padding: 0px;
            margin-bottom: 0px;
			border-radius: 5px;
		}

		.card {
			margin-left: 25px;
			margin-right: 25px;
		}

		.top {
			animation-name: fade;
			animation-timing-function: ease-in-out;
			animation-iteration-count: 1;
			animation-duration: 1s;
			animation-direction: top;
		}

		body::before {
			content: "";
			
			/* oder absolute */
			inset: 0;

			background-image: url("maschendrahtzaun_optimiert.png");
			background-repeat: repeat;
			/* für Kachel-Hintergrund */
			background-size: auto;

			opacity: 0.05;
			/* ← Transparenz hier einstellen */
			pointer-events: none;
			z-index: -1;
		}

		@keyframes fade {
			0% {
				opacity: 0;
			}

			25% {
				opacity: 0;
			}

			75% {
				opacity: 1;
			}

			100% {
				opacity: 1;
			}
		}
	</style>
</head>

<body>

<!-- BACKGROUND -->
<div class="bg"></div>
<div class="smoke"></div>