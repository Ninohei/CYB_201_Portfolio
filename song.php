<?php 

// Name: Sinamban, Harvey Jireh C.
// Section: CYB-201


	// I Initialized all the needed variables first
	$title = "Collide";
	$artist = "Howie Day";
	$mood = "Longing";
	
	// I used String values to some variables to showcase Type Juggling
	$verseCount = 1 + '2';
	$repeatChorus = '2';
	$bridgeCount = '1';
	$verse1NumLines = 2 * 2;
	$verse2NumLines = 4;
	$verse3NumLines = 4;
	$bridgeNumLines = '3';
	$chorus1NumLines = '5';
	$chorus2NumLines = '5';

	// These are the variables with numeric operators involved
	$totalNumLines = $verse1NumLines + $verse2NumLines + $verse3NumLines + $chorus1NumLines + $chorus2NumLines + $bridgeNumLines + $chorus1NumLines;
	$totalSections = $verseCount + $repeatChorus + $bridgeCount;

	// I listed here all the nouns, verbs, and adjectives included in the lyrics
	$nouns = ["dawn", "light", "face", "Light", "best", "words", "doubt", "mind", "impression", "stars", "back", "time", "place"];
	$verbs = ["is", "breaking", "shining", "waking", "tangled", "follow", "go", "worry", "see", "fall", "seem", "rhyme", "fills", "find", "collide", "make", "found", "know", "refuse","shine", "stop"];
	$adjectives = ["open", "closed", "wrong", "quiet", "first", "scared", "lost", "close"];

	// This is where I divided the sections for the part of the song
	$verse1 = ["The $nouns[0] $verbs[0] $verbs[1]", "A $nouns[1] $verbs[2] through", "You're barely $verbs[3]", "And I'm $verbs[4] in you", "Yeah"];

	$verse2 = ["But I'm $adjectives[0], you're $adjectives[1]", "Where I $verbs[5], you'll $verbs[6]", "I $verbs[7] I won't $verbs[8] your $nouns[2]", "$nouns[3] up again"];

	$chorus1 = ["Even the $nouns[4] $verbs[9] down sometime", "Even the $adjectives[2] $nouns[5] $verbs[10] to $verbs[11]", "Out of the $nouns[6] that $verbs[12] my $nouns[7]", "I somehow $verbs[13]", "You and I $verbs[14]"];

	$verse3 = ["I'm $adjectives[3], you $verbs[17]", "You $verbs[15] a $adjectives[4] $nouns[8]", "I've $verbs[16] I'm $adjectives[5] to $verbs[17]", "I'm always on your $nouns[7]"];

	$chorus2 = ["Even the $nouns[4] $verbs[9] down sometime", "Even the $nouns[9] $verbs[18] to $verbs[19]", "Out of the $nouns[10], you $verbs[9] in $nouns[11]", "I somehow $verbs[13]", "You and I $verbs[14]"];

	$bridge = ["Don't $verbs[20] here", "I $adjectives[6] my $nouns[12]", "I'm $adjectives[7] behind"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRLM HandsOn Mod1.2: PHP Lyric Remix</title>
		
	<!-- I used inline CSS since the submission requires only the PHP file -->
	<style>
		body {
		    margin: 0;
		    background-image: url('https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg');
		    background-position: center;
		    font-family: Arial, sans-serif;
		}

		.song {
		    background: rgba(0, 0, 0, 0.7);
		    color: white;
		    padding: 50px;
		    text-align: center;
		}

		h1 {
		    font-size: 80px;
		    margin: 0 0 30px 0;
		}

		p {
		    font-size: 24px;
		    line-height: 1.8;
		}

		.details {
			background: rgba(0, 0, 0, 0.7);
		    color: white;
		    padding: 50px;
		    text-align: center;
		}

		.details p {
			font-size: 16px;
		    line-height: 1.8;
		}
	</style>
</head>

<body>
	<!-- This is where the main part of the song will be displayed -->
	<div class="song">
		
		<!-- Title -->
		<h1><i><?= $title?></i></h1>
		<p>By: <?= $artist?></p>

		<!-- Lyrics -->
		<p>[Verse 1] <br> <?= $verse1[0] ?> <br> <?= $verse1[1] ?> <br> <?= $verse1[2] ?> <br> <?= $verse1[3] ?></p>
		<p>[Verse 2] <br> <?= $verse2[0] ?> <br> <?= $verse2[1] ?> <br> <?= $verse2[2] ?> <br> <?= $verse2[3] ?></p>
		<p>[Chorus] <br> <?= $chorus1[0] ?> <br> <?= $chorus1[1] ?> <br> <?= $chorus1[2] ?> <br> <?= $chorus1[3] ?> <br> <?= $chorus1[4] ?></p>
		<p>[Verse 3] <br> <?= $verse3[0] ?> <br> <?= $verse3[1] ?> <br> <?= $verse3[2] ?> <br> <?= $verse3[3] ?></p>
		<p>[Chorus] <br> <?= $chorus2[0] ?> <br> <?= $chorus2[1] ?> <br> <?= $chorus2[2] ?> <br> <?= $chorus2[3] ?> <br> <?= $chorus2[4] ?></p>
		<p>[Bridge] <br> <?= $bridge[0] ?> <br> <?= $bridge[1] ?> <br> <?= $bridge[2] ?></p>
		<p>[Chorus] <br> <?= $chorus1[0] ?> <br> <?= $chorus1[1] ?> <br> <?= $chorus1[2] ?> <br> <?= $chorus1[3] ?> <br> <?= $chorus1[4] ?></p>
	</div>
	
	<!-- This is where the additional part of the song will be displayed -->
	<div class="details">
		<p>Total Number of Lines: <?= $totalNumLines ?></p>
		<p>Verse Count: <?= $verseCount ?></p>
		<p>Chorus Repeat: <?= $repeatChorus ?></p>
		<p>Total Sections: <?= $totalSections ?></p>
	</div>

</body>
</html>