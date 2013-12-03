<?php 
require_once 'includes/html_template/header.php';
?>

<h2 class = "mainPageHeading">Upload Files</h2>
<p>By selecting an option from the "Sharing Status" drop down menu, you can choose to either share files with everyone (Public), share files with specific users (Specific-Sharing) or else upload your own private files (Private).
<strong>The maximum allowed file size is 2mb.</strong> </p>


<div id ="uploadForm">
			<div class="main_form">
			
		
				<?php print isset($_GET['Upload']) ? '<div class = "hiddenField">' . ($_GET['Upload']) . '</div>': ""; ?>
				<form name="upload" action="includes/functionality/uploadFiles.php" method="POST" enctype="multipart/form-data">
					<fieldset>

					<p>
					<label for="uploadfile">Select File:</label> 
					<input type="file" id="uploadfile" name="uploadfile" />
					</p>			
					<p>
					<label for="description">Description:</label> 
					<textarea placeholder="Optional" name = "description" ></textarea>
					</p>
					<p>
					<label for="subject">Subject: </label> 
					<input type="text" id="subject" name="subject" placeholder="Optional" />
					</p>
					<p>
					<label for="sharingStatus">Sharing Status: </label> 
					<select name ="sharingStatus">
						  <option value="none" selected style='display:none;'>Select a Sharing Status:</option>
						  <option value="public">Public</option>
						  <option value="private">Private</option>
					</select>
					</p>
					<p>
					<label class = "outside_label" for="terms" >Agree to upload terms and conditions: </label> 
					<span> 
					Yes <input type="radio" name="terms" value="yes"  />
					No <input type="radio" name="terms" value="no"  checked="checked" />
					</span>
					</p>
					</fieldset>	
					<p class = "submit">
					<input type="submit" name ="upload" value="Upload" />
					</p>
				</form>
				</div>		
	</div>
	


<h4>Upload Terms and Conditions</h4>
	<ul class ="TaC_bullets">
	<li><p>Any unlawful, unethical or inapropriate content is strictly banned from this site.</li>
	<li><p>This includes, but is not limited to any malicious content (computer viruses, worms, malware etc), drug related content, pornographic content or any content that is designed to harrass another user.</p></li>
	<li><p>Please use your own judgement when deciding what to upload</p></li>
	<li><p>If you have to ask youself "Should I upload this?" - than the answer is probably no!</p></li>
	</ul>
<p><strong>Any users found to be in breach of these terms will be banned and removed from this site </strong></p>


<?php require_once 'includes/html_template/footer.php';?>