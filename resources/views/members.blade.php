
	<article class="hero">
	    <h1 class="hero__header">{{ $group }}</h1>
	    <div class="memberlist">
	    	@foreach( $members as $member)
				<div class="member">
					<img src="{{ @$member['photo']['thumb_link'] }}" alt="{{ $member['name'] }}" class="member__avatar">
					<div class="member__joined-date">{{ $member['joined'] }}</div>
					<p class="member__bio">{{ @$member['bio'] }}</p>
				</div>
	    	@endforeach
	    </div>
	</article>
