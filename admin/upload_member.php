<?php include "../helpers/authenticate.php"; ?>
<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

		<div class="ui main text container">
		<h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">New Member Photo<div class="sub header">Woo we got a new member :)</div></div>
			</h1>
			<br>

			<form action="/helpers/edit_file.php" method="post" enctype="multipart/form-data">
			  Select image to upload:
			  <br/>

			  <img id="preview" src="#" alt="Click select image, type in a name and click submit." />

			  <br/><br/>

			  <div>
				<label for="upload_image" class="ui icon button">
					<i class="file icon"></i>
					Select Image</label>
				<input type="file" name="upload_image" id="upload_image" style="display:none">
			  </div>
			  <br/>

			  <script>

			  function readURL(input) {
				  if (input.files && input.files[0]) {
					  var reader = new FileReader();

					  reader.onload = function (e) {
						  $('#preview').attr('src', e.target.result);
					  }

					  reader.readAsDataURL(input.files[0]);
				  }
			  }

			  $("#upload_image").change(function(){
				readURL(this);
			  });

			  </script>


			  <input type="text" name="target_dir" value="resources/images/people/" hidden="true">
			  <input type="text" name="action" value="upload_image" hidden="true">
			  <input type="text" name="redirect" value="/admin/content" hidden="true">

			  <br/>

			  <div class="ui input">
				<input type="text" name="name" id="name">
			  </div>

			  <br/><br/>
			  <button class="ui green button">Upload New Member</button>

			</form>

	  </div>

	  <script src="/js/admin.js"></script>

	</body>

</html>
