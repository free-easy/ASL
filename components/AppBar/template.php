<script src="init.js"></script>

<div class="ui menu inverted borderless attached">
	<div class="header item">
		Piattaforma ASL
	</div>
	<div class="right menu">
		<div class="ui dropdown item">
			<span style="margin-right: 10px; font-weight: bolder">
				<?php echo $model["profile"]["name"] ?>
			</span>
			<img src="assets/user.png" style="height: 24px; width: 24px;" class="ui circular image" />
			<i class="dropdown icon"></i>
			<div class="menu">
				<div class="item">
					<?php echo $model["user"]["email"] ?>
				</div>
				<a class="item" href="/pages/profile/">
					<i class="setting icon"></i>
					Profilo
				</a>
				<div class="divider"></div>
				<a class="item" id="logout">
					<i class="sign out icon"></i>
					Logout
				</a>
			</div>
		</div>
	</div>
</div>

