<!-- Modal content-->
<div class="modal-content">
	<div class="modal-header" style="padding:35px 50px;">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
	</div>
	<div class="modal-body" style="padding:40px 50px;">
		<form role="form" method="post" action="ceklogin.php">
			<div class="form-group" method="post">
				<label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
				<input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
			</div>
			<div class="form-group" method="post">
				<label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
			</div>
			<button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
		</form>     
	</div>
</div>  
