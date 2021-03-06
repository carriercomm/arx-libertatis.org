<?
// Contact page

$p->inherit('frame');
$p->title = 'Contact';
$p->import('icons');

?>

<section>
	
	<h2>Contact</h2>
	
	<h3>IRC Channel</h3>
	
	<p>
		We mainly hang out in the <b><a href="<?= url('p:irc') ?>"><?= url('c:irc') ?></a></b> channel on the <a href="<?= url('p:freenode') ?>">freenode</a> network.<br>
		If you are new to IRC, please see the <a href="<?= url('wiki:IRC_channel') ?>">wiki page</a>!<br>
	</p>
	
	<p>
		An easy way to chat in <?= url('c:irc') ?> is to use the <b><a href="<?= url('p:chat') ?>">web-based client</a></b>.
	</p>
	
	<p>
		<?= url('c:irc') ?> is <a href="<?= url('p:irclogs') ?>">logged</a> for better communication across timezones. The logging bot has been kindly set up and is hosted by <a href="<?= url('p:opengameart') ?>">OpenGameArt.org</a>. 
	</p>
	
	<h3><?= $p->i_reddit ?></h3>
	
	<p>
		If your are more comfortable with message boards, feel free to post to <b><a href="<?= url('p:subreddit') ?>">/r/ArxFatalis</a></b>.
	</p>
	
	<h3>Forums</h3>
	
	<p>
		We don't have our own forum, but occasionally visit some of the existing <a href="<?= url('wiki:FAQ#Are_there_any_Arx_Libertatis_discussion_forums.3F') ?>">Arx Fatalis communities</a>:
	</p>
	<ul>
		<li><a href="<?= url('p:forum_arx')   ?>"><?= $p->bethesda_icon ?> Official Forum</a></li>
		<li><a href="<?= url('p:forum_ttlg')  ?>"><?= $p->ttlg_icon ?> TTLG Forum</a></li>
		<li><a href="<?= url('p:forum_gog')   ?>"><?= $p->gog_icon ?> GOG.com Forum</a></li>
		<li><a href="<?= url('p:forum_steam') ?>"><?= $p->steam_icon ?> Steam Users Forum</a></li>
		<li><a href="<?= url('p:comm_steam')  ?>"><?= $p->steam_icon ?> Steam Community</a></li>
		<li><a href="<?= url('p:group_steam') ?>"><?= $p->steam_icon ?> Steam Group</a></li>
	</ul>
	
	<h3><?= $p->bug_icon ?> Bug Tracker</h3>
	
	<p>
		If you have found a problem in Arx Libertatis, please <b><a href="<?= url('p:bugs') ?>">open a bug report</a></b>.
	</p>
	
</section>

<section>
	
	<h2>Webmaster</h2>
	
	<p class="center">
		This website is hosted and administered by
		<span itemscope itemtype="http://schema.org/Person">
			<a href="<?= url('p:constexpr') ?>" itemprop="url"><span itemprop="name"><?= $p->i_daniel ?></span></a>.
		</span>
	</p>
	
</section>
