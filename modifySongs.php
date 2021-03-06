<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function (){
				var token = sessionStorage.getItem('token');
				var id = sessionStorage.getItem('id');
				$(".update").on("click", function(e){
					var title = $(".title").val();
					var artist = $(".artist").val();
					var url = $(".url").val();
					e.preventDefault();
					$.ajax({
						headers: {
					         'Authorization' : sessionStorage.getItem('token')
					        },
						url: 'http://81.169.234.32/danih/projectMusic/public/index.php/songs/modifySong.json',
						dataType: 'json',
						type: 'POST',
						data: {
							'id_song': id,
							'title': title,
							'artist': artist,
							'url': url
						},
						success: function(data){
							alert("Song modified");
							window.location.href = "songs.php";
						}
					});
				});
			});
		</script>

		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<title>Modify Song</title>
	</head>
	<body>

 		<h1 style="text-align: center;">Modify Song</h1>

	  	<div class="input-group center-block" style=" width: 250px" >
	       <input type="text"  class="form-control mb-2 title" id="inlineFormInputGroup" placeholder="Titulo">
	       
	       <input type="text" style=" margin-top: 3px" class="form-control mb-2 artist" id="inlineFormInputGroup" placeholder="Artista">

	       <input type="text" style=" margin-top: 3px" class="form-control mb-2 url" id="inlineFormInputGroup" placeholder="URL">

	       <input type="text" style=" margin-top: 3px" class="form-control mb-2 id_song" id="inlineFormInputGroup" placeholder="ID">

	       <button style="margin-top: 3px; margin-left: 80px"   type="submit" class="btn btn-primary mb-2 update">Modify</button>
	   	</div>
	</body>
</html>