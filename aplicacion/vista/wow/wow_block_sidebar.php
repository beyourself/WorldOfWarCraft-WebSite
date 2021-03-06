<!-- Start: Sidebar -->
<?php
$sidebar_data = "'sotd', 'forums'";
?>
<?php
if(WoW_Account::IsLoggedIn() && WoW_Account::IsHaveActiveCharacter()) {
    $sidebar_data = "'auctions','guild-news','friends','forums','sotd','under-dev','social-media'";
?>

<div class="sidebar-module" id="sidebar-auctions">
    <div class="sidebar-title">
        <h3 class="title-auctions"><?php echo WoW_Locale::GetString('template_auction_auction'); ?></h3>
    </div>
    <div class="sidebar-content loading"></div>
</div>

<div class="sidebar-module" id="sidebar-guild-news">
    <div class="sidebar-title">
        <h3 class="title-guild-news"><?php echo WoW_Locale::GetString('template_guild_news_sidebar'); ?></h3>
    </div>
    <div class="sidebar-content loading"></div>
</div>

<div class="sidebar-module" id="sidebar-friends">
    <div class="sidebar-title">
        <h3 class="title-friends"><?php echo WoW_Locale::GetString('template_character_friends_sidebar'); ?></h3>
    </div>
    <div class="sidebar-content loading"></div>
</div>

<?php
}
?>
<!-- Under-DEV / En Desarrollo Start --> 
<div class="sidebar-module " id="sidebar-under-dev" style="">
	<div class="sidebar-title">
		<h3 class="category title-under-dev">
		    <a href="/wow/es/game/patch-notes/under-dev"><?php echo WoW_Locale::GetString('template_under_development'); ?></a>
		</h3>
	</div>
		<div class="sidebar-content">
		<a href="/wow/es/game/patch-notes/under-dev" class="sidebar-under-dev"></a>
		<ul id="under-dev" class="trending-topics"><ul></ul></ul>
	</div>
</div>
<!-- Under-DEV / En Desarrollo finish --> 

<div class="sidebar-module" id="sidebar-sotd">
    <div class="sidebar-title">
        <h3 class="title-sotd"><?php echo WoW_Locale::GetString('template_sotd_sidebar_title'); ?></h3>
    </div>
    <div class="sidebar-content loading"></div>
</div>

<!-- Social-Media / Social-Media Start --> 
<div class="sidebar-module " id="sidebar-social-media" style="">
	<div class="sidebar-title">
	    <h3 class="category title-social-media"><?php echo WoW_Locale::GetString('template_stay_connected'); ?></h3>
	</div>
	<div class="sidebar-content">
		<ul class="social-media">
			<li class="atom-feed">
				<a href="/wow/es/feed" target="_blank"></a>
			</li>
			<li class="facebook">
				<a href="https://www.facebook.com/<?php echo WoWConfig::$FacebookAccount ?>" title="<?php echo WoWConfig::$ServerName ?><?php echo WoW_Locale::GetString('social_facebook'); ?>"></a>
			</li>
			<li class="vk">
				<a href="" title=""></a>
			</li>
			<li class="twitter">
				<a href="http://www.twitter.com/<?php echo WoWConfig::$TwitterAccount ?>" title="<?php echo WoWConfig::$ServerName ?><?php echo WoW_Locale::GetString('social_Twitter'); ?>"></a>
			</li>
			<li class="youtube">
				<a href="http://www.youtube.com/user/<?php echo WoWConfig::$YoutubeAccount ?>" title="<?php echo WoWConfig::$ServerName ?><?php echo WoW_Locale::GetString('social_youtube'); ?>"></a>
			</li>
			<li class="reddit">
				<a href="http://www.reddit.com/r/<?php echo WoWConfig::$RedditAccount ?>" title="<?php echo WoWConfig::$ServerName ?><?php echo WoW_Locale::GetString('social_reddit'); ?>"></a>
			</li>
		<span class="clear"><!-- --></span>
		</ul>
	</div>
</div>
<!-- Social-Media / Social-Media finish --> 

<!-- Forums / Foro Start --> 
<div class="sidebar-module" id="sidebar-forums">
    <div class="sidebar-title">
        <h3 class="title-forums"><?php echo WoW_Locale::GetString('template_forums_sidebar_title'); ?></h3>
    </div>
    <div class="sidebar-content loading"></div>
</div>
<script type="text/javascript">
    //<![CDATA[
        $(function() {
            App.sidebar([<?php echo $sidebar_data; ?>]);
        });
    //]]>
</script>
<!-- End: Sidebar -->
