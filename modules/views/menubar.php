<div class="ui-state-default ui-corner-all ui-helper-clearfix">
	<ul id="main-menu" class="dropdown">
		<li>
			<a href="javascript:void(0)"><?php echo __('Database'); ?></a>
			<ul class="ui-state-default">
				<li class="db"><a class="irfrsh" href="javascript:objectsRefresh()" title="<?php echo __('Refresh database object list'); ?>"><?php echo __('Refresh'); ?></a></li>
			</ul>
		</li>

		<li>
			<a href="javascript:void(0)"><?php echo __('Information'); ?></a>
			<ul class="ui-state-default">
				<li class="option mysql4 mysql5 mysqli pgsql"><a href="javascript:infoServer()" title="<?php echo __('View server and connection details'); ?>"><?php echo __('Server/Connection Details'); ?></a></li>
				<li class="option mysql4 mysql5 mysqli pgsql"><a href="javascript:infoVariables()"
																								 title="<?php echo	__('View server configuration'); ?>"><?php echo __('Server Variables'); ?></a></li>
				<li class="db"><a href="javascript:infoDatabase()" title="<?php echo __('View current database summary stats'); ?>"><?php echo __('Database Summary'); ?></a></li>
			</ul>
		</li>

		<li class="right"><a class="ilgout" href="javascript:logout()" title="<?php echo __('Logout from this session'); ?>"><?php echo __('Logout'); ?></a></li>
	</ul>
</div>