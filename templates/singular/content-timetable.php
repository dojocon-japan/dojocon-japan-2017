<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php // the_content(); ?>
			<div class="timetable-outer">
				<div class="timetable-vertical-scroll-box">
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
									<h3><a href="#">はじめてプログラミングを学ぶ子供達にメンターがプログラミング以外に伝えるべきこと</a></h3>
									<p>[11:00-11:40]<br>
									<a href="#">橋爪 香織</a>
								</p>
								</li>
								<li class="duration-40min">
									<p class="category">コミュニティ</p>
									<h3>(仮) あなたが Dojo に参加する理由は何ですか?</h3>
									<p>[11:40-12:20]<br>
									向井 アリー、土居 安佳里、ながとみ ちはる</p>
								</li>
								<li class="duration-20min">
									<p class="category">コミュニティ</p>
									<h3>DojoとDojo、そして地域！みんなつながる合同イベントのすすめ</h3>
									<p>[12:20-12:40]　とがぞの</p>
								</li>
								<li class="duration-40min">
									<h3>お昼休み</h3>
									<p>[12:40-13:40]</p>
								</li>
								<li class="duration-20min">
									<h3>会場提供スポンサーセッション</h3>
									<p>[13:40-14:00]</p>
								</li>
								<li class="duration-30min">
									<p class="category">コンテスト</p>
									<h3>一次審査通過作品のプレゼンテーションと投票の説明</h3>
									<p>[14:00-14:30] </p>
								</li>
								<li class="duration-20min">
									<p class="category">コミュニティ</p>
									<h3>柏市教育委員会とCoderDojo Kashiwaの連携</h3>
									<p>[14:30-14:50]　宮島 衣瑛</p>
								</li>
								<li class="duration-40min">
									<p class="category">コミュニティ</p>
									<h3>(仮) あなたが Dojo を始めた理由は何ですか?</h3>
									<p>[14:50-15:30]<br>
									三橋 正美、鼠家 正則、小川 智史</p>
								</li>
								<li class="duration-20min">
									<h3>Tea Time</h3>
									<p>[15:30-15:50]</p>
								</li>
								<li class="duration-40min">
									<p class="category">Global</p>
									<h3>(仮) 世界の CoderDojo 紹介</h3>
									<p>[15:50-16:30]<br>
									Ross O’Neill</p>
								</li>
								<li class="duration-20min">
									<p class="category">Global</p>
									<h3>(仮) MagikCraft の紹介</h3>
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
									<h3>最優秀賞表彰式</h3>
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
									<h3>うちのDojoのココがすごいぞ自慢大会 [午前の部]</h3>
									<p>[10:40-11:10]</p>
								</li>
								<li class="duration-30min blank-before-5min">
									<h3>RossとJamesに英語で自己紹介してみよう！</h3>
									<p>[11:15-11:45]</p>
									<p class="label">要当日整理券</p>
								</li>
								<li class="duration-30min blank-before-10min">
									<h3>橋爪さんとお茶会しよう</h3>
									<p>[11:55-12:25]</p>
									<p class="label">要当日整理券</p>
								</li>
								<li class="duration-40min blank-before-15min">
									<h3>お昼休み</h3>
									<p>[12:40-13:40]</p>
								</li>
								<li class="duration-90min">
									<h3>未定</h3>
									<p>[13:40-15:10]</p>
								</li>
								<li class="duration-120min blank-before-5min">
									<h3>CoderDojo関係者とお茶会しよう</h3>
									<p>[15:15-17:15]</p>
									<p class="label">要当日整理券</p>
								</li>
								<li class="duration-30min">
									<h3>(仮)Dojo相談会</h3>
									<p>[17:15-17:45]</p>
								</li>
								<li class="duration-50min">
									<h3>うちのDojoのココがすごいぞ自慢大会 [午後の部]</h3>
									<p>[17:45-18:30]</p>
								</li>
							</ol>
							<ol>
								<li class="duration-160min">
									<h3>CoderDojoロゴコンテスト</h3>
									<p>[10:00-12:40]</p>
								</li>
								<li class="duration-40min">
									<h3>お昼休み</h3>
									<p>[12:40-13:40]</p>
								</li>
								<li class="duration-230min">
									<h3>CoderDojoロゴコンテスト</h3>
									<p>[13:40-17:30]</p>
								</li>
							</ol>
							<ol>
								<li class="duration-160min">
									<h3>Dojo日本地図-日本全国のCoderDojoを探してみよう-</h3>
									<p>[10:00-12:40]</p>
									<p class="label">忍者向け</p>
									<p class="label">メンター向け</p>
								</li>
								<li class="duration-40min">
									<h3>お昼休み</h3>
									<p>[12:40-13:40]</p>
								</li>
								<li class="duration-230min">
									<h3>Dojo日本地図-日本全国のCoderDojoを探してみよう-</h3>
									<p>[10:00-12:40]</p>
									<p class="label">忍者向け</p>
									<p class="label">メンター向け</p>
								</li>
							</ol>
						</div>
						<div class="column">
							<h2>図工</h2>
							<ol>
								<li class="duration-160min">
									<h3>テクノ手芸に挑戦！！LEDで光るフェルトマスコットを作ろう</h3>
									<p>[10:00-12:40]</p>
									<p class="label">忍者向け</p>
									<p class="label">要当日整理券</p>
								</li>
								<li class="duration-40min">
									<h3>お昼休み</h3>
									<p>[12:40-13:40]</p>
								</li>
								<li class="duration-230min">
									<h3>テクノ手芸に挑戦！！LEDで光るフェルトマスコットを作ろう</h3>
									<p>[10:00-12:40]</p>
									<p class="label">忍者向け</p>
									<p class="label">要当日整理券</p>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile ?>

</main>
