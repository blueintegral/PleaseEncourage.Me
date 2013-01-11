<?php
header("Cache-Control: no-cache");

$settings['quotes'] = array(
'Never, ever, ever give up.',
'If you are about to give up, you are closer than you think.',
'You are unstoppable.',
'You got this.',
'Fight! Fight no matter what!',
'Courage is resistance to fear, mastery of fear - not absence of fear.',
'You must do the things you think you cannot do.',
'Courage is doing what you\'re afraid to do.
There can be no courage unless you\'re scared.',
'When you feel like giving up, remember why you held on for so long in the first place.',
'Don\'t give yourself reasons why you can\'t, give yourself reasons why you can.',
'When you come to the end of your rope, tie a knot and hang on.',
'If you have made mistakes, there is always another chance for you. You may have a fresh start any moment you choose, for this thing we call \'failure\' is not the falling down, but the staying down.',
'Fall down seven times, stand up eight.',
'If you\'re going through hell, keep going. -Winston Churchill',
'Keep a green bough in your heart, and the singing bird will come',
'Every adversity, every failure, every heartache carries with it the seed on an equal or greater benefit.',
'Never give up, for that is just the place and time that the tide will turn.',
'Achievement seems to be connected with action. Successful men and women keep moving. They make mistakes, but they don\'t quit.',
'Don\'t give up. There are too many nay-sayers out there who will try to discourage you. Don\'t listen to them. The only one who can make you give up is yourself.',
'Energy and persistence conquer all things. ',
'If at first you don\'t succeed, you\'re running about average.',
'Nobody can make you feel inferior without your consent.',
'Tomorrow will be better. I promise.',
'When everything seems to be going against you, remember that the airplane takes off against the wind, not with it.',
'Your chances of success in any undertaking can always be measured by your belief in yourself. ',
'Never bend your head. Always hold it high. Look the world straight in the face.',
'It ain\'t what they call you, it\'s what you answer to. ',
'Don\'t you dare give up.',
'What doesn\'t kill us makes us stronger. And you\'re not dead.',
'You\'re an amazing person.',
'You\'re wiser than people realize.',
'If an awesome factory had an explosion, you would be the result.',
'You are chock full of awesome.',
'Life is tough, but you must be tougher.',
'It\'s not what happens to you, but how you react to it that matters. ',
'Whatever you\'re going through, many others have not only experienced the same but got out of it just fine.',
'Every failure is a step closer to success.',
'In the middle of every difficulty lies opportunity.',
'Ah, Hope! what would life be, stripped of thy encouraging smiles, that teach us to look behind the dark clouds of today, for the golden beams that are to gild the morrow. -Susanna Moodie',
'You can do it!',
'Don\'t quit!',
'There, there. - Sheldon Cooper',
'Problems are only opportunities with thorns on them.',
'Never give in.',
'If you are confronted by any kind of problem, personal or otherwise, there is a way to solve it.',
'Be all that you are capable of becoming.',
'Bite off more than you can chew. THEN CHEW IT.',
'An obstacle is only something you haven\'t torn through yet.',
'Nothing\'s gonna stand in your way.',
'Depressions breeds depression. Effort breeds success.',
'If you never give up, you never lose.',
'YOU ARE AWESOME. GO AND PROVE IT.',
'Even if you fall on your face, you\'re still moving forward.',
'You have no limits.',
'Better to die on your feet than live on your knees.',
'If life asks for your all, GIVE IT EVEN MORE.',
'Chuck Norris checks his closet for <i>you</i>.',
'The only true failure is accepting failure.',
'Never gonna give you up.',
'Pain is weakness leaving the body.',
'The best way out is through.',
'Who\'s the boss? You are.',
'Concieve, plan, execute.',
'Look me in the eyes. You. Can. Do. This.',
'Reach the finish line. Then keep going.',

);

//Get a random string from the array
	$txt = $settings['quotes'][array_rand($settings['quotes'])];

	
	//Print it to the page
	echo $txt;

?>
