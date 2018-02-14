
<style>
		.group:before,
		.group:after {
		    content: "";
		    display: table;
		} 
		.group:after {
		    clear: both;
		}
		.group {
		    zoom: 1; /* For IE 6/7 (trigger hasLayout) */
		}

		.form-box {
			background-color: #fff;
			border: 1px solid #ddd;
			width: 70%
		}

		.form-header {

			border-bottom: 1px solid #ddd;
			padding: 0 10px;
		}

		.form-footer {
			padding: 6px 10px;
		}

		.footer-message { float: left; line-height: 34px; color: #555 }

		.form-row {
			position: relative;
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}
		.form-row:before {
			content: '';
			width: 20%;
			background-color: #f9f9f9;
			border-right: 1px solid #ddd;
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
		}
		
		.form-input {
			padding-left: 20%;
		}

		.form-input .inner { padding: 0 8px; }

		.form-input .inner input { width: 100%; }

		label {
			position: absolute;
			top: 10px;
			left: 10px;
		}

		input[type="submit"] {
			padding: 8px 12px;
			background-color: #0073AA;
			border: none;
			color: #fff;
			border-radius: 6px;
			float: right;
		}

</style>

<div class="wrap">
	
	<div class="options">
			
			<div class="form-box">

				<form action="<?=get_admin_url();?>admin.php?page=xapi_settings" method="POST">
					
					<div class="form-header">
							
							<h3>xAPI LRS Settings</h3>
							
							<p>Update the API Endpoint credentials to send LRS Statements.</p>

					</div>
					
					<div class="form-row">
						
						<label for="progress_bar_value">API Endpoint</label>
						
						<div class="form-input"><div class="inner"><input type="text" value="<?php echo !empty($options) ? $options['xapi_endpoint'] : '';?>" name="xapi_endpoint" /></div></div>

					</div>

					<div class="form-row">
						
						<label for="progress_bar_value">Username</label>
						
						<div class="form-input"><div class="inner"><input type="text" value="<?php echo !empty($options) ? $options['xapi_username'] : '';?>" name="xapi_username" /></div></div>

					</div>

					<div class="form-row">
						
						<label for="progress_bar_value">Password</label>
						
						<div class="form-input"><div class="inner"><input type="password" value="<?php echo !empty($options) ? $options['xapi_password'] : '';?>" name="xapi_password" /></div></div>

					</div>

					<div class="form-footer group">

						<div class="footer-message"><?=isset($_POST['message']) ? $_POST['message'] : ''?></div>
						
						<input type="submit" name="publish">

					</div>

				</form>
			</div>

	</div>

</div>