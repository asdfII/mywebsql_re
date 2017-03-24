<div class="ui-state-default ui-corner-all ui-helper-clearfix">
	<ul id="main-menu" class="dropdown">
		<li>
			<a href="javascript:void(0)"><?php echo __('Database'); ?></a>
			<ul class="ui-state-default">
				<li class="db"><a class="irfrsh" href="javascript:objectsRefresh()" title="<?php echo __('Refresh database object list'); ?>"><?php echo __('Refresh'); ?></a></li>
			</ul>
		</li>

		<li class="option mysql4 mysql5 mysqli pgsql sqlite sqlite3">
			<a href="javascript:void(0)"><?php echo __('Tools'); ?></a>
			<ul class="ui-state-default">
				<li><a class="itopts" href="javascript:toolsOptions()" title="<?php echo __('Configure application options'); ?>"><?php echo __('Options'); ?></a></li>
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

		<li>
			<a href="javascript:void(0)"><?php echo __('Interface'); ?></a>
			<ul>
				<li><a href="javascript:void(0)"><?php echo __('UI Theme'); ?></a>
					<ul class="ui-state-default">
						{{THEMES_MENU}}
					</ul>
				</li>
				<li><a href="javascript:void(0)"><?php echo __('Language'); ?></a>
					<ul id="menu-language" class="ui-state-default">
						{{LANGUAGE_MENU}}
					</ul>
				</li>
				<li><a href="javascript:void(0)"><?php echo __('SQL Editor'); ?></a>
					<ul class="ui-state-default">
						{{EDITOR_MENU}}
					</ul>
				</li>
				<li><a href="javascript:void(0)"><?php echo __('Show/Hide Panel'); ?></a>
					<ul class="ui-state-default">
						<li><a href="javascript:main_layout.toggle('west')" title="<?php echo __('Toggle Object Viewer'); ?>"><?php echo __('Database Objects'); ?></a></li>
						<li><a href="javascript:data_layout.toggle('south')" title="<?php echo __('Toggle SQL Editor'); ?>"><?php echo __('SQL Editor'); ?></a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li>
			<a href="javascript:void(0)"><?php echo __('Help'); ?></a>
			<ul class="ui-state-default">
				<li><a class="ihlp" href="javascript:helpShowAll()" title="<?php echo __('Learn the basics of using MyWebSQL'); ?>"><?php echo __('Help contents'); ?></a></li>
				<li class="db"><a class="itutor" href="javascript:helpQuickTutorial()" title="<?php echo __('See quick hands-on tutorial of MyWebSQL interface'); ?>"><?php echo __('QuickStart Tutorials'); ?></a></li>
				<li><a class="idocs" href="javascript:helpOnlineDocs()" title="<?php echo __('View online documentation on project website'); ?>"><?php echo __('Online documentation'); ?></a></li>
				<li><a class="iftr" href="javascript:helpRequestFeature()" title="<?php echo __('If you would like your most favourite feature to be part of MyWebSQL, please click here to inform about it'); ?>"><?php echo __('Request a Feature'); ?>...</a></li>
				<li><a class="ibug" href="javascript:helpReportBug()" title="<?php echo __('If you have found a problem, or having trouble using the application, please click here to report the problem'); ?>"><?php echo __('Report a Problem'); ?></a></li>
				<li><a href="javascript:helpCheckUpdates()" title="<?php echo __('Check for updated versions of the application online'); ?>"><?php echo __('Check for updates'); ?></a></li>
			</ul>
		</li>

		<li class="right"><a class="ilgout" href="javascript:logout()" title="<?php echo __('Logout from this session'); ?>"><?php echo __('Logout'); ?></a></li>
	</ul>
</div>