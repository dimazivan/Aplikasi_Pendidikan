<footer>
	<p>
		<span id="loadtime">This site load&nbsp;
			{{
			number_format((float)(microtime(true) - LARAVEL_START), 2, '.', '');
			}}
			&nbsp;seconds to render</span>
		<span>||</span>
		<span id="time">Loading time...</span>
		<span>||</span>
		Dimaz Ivan Perdana -<a href="https://linktr.ee/dimazivan" target="_blank">&nbsp;Developer</a>
	</p>
</footer>