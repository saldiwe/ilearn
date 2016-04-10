<aside class="sidebar right-sidebar">
	<div class="widget profile">
		<div class="sidebar-pp" style="background-image: url('{{ $lms['profile']->cover_sm }}');"></div>
		<div class="profile-data text-center">
			<a href=""><img class="img-circle" src="{{ $lms['profile']->picture_md }}"></a>
			<h4 class="username">{{ $lms['profile']->fullname }}</h4>
			<p class="biography">{{ $lms['profile']->email }}</p>
		</div>
	</div>
	
	<div class="widget online">		
		<h5 class="heading">Sedang Online <small>· <a href="">Lihat Semua</a></small></h5>
		<ul class="friends">
			@forelse($lms['online'] as $online)
				<li><a href=""><i class="fa fa-circle"></i> {{ $online->fullname }}</a></li>
			@empty
				<li><small>Tidak ada user online.</small></li>
			@endforelse
		</ul>
	</div>
	
	<div class="widget tasks">
		<h5 class="heading">Tugas</h5>
		<ul class="task">
			<li><a href="">Matematika</a></li>
			<li><a href="">Produktif 24</a></li>
			<li><a href="">Bahasa Bali</a></li>
			<li><a href="">Bahasa Inggris</a></li>
		</ul>
	</div>

	<div class="widget footer">
		<p>&copy; 2015 iLearn.
			<a href="https://github.com/alfredcrosby/ilearn">Tentang</a> &middot; 
			<a href="https://github.com/alfredcrosby/ilearn/wiki">Bantuan</a> &middot; 
			<a href="https://github.com/alfredcrosby/ilearn/wiki">Dokumentasi</a> &middot; 
			<a href="https://github.com/alfredcrosby/ilearn/graphs/contributors">Kontribusi</a> &middot; 
		</p>
	</div>
</aside>