<?php
/**
 * MainMenu
 * @author Ilja Tihhanovski <ilja.tihhanovski@gmail.com>
 * @copyright (c) 2015 Intellisoft OÜ
 *
 */

	class SquaredUserMenu extends HtmlComponent
	{
		public function toHtml()
		{
			return '<div class="squaredUserMenu">
					<div>
						<!--a href="JavaScript:logout();"><?=t("Logout")?></a-->
						<!--i class="userMenuItem fa fa-share-alt" aria-hidden="true"></i></a-->
						<i onclick="Javascript:app.userMenu();" class="userMenuItem fa fa-user" aria-hidden="true"></i>
						<!--i class="userMenuItem fa fa-cog" aria-hidden="true"></i-->
					</div>
				</div>';
		}
	}