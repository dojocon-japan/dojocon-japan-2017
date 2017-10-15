<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">

<ul class="timetable-tabs js-timetable-tabs">
	<li class="all">すべて</li>
	<li class="session">セッション</li>
	<li class="foyer">交流スペース</li>
	<li class="arts-crafts">図工</li>
	<li class="board-game">ボードゲーム</li>
	<li class="hands-on">ハンズオン</li>
	<li class="vr">VR</li>
	<li class="robot">ロボ</li>
	<li class="stamp-rally">スタンプラリー</li>
</ul>

<div class="table-outermost">
	<div class="table-scroll-box js-table-scroll-box">
		<div class="timetable js-timetable">
			<div class="column time-column">
				<h2>時間</h2>
				<ol class="time">
					<li>10:00</li>
					<li>10:30</li>
					<li>11:00</li>
					<li>11:30</li>
					<li>12:00</li>
					<li>12:30</li>
					<li>13:00</li>
					<li>13:30</li>
					<li>14:00</li>
					<li>14:30</li>
					<li>15:00</li>
					<li>15:30</li>
					<li>16:00</li>
					<li>16:30</li>
					<li>17:00</li>
					<li>17:30</li>
					<li class="duration-35min">18:00</li>
				</ol>
			</div>
			<div class="column session-column">
				<h2>セッション</h2>
				<ol class="sessions">
					<li class="duration-10min blank-before-30min">
						<h3>オープニングセレモニー</h3>
						<p>[10:30-10:40]　細谷 崇</p>
					</li>
					<li class="duration-20min">
						<h3>未定</h3>
						<p>[10:40-11:00]</p>
					</li>
					<li class="duration-40min">
						<p class="category">基調講演</p>
						<h3>はじめてプログラミングを学ぶ子供達にメンターがプログラミング以外に伝えるべきこと</h3>
						<p>[11:00-11:40]<br>
						橋爪 香織</p>
					</li>
					<li class="duration-40min">
						<p class="category">コミュニティ</p>
						<h3>あなたが Dojo に参加する理由は何ですか?</h3>
						<p>[11:40-12:20]<br>
						向井 アリー、土居 安佳里、ながとみ ちはる</p>
					</li>
					<li class="duration-20min">
						<p class="category">コミュニティ</p>
						<h3>DojoとDojo、そして地域！みんなつながる合同イベントのすすめ</h3>
						<p>[12:20-12:40]　とがぞの</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-20min">
						<h3>会場提供スポンサーセッション</h3>
						<p>[13:40-14:00]</p>
					</li>
					<li class="duration-30min">
						<p class="category">コンテスト</p>
						<h3><a href="https://dojocon2017.coderdojo.jp/sessions/785/">一次審査通過作品のプレゼンテーション</a></h3>
						<p>[14:00-14:30] </p>
					</li>
					<li class="duration-20min">
						<p class="category">コミュニティ</p>
						<h3>柏市教育委員会とCoderDojo Kashiwaの連携</h3>
						<p>[14:30-14:50]　宮島 衣瑛</p>
					</li>
					<li class="duration-40min">
						<p class="category">コミュニティ</p>
						<h3>あなたが Dojo を始めた理由は何ですか?</h3>
						<p>[14:50-15:30]<br>
						三橋 正美、鼠家 正則、小川 智史</p>
					</li>
					<li class="duration-20min">
						<h3>[Tea Time] CoderDojo Japan による活動報告</h3>
						<p>[15:30-15:50]<br>
						安川 要平</p>
					</li>
					<li class="duration-40min">
						<p class="category">Global</p>
						<h3>(仮) 世界の CoderDojo 紹介</h3>
						<p>[15:50-16:30]<br>
						Ross O’Neill</p>
					</li>
					<li class="duration-20min">
						<p class="category">Global</p>
						<h3>(仮) Magikcraft の紹介</h3>
						<p>[16:30-16:50]<br>
						Josh Wulf</p>
					</li>
					<li class="duration-20min">
						<p class="category">テック</p>
						<h3>Scratch からつながる電子工作のプログラミング</h3>
						<p>[16:50-17:10]<br>
						尾篭 盛</p>
					</li>
					<li class="duration-20min">
						<p class="category">テック</p>
						<h3>私とゲームと詰めScratch</h3>
						<p>[17:10-17:30]<br>
						おおやけ ハジメ</p>
					</li>
					<li class="duration-40min">
						<p class="category">特別講演</p>
						<h3>(仮) CoderDojo はじまりと未来</h3>
						<p>[17:30-18:10]<br>
						James Welton</p>
					</li>
					<li class="duration-15min">
						<p class="category">コンテスト</p>
						<h3><a href="https://dojocon2017.coderdojo.jp/sessions/789/">最優秀賞表彰式</a></h3>
						<p>[18:10-18:25]</p>
					</li>
					<li class="duration-10min">
						<h3>クロージング</h3>
						<p>[18:25-18:30]　細谷 崇</p>
					</li>
				</ol>
			</div>
			<div class="column foyer-column">
				<h2>交流スペース</h2>
				<ol>
					<li class="duration-30min blank-before-40min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">うちのDojoのココがすごいぞ自慢大会 [午前の部]</a></h3>
						<p>[10:40-11:10]</p>
					</li>
					<li class="duration-30min blank-before-5min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">RossとJamesに英語で自己紹介してみよう！</a></h3>
						<p>[11:15-11:45]</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-30min blank-before-10min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">橋爪さんとお茶会しよう</a></h3>
						<p>[11:55-12:25]</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-60min blank-before-15min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-90min">
						<h3>マインクラフトのModでプログラミング体験！</h3>
						<p>[13:40-15:10]</p>
					</li>
					<li class="duration-120min blank-before-5min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">CoderDojo関係者とお茶会しよう</a></h3>
						<p>[15:15-17:15]</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-30min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">相談・意見・感想…あなたの声をきかせて！CoderDojo相談会</a></h3>
						<p>[17:15-17:45]</p>
					</li>
					<li class="duration-50min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/main-event/">うちのDojoのココがすごいぞ自慢大会 [午後の部]</a></h3>
						<p>[17:45-18:30]</p>
					</li>
				</ol>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/404/">CoderDojoロゴコンテスト</a></h3>
						<p>[10:00-12:40]</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/404/">CoderDojoロゴコンテスト</a></h3>
						<p>[13:40-17:30]</p>
					</li>
				</ol>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/848/">Dojo日本地図-日本全国のCoderDojoを探してみよう-</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">メンター向け</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/848/">Dojo日本地図-日本全国のCoderDojoを探してみよう-</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">メンター向け</p>
					</li>
				</ol>
			</div>
			<div class="column arts-crafts-column">
				<h2>図工</h2>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/312/">テクノ手芸に挑戦！！LEDで光るフェルトマスコットを作ろう</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/312/">テクノ手芸に挑戦！！LEDで光るフェルトマスコットを作ろう</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
				</ol>
			</div>
			<div class="column board-game-column">
				<h2>ボードゲーム</h2>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/840/">ボードゲームでプログラミング的思考を楽しもう</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/840/">ボードゲームでプログラミング的思考を楽しもう</a></h3>
						<p>[13:40-17:30]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
				</ol>
			</div>
			<div class="column hands-on-column">
				<h2>ハンズオン</h2>
				<ol>
					<li class="duration-145min blank-before-15min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/647/">Scratchで「迷路ゲーム」を作ろう！</a></h3>
						<p>[10:15-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
					<li class="duration-20min">
						<h3>お昼休み</h3>
						<p>[12:40-13:00]</p>
					</li>
					<li class="duration-40min">
						<h3>Raspberry Pi展示+相談会</h3>
						<p>[13:00-13:40]</p>
						<p class="label">メンター向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
					<li class="duration-30min">
						<h3>Raspberry Piを活用に導くためのおすすめアイテム&アイデア</h3>
						<p>[13:40-14:10]</p>
						<p class="label">メンター向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
					<li class="duration-30min blank-before-10min">
						<h3>Raspberry PiとノートPCを繋げよう</h3>
						<p>[14:20-14:50]</p>
						<p class="label">メンター向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
					<li class="duration-50min blank-before-10min">
						<h3>ScratchやPythonでフィジカルコンピューティング</h3>
						<p>[15:00-15:50]</p>
						<p class="label">メンター向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
					<li class="duration-60min blank-before-10min">
						<h3>Raspberry Pi展示+相談会+LT大会</h3>
						<p>[16:00-17:00]</p>
						<p class="label">メンター向け</p>
						<p class="label label-entry">要事前申込</p>
					</li>
				</ol>
			</div>
			<div class="column vr-column">
				<h2>VR</h2>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/498/">ふしぎマニューバーでふかし体験！</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/498/">ふしぎマニューバーでふかし体験！</a></h3>
						<p>[13:40-17:30]</p>
						<p class="label label-for_ninja">忍者向け</p>
					</li>
				</ol>
			</div>
			<div class="column robot-column">
				<h2>ロボ</h2>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/344/">スクラッチでロボホンと遊ぼう！</a></h3>
						<p>[10:00-12:40]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/344/">スクラッチでロボホンと遊ぼう！</a></h3>
						<p>[13:40-17:30]</p>
						<p class="label label-for_ninja">忍者向け</p>
						<p class="label">要当日整理券</p>
					</li>
				</ol>
			</div>
			<div class="column stamp-rally-column">
				<h2>スタンプラリー</h2>
				<ol>
					<li class="duration-160min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/412/">チャンピオンを探せ！モバイルスタンプラリー</a></h3>
						<p>[10:00-12:40]</p>
					</li>
					<li class="duration-60min">
						<h3>お昼休み</h3>
						<p>[12:40-13:40]</p>
					</li>
					<li class="duration-230min">
						<h3><a href="https://dojocon2017.coderdojo.jp/workshops/412/">チャンピオンを探せ！モバイルスタンプラリー</a></h3>
						<p>[13:40-17:30]</p>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>

		</div>

	<?php endwhile ?>

</main>
