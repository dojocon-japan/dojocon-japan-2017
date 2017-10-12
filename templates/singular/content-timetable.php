<main class="main">

	<?php while( have_posts() ): the_post(); ?>

		<?php if ( ! get_field( 'hide-post-thumbnail' ) && has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php // the_content(); ?>
			<div class="timetable">
				<div class="time-column">
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
						<li>18:00</li>
					</ol>
				</div>
				<div class="session-column">
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
							<h3>(仮) あなたが Dojo に参加する理由は何ですか?</h3>
							<p>[11:40-12:20]<br>
							向井 アリー、土居 安佳里、ながとみ ちはる</p>
						</li>
						<li class="duration-40min">
							<p class="category">コミュニティ</p>
							<h3>DojoとDojo、そして地域！みんなつながる合同イベントのすすめ</h3>
							<p>[12:20-12:40]<br>
							とがぞの</p>
						</li>
						<li class="duration-40min">
							<h3>お昼休み</h3>
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
							<p>[14:30-14:50]<br>
							宮島 衣瑛</p>
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
						<li class="duration-5min">
							<h3>クロージング</h3>
							<p>[18:25-18:30]　細谷 崇</p>
						</li>
					</ol>
				</div>
			</div>
		</div>

	<?php endwhile ?>

</main>
