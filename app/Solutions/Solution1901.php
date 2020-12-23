<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1901 extends Solution
{
	public $ready = true;

	private const RULES =
	[
		'7: 128 83 | 90 111',
		'67: 128 128',
		'73: 83 128',
		'38: 90 55 | 128 126',
		'69: 90 49 | 128 7',
		'82: 122 128 | 111 90',
		'55: 90 128 | 128 128',
		'44: 51 90 | 123 128',
		'25: 128 10 | 90 135',
		'109: 128 16 | 90 68',
		'129: 97 132',
		'21: 97 128 | 111 90',
		'71: 128 95 | 90 110',
		'43: 128 104 | 90 134',
		'120: 90 97 | 128 67',
		'59: 77 90 | 95 128',
		'50: 95 90',
		'127: 90 106 | 128 61',
		'35: 90 104 | 128 45',
		'83: 128 90',
		'10: 62 90 | 63 128',
		'1: 90 112 | 128 103',
		'57: 99 90 | 40 128',
		'40: 128 2 | 90 93',
		'2: 83 128 | 83 90',
		'91: 128 96 | 90 64',
		'45: 128 90 | 90 90',
		'110: 90 90',
		'123: 128 87 | 90 79',
		'104: 128 132 | 90 90',
		'121: 95 128 | 111 90',
		'111: 90 128 | 90 90',
		'124: 128 108 | 90 54',
		'88: 55 128 | 26 90',
		'125: 128 126 | 90 83',
		'58: 90 78 | 128 14',
		'118: 55 90 | 134 128',
		'48: 116 90 | 86 128',
		'130: 23 90 | 97 128',
		'61: 90 43 | 128 56',
		'78: 90 47 | 128 37',
		'128: "b"',
		'99: 128 114 | 90 7',
		'87: 128 111 | 90 23',
		'84: 128 62 | 90 101',
		'135: 34 90 | 30 128',
		'41: 90 121 | 128 100',
		'63: 45 90 | 122 128',
		'115: 118 90 | 94 128',
		'37: 97 90 | 55 128',
		'23: 132 132',
		'65: 128 45',
		'98: 128 1 | 90 70',
		'36: 90 69 | 128 19',
		'122: 90 128',
		'32: 128 50 | 90 85',
		'114: 23 128 | 67 90',
		'17: 128 83 | 90 55',
		'103: 128 102 | 90 22',
		'79: 128 67 | 90 134',
		'94: 90 111 | 128 97',
		'30: 128 122 | 90 77',
		'89: 132 55',
		'100: 122 128 | 126 90',
		'11: 42 31',
		'18: 21 90 | 7 128',
		'86: 117 128 | 17 90',
		'33: 95 90 | 111 128',
		'6: 65 90 | 100 128',
		'102: 35 90 | 49 128',
		'14: 39 90 | 53 128',
		'66: 83 90 | 67 128',
		'105: 104 128 | 126 90',
		'47: 90 26 | 128 122',
		'16: 90 44 | 128 25',
		'72: 97 128 | 55 90',
		'53: 55 128 | 122 90',
		'112: 128 6 | 90 124',
		'75: 128 82 | 90 94',
		'70: 90 24 | 128 52',
		'31: 98 128 | 109 90',
		'126: 90 90 | 128 128',
		'49: 23 90 | 111 128',
		'28: 90 130 | 128 129',
		'54: 90 110 | 128 45',
		'97: 128 90 | 90 128',
		'80: 127 128 | 119 90',
		'107: 128 133 | 90 92',
		'27: 90 117 | 128 88',
		'60: 90 23 | 128 134',
		'0: 8 11',
		'39: 23 90 | 55 128',
		'13: 134 90 | 67 128',
		'52: 115 90 | 41 128',
		'77: 128 90 | 132 128',
		'117: 128 67 | 90 83',
		'90: "a"',
		'76: 134 132',
		'26: 128 90 | 128 128',
		'4: 58 128 | 9 90',
		'20: 128 111 | 90 77',
		'42: 46 128 | 15 90',
		'116: 89 128 | 131 90',
		'9: 18 90 | 84 128',
		'5: 90 134 | 128 77',
		'113: 128 76 | 90 20',
		'95: 90 128 | 132 90',
		'92: 113 128 | 32 90',
		'12: 128 72 | 90 66',
		'8: 42',
		'74: 128 111 | 90 122',
		'15: 3 90 | 107 128',
		'24: 28 128 | 81 90',
		'34: 90 67 | 128 95',
		'3: 48 90 | 91 128',
		'131: 132 26',
		'51: 73 128 | 60 90',
		'93: 126 90 | 67 128',
		'108: 134 90 | 95 128',
		'68: 57 128 | 36 90',
		'133: 29 90 | 27 128',
		'64: 38 90 | 59 128',
		'56: 126 132',
		'62: 128 122 | 90 97',
		'85: 128 134 | 90 26',
		'96: 33 90 | 5 128',
		'132: 90 | 128',
		'29: 5 128 | 74 90',
		'81: 128 105 | 90 17',
		'119: 90 12 | 128 75',
		'101: 134 90',
		'22: 128 131 | 90 71',
		'134: 90 90 | 132 128',
		'46: 4 90 | 80 128',
		'106: 13 90 | 89 128',
		'19: 125 128 | 120 90'
	];
	
	private const INPUT =
	[
		'bbbbababababbbaabbabbabbaabaabaaaabaabaabbabbbbbaabbbaaaaabbaabbaaaaaabb',
		'baabbbbbbbabbbaaaaababbaaabbabbbaababbbb',
		'abbbabaabaaabbaabababbaa',
		'babbabaaababbbababbbabaabbbbbaaaabbbaaba',
		'baabaababbbabababbbbaaaaabababbb',
		'aabaaabbabaaaaaabaaabbaaabbaaababaaaabbaabaababaaaaabbab',
		'abbbaabbbaababbaabbabbab',
		'abbaababbbbbabbabaabaaaa',
		'aaabaaabaabaabbbbbbbaaba',
		'baaababbbabbbababaaabbbbaaabaaabaabbbbba',
		'bbaabaaabaabaabaabbbbaaabbbbbaaaabbbaabbbabbaabbaabaabaabaaaabbb',
		'babbabbbbabbbabaabbbbaaa',
		'bbbaababaabaabbbaabaaabbaaabaabb',
		'aabbbabbbabaaaababbbbbabaaaaabba',
		'bbbbbbabaaaabbbababaaabb',
		'aaababababababbaabbabbaaaaaabaabbabbbbbbabaaaaaabbbbbaabaabbaabb',
		'aabbabaaaaababbaaabaabaa',
		'aababaaaaabbaabaabbbbababaabaaabaabbbababbbbbaaabaaababbaaababba',
		'aabbaaaaabbaabbbabbabaaababbabaaabaabbab',
		'baaababababaabbbabbbbbbbabbabbbbbabababa',
		'aababbababbbabaaaababababababaaa',
		'aaaabbbabbaaaabababaaaabbaabaaab',
		'ababbabbabaaaaaaabbababa',
		'babbbbabababbabbbbabaabbbbbabbabbbbabbbb',
		'bbbbabbbaaabbbaaababbbbabbabaabababaaaababbbabbabababbbbbaababbb',
		'ababbbaababababbababbaba',
		'baaababbababbbabaabaaabbaaabaabaaaaaaaaa',
		'baaabbbaabbbbbbbaabbbbabaaaabbaaabbbbbbaaaaaabbbaababaaa',
		'aaaaaaabbaaaabaabbbabbab',
		'bbaaabbbbbaababaababaaba',
		'abbbbbbabbabaabbaaaaabaabbbaabbbaaaabbbabababbaabaabbaabaaababba',
		'bbbbaaaabbbbababaabababb',
		'bbbbabbbbbbbabbabbaabbba',
		'abbbaaaabbbbbbaaaabababbababbbbabbbabaaaabbaaaaaabbbabaa',
		'babababbabbbaaaabbbaabbabbbbabaa',
		'bbaabbabbbbbaababbbbaabbaaabbaababaabaaaaaaabbab',
		'aabaaababbaaabbbbabbaaab',
		'abbaaaabbaaababbbbbbabaa',
		'abbaaabababbaabbbbaaabbabbbabbbb',
		'aabbaaaaaaabbbbaababbbbbaaaabaababaabaaaaabaababbbbabbbb',
		'abbaaabaabbabaaabbabbaba',
		'ababbbaababbaaaaababaaab',
		'bbbbbbaaaabbbbaabbaaaabaaababbbb',
		'bbbaabbabbaaababbababbbb',
		'baaababbbabbabbbbabababa',
		'bbaaabaabaaabbbbabbaabba',
		'aaabbbbaababbbabbaaaaabaaabbaabbaaababbbaabaaaaa',
		'abbaaaababbbabbbaabababb',
		'babaabaabbabaabbaaabaaaabaabbbabbbabbabbbbbbbbab',
		'babaaaababbbabbbbbbaabaabaababababaabbaaabbabaabaaaabbbaabbabbababababbbabaabaab',
		'bbbbababbaababaaaaabbbbaabaaabaabaaaababaabbabbaaabaabab',
		'aaababaababbaabbbabaabaaaaabababbbabbbbaaaabbbabbabababaababbaab',
		'baaaabaaaabbaaaabaabbabababbbbbabaaabbaaabbabbab',
		'aaabbbbbabaaaaaaababbbbaabbaabba',
		'ababaaababbbaaabbaaaaabbbabaaaababaabbbbbabaabaaaabbbaaa',
		'babbbaababbbbaabbbbaaababaabaaaa',
		'abbaaabbaaaaabbbbbbababbbbbbbabababbabaababbbaaaaabaaaabbaabbaab',
		'abaabbbabaaabbbabbbabaabbbaabbaaabbbababbbbaabaa',
		'bbbabbaaaababbaaaaababbb',
		'ababaabbbbbbababaaaabbbabaaabbabbbababba',
		'babaabbbbaabbbaababbabaaaaabaaab',
		'abaaaabaaabbbbbaaaaabbabaabbbbabaababbabbbbbbbabababaabbbbabbbba',
		'babaaaabbbbbabbaaabaaabaabbaababaabbabbaabababaa',
		'abbbabbbbbabbaabaabaabaaabbaaaaababaaabbaaabaaababbaabbaaabbbaaaaabbbbbaabaabaaa',
		'abbabbaaaaaabaaaaaaaaaaabbbababb',
		'aababbbaabaaaababaaabbbbaabbbbbbaaabbbbb',
		'abaaabaaaaababbaababbbbbbbaaaababbbbbbbbabbbbbaa',
		'bbbbbbbbbaaaababaaababababaabbab',
		'aaabaabababaabababaaaaabaabbbababbaabaaaaaaaaaaabbbaabaa',
		'bbabbabbbbaaabaababaabaaabbbaaaabaabaaab',
		'aaabababbabababbaaababbabbaaabbbaabbaaba',
		'abababbaaabbbabaaaaabbbaabbabaaabbaabbaa',
		'babababbbbaaaaaaaabbaaaaaababbbb',
		'baababaabababaabaabbaaaabbabbaabbbaababbabaabbbb',
		'aaaaabbbaababbabaaabbbabbbbbbbabbbbbaaaabaaabaababbbaaba',
		'babaabababaabbbabbbabaaaabbbbbabaaabaaaabbabbaababaaaaabbbbaabbabbaabbba',
		'bbbbabbababababbbbbaababbbaabaaaabaaabaaaaabaaaabbabbbabbaaaaaba',
		'aababbbaaaabbbbbaaabbbabbaabbbbbbbabaaababaaabab',
		'abbaaaaabbaaabbbaaaabbbaaaabbaabbbbaabaa',
		'ababaababaaaababbbbababaaabaabab',
		'aaabaabaabbbabaaabbababa',
		'babababbbbbbabaaabaaabaabbaababb',
		'baaabbbbbabbaaabbbabbbaa',
		'abbbbbbaaaabaababaaaaaaa',
		'baabbaabbbbbaaaaabaaabbb',
		'babababbaaabbabababbababaaaabbbaaabbabbbbbaabaab',
		'baaaabbbaababbbabbaaaaaabbaababb',
		'bababbabbbaaabbbabaaaabaaaababbabababbaa',
		'abbaaaababbaabaaabbabbaaabbbababababaaaaaaabaaababaaabbababbbabbaaaabaaaababbaba',
		'bbbabababbaaabbbaaabbbbbaaabaabb',
		'bbabaaabaabbaaabaabaabbaaabbbaab',
		'bbaaaabbbabaabbbaaaaaaba',
		'bbabbbbabbbbbbbbbbaaaaaabbbaaababaaaaaab',
		'abbaabaabaabaaabababbabbbbaababaabbababa',
		'aaabbbbbbababaabbbabaabbbababbabbaaaabababbaaabaababaaaa',
		'babaabbbbbabbbaabbbbbbbaabbabaaabaabbaaaaabaaaaa',
		'aababbabbabaabaaabbababa',
		'aaaabbbaabbaaabababababa',
		'bbbabababbabbbabaaabbaababbaaabaabbabbabbbbbbbbb',
		'babaabaabaaababbbaabbaabbbbbbbbaabbbaaaaabaabbab',
		'bbaabbbababbbbbaaabaabbabbbabbaaaaaaabbbbbbabbabaaabbbabbbaabaaaabbbbbba',
		'ababbbbbaabaabbabaababbaabbbbbabaaaabaaa',
		'abbbabbbabaaabbaabbaabbbaabbbbbababababa',
		'bbabbabbbbabaabaabbbbbabaaaaabbbbabaaabb',
		'bbbbbaaaababbbabbbbaaaaabbaaabbbbbaaabaaabaaababaaaaaaba',
		'baaaaabbaababaaaababaababababbababbbaabaabbaabaa',
		'bbaaaabbbabbbbbbbabbbaab',
		'aabbbbaabbbbbababaabbbab',
		'bbbaabbbabaabbabbabababbbabbbbaabaabbaab',
		'aaabbabaaabaabbababaabbbabbabaaaabbaabba',
		'abbbbbbaababbbbbbbabbbaabbbaaaaabbabbabaaabbbabaabababbbbaaaaaabbabbbabb',
		'abbaaaabbbbaaaaaabaabaaabbabbabbbbaaabababbabaabaababaab',
		'abbbaabbbbbbabbbaaaaabbaaaaababbabbaaaba',
		'bbabaabbbbbbababaabaaababbbaabbb',
		'aaaaabbbbaaababababbababbbbaaaabbaabbbab',
		'bbbbbabbabaabbabaaaabbbb',
		'bbbaaaaabbbbbbbbaaabbbabaababbabaaaaabbbbaabaabaaaabbaaabbababaaaaaaabba',
		'aabaabbabbbbbbaababbaaba',
		'bababbbaaabbbabaababbbbabbabbaaababbbaaababbaabababaabbbbabbbbba',
		'ababbabbaabaaabaaabbaaabbbbbabbbbbbabaaa',
		'baababaabaaaabbbabbbbabb',
		'bbbbbbabaababaaaababaabbabbbaaba',
		'babbabbaabaaaabbbaabaabbbbaabbba',
		'aabaaabbbaaababaabaaaaaabaaabbabaabaaaaa',
		'aababaaabbbaaaaaaaabbbbbaababababaaababbbabbaaab',
		'bbabababbaaaabbababaabbaaabbaabbbabaaabb',
		'babaabbbbaaabbaaabaabbab',
		'baaaaabaaababbbbaaababbbbbabbaaa',
		'baaababbbbbababaababababbbabaaabbababaaaabbbbabbbbbaaaba',
		'abbbbbbbbbbbabbbabaabbbabaaababababbbaabaabbabbabbbabbba',
		'bbbbbbaabaaaabbbabaaaabbbbbaaabbabbbbbaaaaaabbaa',
		'baaaababaaaaaaabbabbabbaaabbabba',
		'abbaaaabaabaabbbabbaaababaaababbbabbabbbbaabaaaa',
		'aababaaabaaaaabbbbaababb',
		'aaabababbabbbabaabaabbbababaabbb',
		'babbababaaabbbbbabbaabaa',
		'babbbbbbbbaaaaaabaabaababaabbbabaaaababb',
		'aabaaabababaababbaaabbba',
		'ababbbbbabbaababbaaaaaba',
		'aaaabaabaabaabbbabbbabaaabbbabbbbaaaabbaaaabbaaababbaaabaabaaaab',
		'babbbbbabbbbbbabaaababbabbaaaabaaaaaaaba',
		'baaababbbbabbaabababababaabaabbaaaaababb',
		'baaaabaabbabaabbaaaaaaba',
		'bbbbbaaaabbabababbbabbabaabaaabbaaaaaabbbbbbbbaaaabbaaab',
		'abababbababbaabbbbaabbbbbbabbaabaabbabbbababbbaababaaaaaaabbaaab',
		'baaaabaaabbaaabaaaabaabb',
		'baaaabaabaaaabaabbabaabbbaabbbba',
		'aaababaaaaabbbabbabbabba',
		'abbaaabaababbbabababaabababbababbabbabba',
		'ababababbbaaabbbbbabaabbbaabaaab',
		'bbbbbbbaaababbaabbbbbbbbabbabbba',
		'aabbaabbbaaaaabaaabbaaababbaababbaabaabaababababaabbbbab',
		'bbabbbaaabaaabaaaababaababaaabbb',
		'bbaababaaaaaababaaaaaaaabaaabaaabbbbaaababbaabbbbbbaababbabbabaabbabaaabbababbababbaabbb',
		'aababbbababbbbbaaabbaaabbbbbabaa',
		'aaaaababbabbaababbabaababbbbaabbaaabaabbababaaba',
		'abbbaabbbbaabbabbbabbbbbbabbaaaa',
		'baaaababbabbbbabbbabaabbbbabaaba',
		'baaaabbbbbbaaaaaaababbbababbbbbaaaabbbbbabaababa',
		'bbaaaaaaabaaabbaababbabbabaababa',
		'aababbbabbbaaaaabbbaababaaababbabbbbabbabaaaabba',
		'aababaaabbbbbaaaabbaaaaaaaaaabab',
		'abbaaabaabbbabbaababaabbbaababbabababaaa',
		'baababbabbabbabaaaababbaaabaaabbaabbabba',
		'aababbabbababbabbbaabaaabaaabbabaabaaaab',
		'aaabaaaaababbbaabbbaaaaabbaaaaaaabbaabbaaaabaaaaaababbbababaaaababaaaaabbbbaaaba',
		'abaaaabababaaaabbbbbbbbbbbbabbbb',
		'bbbabbaaababbabbaababbbabbbaababbbbbbbabbbbbbabbbaaaaaab',
		'abaabbaaaaabaababaaababaaabbbbba',
		'babbbbaaabbaaaaabbbaaababbaababa',
		'ababbabbbbbbabbaaaaabbbabbabaabbbbbbaabbbaaaaaaaaaaaabaa',
		'aababbbababbabaaaabbbabbbabbbbabbbbbabbbaaaababaaabbabbbababaaabababaaab',
		'bbabaaaabbbabbbbbbbbbabbabbbbbaabbabbbab',
		'ababbbabbaababbabaabbbaabaaaabba',
		'abbabaababbbabbbabababbabababbbb',
		'bbabbbbaaaaaabbbabbbaabbaaaabaababaababb',
		'babbbaabaaaabaaaaaababaaaabaabbabababbaabbbbbbbabbababbabbaabbbabaabbbaa',
		'aaabbbaaabbababbaabbabab',
		'bbabaabbbaaabbbbbaaaaaba',
		'babababbaabbbbaabbbbbbaaaaaaaaaabbaabaabbbbbaaba',
		'bbabaababaaaabbbabbabbab',
		'aababbaabbbbabbaabbabbaabbbaaaaabbaabaaaaabbabbb',
		'ababbbabbabaababababbaab',
		'aabbbbaabbbbbababaaabababbabbaabbbababbaababbaba',
		'abbbaabbaabbbbaaabbbbbbabbabaaabbbaababb',
		'baaaabababbbaaaaaaabbbbaabbaaabbbbaabbaa',
		'bbaaaabaaabbaaababbabbba',
		'bbbaaabbbaabaabbabaaaaabbaabbababaababbbbbaaaabababaabaabbaababa',
		'baabbababaabbbbbbabbabba',
		'baaaaabbabbbabbbababbaab',
		'aaabbbababbaaaabababbbaaabaababa',
		'abbaabaabbbaaabbabaababa',
		'abbbbbbbbabababbbababbaa',
		'abbaaabaabbaababbbbabaab',
		'baababbabaabababbbbbbbabbbbaaaabaaabbbbb',
		'aabbbababbaabbbbaaaabaabbbbaaaaabaaabababaaabbbbaabbabbbbbbabaabaaaaababaaaabbbb',
		'aaaabbbaabbaaabaaabaabbbaaabababbbbaaaba',
		'baaaaabbbbbbbbbbaababbbabbbababaaaabbaab',
		'abaaaaaababbbabaabbbbaaa',
		'aabbaaaabbbbabbbaaaaabab',
		'aaabbaabbaabbbbaaabbbaaaabbbabbabbbbaaba',
		'babbbbbbbbaaaaaabaabbbab',
		'aaabaabbbbbbbbbbaaabababbaaaababbbbabaaaaabbabbbbbabbabbaaaabbaabaabababaabbbabbabaabbbb',
		'aaabbbbabbabbabbababbaba',
		'aaabbbbbaaababababaaabbababababa',
		'aababbaabbbbbabaaaabbbaaaababbbaabbaaabb',
		'babaabbbbaaabababbabbbababaabbab',
		'baabbbaabbaabbbbaaaaaabb',
		'aaaaabbbbabbbbbaaaabababaaaabbbbabbababa',
		'bbbaaaaaababbbaabbababaa',
		'aabbbbabbbabbbaabababbbbbbaabbbbababaababababbaaabbbbbbaababaaababaabbaaaabaaaba',
		'abbaabbbabbabababaabbabb',
		'bbaaababababbabbbababbbb',
		'baabbbaababbabababaabbbaabaaabab',
		'babbbbaababbbbaaabbabbbababaaaaabbaababa',
		'bbbababaabbbbbababbbaaab',
		'ababbbbabbabbbaaababbaab',
		'bbbbaaaaabbbbaaaabbabbbbababbaba',
		'aabbbbaabbaaaabbababaabbbaabbaabbaaaabbbabbbaaba',
		'bbbabbaabbbbbbaababbababaaaabbbababaabaabaaabbba',
		'baabbaababaabbaaaabbabab',
		'babbbbaaabbababbbbaabbbbbbababbbbabaaabb',
		'baabbbaaabbababbbabbbaab',
		'abaaaababbabbaababaaaabb',
		'bbbaabababaabbaaaaabbbaabaaabbbbbabbbbabbababaaa',
		'bbbbbbbaaababbaabaaabbab',
		'ababaabbaabbbabaababbaaabbbabababaaaabba',
		'aaababbabaabbbbbbaaababaaaababbaabbbbbbbaaababbb',
		'babaababbabaabaaabbbabbbbbbaaaaabaababab',
		'ababbaaaaaaabaabaaaabbabbbbbaaaaaaaababaaaaabbab',
		'bbbbabbbbaabbabababbbbabaabbbbbbaabababaaabbabaaaabbbbabbabaabbaaaaababbbbaababa',
		'aaaabbbaaababaabaaaaabaa',
		'bbbaababaabaabbaaababbabaaaabbbaaabaaaabaaaabbbb',
		'abbabbaaabbaaababbbabbaabbaaabbabaaaaaab',
		'ababaabaabbbbbbabaaaaaba',
		'babbaabbbbbbaaaaabbaaabababbabaabbbbbabb',
		'aababaaaaabaabbaaabbaaaababaaaabbbaabaab',
		'bababaabaabaaabaabbbaabbaabaaaaa',
		'babbabbbabbabaaaaaaabbbabaaababbbaaaaaaa',
		'bbabbabbaaababaabbbbbabb',
		'abaabbaaaababaabbbbaaaaabbabaabababbabaabbbbaabaaabbbaabababbaab',
		'baaabbaaabbbaabbbbbbaababbbaaabbaabbaaabbaaaaabaaaabaaaabbbabbabaaabbbbabbbbaabaababbbabbbbbabaa',
		'baaaabbbaabbbbbbbbaaabbbbaaaabbbbbaaaaab',
		'babbabababbaaabaabbabaabaabaaabababbaabbbbbabaab',
		'bbaaaaaaaabbbabaabbabaaabaaababaabaabbbb',
		'bbbbabbbbbabbababbbbbbbbaababbbaabababababbababa',
		'aaaaabbbbaaaabaababbbabababaaaabbbbbaaabaaabaabb',
		'bbaabaaaaabbbbbbbbbbbaaaabaabbab',
		'bbababaaaabaaabbaabbbabbbbbabbaaababbabbababaabbabbbababbabbabbabbbbaaab',
		'bbbbbababbbbbaaaaaabababbaaabbaaaabbaabb',
		'abbbaaaaababbbbbbbabbabbaaabbbaaaaabbabababaaaabbbababbb',
		'abaaabaaaabbbabaabbbabab',
		'bbaaaabbaaabbbabaaabababaaabbabbaabbabbaabaabbbbbbbbbabbbaabaabb',
		'aabbaabababaaabbabaabaaaabbabaaaaaaabbbbaaaaaaab',
		'bbaaababababbaaaababbbaababbbabb',
		'babaabaabbbbbaaabbbaabaa',
		'baaaabbbababbbbabaabbaabaababaaabaababbaabbbbbaa',
		'aabbbabababbbbaaaaababaa',
		'bbaabaaabbbbbaaabbabbaabbabbbbbbbabaaaba',
		'baaaababababbbbaababbaaabaaaabbbbbaaabba',
		'bbaabbbbbabbaabbabbbabbbbbabaabbbbbbbbbabaababbb',
		'ababbabbbbaabbbaabbbbbbaabbbabababbbbbaabbbaabaabbababbb',
		'bbaabaaabaabbababbbbaaba',
		'baaaaabbaabbbabbbabbabab',
		'aaabbbaabbabbbbaabbbabaaaaabbaab',
		'abababbababbaabbaabbabaaabababaa',
		'bbabbabaaababaaaabbabaabbbbbbbbbaaabaabaabbbbbbabbbbbabbabbbbaaa',
		'baaaaabbaaaabbbabbbbbbabaabaabbabababaaabababbbb',
		'bababbabababbbbaabbbabab',
		'aabbaaaaaaabaaabbbaaaaab',
		'bbbbbbaaabbbabbbaabaabbaabaabababbabbbbbabbabbababaabaaaaabbabbb',
		'babaaaabbaababbababbbbbaaaaaaaababaabaab',
		'abbbbbabbbabbbbaaabaaaaa',
		'ababababaaabaababbaaabba',
		'baababaabaaabababbaaababbbbbbabbbabaaabb',
		'bbbbbbbbaabaaababbbbababaaaabaabbbbbabaa',
		'abaabbaaabababababbabaaabbaaabaaabaaaaaa',
		'abbaaababbaabaaabbbaabbabbbbaaab',
		'bbabaabbaabaaabbbaaaabababbaaaabaabbbbaaaabbbbbabbaabbab',
		'abaaaaabbbaaaabaaaaababa',
		'ababbabbabaaaababaaabbaabaaabbab',
		'bbabbbbabbabaabbbbabbabbaabababaabababbb',
		'aaabbbaaabaaaaabbaaababaabbababbabbabbbababbaaabbabaaaaa',
		'bbaaabbbaaabaabbbaabbbba',
		'abbaabababaaaabababbbbababaaaaabbbbbabbabbbabbbabaabaaaa',
		'bbbababaaababaaaaabaaaaa',
		'ababbbabbbbaababbbaaaaaaabbbbbbabbbaaabaaababbbb',
		'aababbabbbbababaabaabbbbbbaabbaabababbababaababaaabbaaaaababbbab',
		'baabaabaaabbaababbbbaaba',
		'bbabbbbbbabaaabbabaabaabbbabaaabbaaabaaa',
		'abaaaabbabbabaabbbaaaabaaaaabbaabbbbababababbabb',
		'ababbbababaaaaabaabbabaaaaabaababaabaababbababbaaabbaabaabbaabbaaaaabbab',
		'abbabaabbababbabaaaabbab',
		'aabbbabaabbbaaaabbabaabbbabbaaaaabababbb',
		'babbbbbbaabbaaaaaabbbabbbbbabaabbbbabbab',
		'aabababaaabbaaabaaaababa',
		'aabababababbbabaaababbababaabbbaaaabaaaababbaaab',
		'abbababbbbaabbbbabbaabba',
		'baaabbaaaabbaaababbaaaabbbaabbba',
		'bbbaababaabababbbbababba',
		'baaababbabbaaaaababaaabb',
		'abaabbaabaabbababaaaababbabaababababbaab',
		'bababaabbbaabbbbbababbba',
		'abbaababbababaabbbbabababbbaababbbbaaabbbbababaaabbababa',
		'abbbabbbbbaaaaababbbbaababbababa',
		'abbbbabaaabbbbabbaabbbab',
		'ababbbaabbbabbbbababbaabbbbaaaab',
		'aaabaaabbbabbbabbbbbbbabaabbbbbbbbbaaabababaabba',
		'abbbbbabbabaabbbababaababaabaabaaabbbbaaaaaaaaabaaabbaab',
		'baaaabbbabbabaaaaaaaabbbabbaaaababababaa',
		'aababababaabaabaabaaaaaaaabababb',
		'baaaabaaaabbaaaabbbbaaaaabbaabba',
		'bbbbbbbabbbbabbbabbbbaab',
		'aabbbabbaabbabaaaaaaabbbababbbbabbabbaabbaabababbbaabbbabbbaaaba',
		'aababbaabbbbbbaaaababbbb',
		'bababaabaabaaabbbbaabaaabbabbabbaabbbaab',
		'bbabbabbabbaaaaabbaaaabbbabaaaaa',
		'bbbbbabaabbabbaabbabbabbbbaaabbbbbaaaabbbbbaabbbaabaababbbbaabbb',
		'aaabababababbbbabbbaabbabbabbbab',
		'aaaaababaaababbbaabaaaabaaaabbaabbbaaaab',
		'baabbbaabbaabaaabbabaaabaaababaabaaababbabbbabaabbaabbaaaaaabbaa',
		'abbabbaaaaabbbbaabbbbbabbabbaaab',
		'baaaababaababbabbbbbabbabaababaaabbaaaabbbabaaaaaabbabba',
		'aababbabaaaabbbaaabaaababbabaaabbabbaaaababaaababbababaabaabbbba',
		'bbaaabababbbabbabbabbabbbaabbababbaabaab',
		'babaabababbbbbbaabbababbabbbaaab',
		'aabababaababbbbbabbaaabaabbbbaba',
		'baaabbbbbbaaabababbbaaaaababbbaabbbbaabbaaaaabaa',
		'bbbbabbbbabbaabbabaabbab',
		'abaabbbabaabbaabbaaaabbaaabbaaaababaaabbabbabbabbbabbbbbabbaaabaaaaabaab',
		'abbbbbbbabbabbaaaabaaababbbbbaaabbaaaaababbbbbaaaabbabbb',
		'aaaabbbaabbbabbaabbabbaabaabbaaa',
		'bbaaaaaaabaabbaaaaaaaaababaaaabbaaabaaaa',
		'baababbaabbaabbbababbaaabababbaa',
		'aabbababaabbababbabbabbbabbbabbaababbabbaaabbabbabaaaabaaabbbbaababbbbbb',
		'bbbbbaaaaababaababaabbbaaabaababaaabaaaa',
		'aaabaabaaabaaabaabaabbbabbbaaaab',
		'babaabbabbbbbbabbbbbbbbbbaaaaaaa',
		'aabaaabbbabbbbaabaaababbbbabbbbb',
		'baababaabaaaaabbabbbabbbbbababaaababbaba',
		'bbaaaabbbbaaabaababaabaaaaabaabb',
		'babbaabbababbaaaabbbbbbbaaaabbbabbbaabbabaaaabbababaaaaa',
		'aaaaaaabbabaababababbbabbbabbaabbbabbbabbaaabaaa',
		'abbaaaaabbbbbaaaabaabbaabababaaabbababbb',
		'aababbaababbbbabbaaaaaba',
		'babbbbabababbaaabbaabbbb',
		'bbbbabbbbbabaabbbababbababaaabbb',
		'bababbabaaaaabbbaabbbaba',
		'abaaabaababbabbbaaaaabbbbbbbbaab',
		'aababbbaaaababbaabbaabbbbbbbbbbbaaaaaabbbbbaaabb',
		'babaababaabbaaabbabababbaaabbbabbbababbbabbaaabb',
		'babaabababbabaaaababbaaababbbbaabbababbbbbbaaaba',
		'babbabbbabaaabaabbbbabaa',
		'aaabbbbaaababababbbbbabaaabbaabbbbbababbabbaaabb',
		'aabaaabaaabbaaaabababaab',
		'bbababbbaaabaaaaabbaaaaaabbbabaaabbbbabbaababaabbbabaabaabbabbaaabbaabab',
		'babbabaaaababbabbabaaaabaaaaabbbaaabbbababbabbaababbbaaabbbababb',
		'aabbbabbaabaabbbabbaaabb',
		'bbbbaaabbabaaabaabbaaabbbbbabaabaabbabbb',
		'aabbaaabbaaabbaabababaaa',
		'abbbaabbbbbbaaaabababbabbbabaabbabbaaaaaaabaaaab',
		'aaaabbbaaaabbbbabaaabbbbaaabbbbbabbaaabababababbbabaaaaabaabaabbbbbaaaabaaaaaabbbbbabaaa',
		'bbbbabbbbbaabaaabbbaaaaaaababaabaaabbaaa',
		'bbbbabbaaaabbbabaabbaaaaaababaaabaabbbaaabaaababbababbbabbababba',
		'bbabbabaabaaaaaabbaababa',
		'bbbaabababbabaabbaaaaaab',
		'bbaaabbbbbbaaabbaaabaaabbbbaaabababbaabbaabbbabbabbabbba',
		'abaabbaaabbbbbbaaaababbaaabaaabaaabbabbbabababbbabababaa',
		'aaabababaabbbbaaabababbb',
		'babaabbbaababbbabbaabbab',
		'aaaaaabaabbabbabaaabbabbaaabaabb',
		'aaaaaaababbbaabbbbabaabaaaabbaaaabaabbab',
		'babbbbbbababaabbaaaaabba',
		'ababbaaaaaaaabbbaabbbababbbaaabaaabbbbba',
		'bbbbbbaaabbbaabbbaabbbaaaababaaabaabaabbbbababaaaabbbaaa',
		'aaaaabaaaaabaabaaababbaaabaaababbbaababaaaabbbababbbaaabaaaaabbbbabbababbbbbbabb',
		'bababaabababbbaaaabaaabaabaaaabbbabaaaaa',
		'bababaabbbabaabbbabbbbaaaaaabbab',
		'aabbbbaaabbbbbbaabaabbbb',
		'aaabaababbbaaaaabbaabbab',
		'abbbbbbabbbaababaaaabbbb',
		'ababaabbbbabbbaababababa',
		'bbabbabbaaabbbbabaaaabaababaabaabbbbabaa',
		'abaaaabbaaabbaaaabbbaabaaabbaaaaababaaabaababaabbaabaaaabababbba',
		'bbaaaabbbaababaaababbbbaaabbaaba',
		'baaaababbaaabbaaabbaaaabaaabbbaabbaaabbbaaaabbab',
		'babbbbbababbaaaaaabaaababaaaaabbabababbaabbbbbabbbaaaaababbaaabb',
		'babbbbbabbbbbbababbaaaaaaabbabbb',
		'babbbabaaaabaaabbbbabbba',
		'abaaabbbbbbaaababaaabbabbaaabbba',
		'baababbaaaaaabbbbbaabbbbababaaabaabbabab',
		'bbaababbbaabaabbaaaababbaaabbaaabbbbbabbbabbbbabaabaabaabbbbaaaaaaaabbbababbaaaaabbaaaab',
		'baaaaabbbbabbabababbbababababbbbaaaabbbb',
		'bbaaababaabbabaababbaaaaaaababaaaaabbabaabbaabbb',
		'bababaababaaaaabaaabbbbbabaabaab',
		'aaabaaabbaaababaabbbabbbabbbaabbababbaab',
		'bbabaababaaaabaaaaaaabab',
		'bbabbabaaabbbabaabbbaaab',
		'babaaaabbabbbabaaaaabaabbbbbbbbaabaaaababaaaaaab',
		'bbaaaabbaaabbabaababaaab',
		'bbbbbababbabaaababaababa',
		'abbbabaabbaaaaaaabaaaaabbabbaaaaabbabbaabbaabaabaaabaabbaabababb',
		'bbabbbbabbbbabbbbbabbabbbaaaababbbaaaaaaaabbaaabaaabbaaa',
		'babbabbbaabaaaaabaaaabbaabbbbbbabbbbaababbbbabaaaabbbbaa',
		'abaaaababaabbabaabaaaabbaaaaaaabbbaaabababababbbabbabbabababbaba',
		'abaabbabbbaaaaaaabbbaaaababbbbbbbbaaaaaa',
		'babbabababbbabbbabaaaaaaabaabaaa',
		'bbabaaababbbbabbbbbabbabaababbbaaaaabbaaaabbabaabbabbbbbbbaaabbababaaaaa',
		'ababaabbbaabbaabbbbbbbbbbbbabbababbbaaab',
		'bbaaaababaaabababaaaaaaa',
		'baabbbbbbbaabbbbbaabbabaaaabbbbabaabbabb',
		'ababbbbbaaaaaaabaaaabbbb',
		'baababaababbabaabaabbbba',
		'aabbbbbbaabaaabbbbbbbbbabababaabbbbaabbbaababbbbbbaababb',
		'bbbbabbaabaaaaaaababbbbabaabbababbaabbabbabaaaaabbaabbab',
		'bbabbabababbaabaabbbbabbaaaabbbbabbbbabb',
		'bbbaababababaababbaaabba',
		'aabbbabaabaabbbaaaabaababbbabbab',
		'abbababbbbabbbbaababababbbbaabbbbaaabbba',
		'aababbaabbaaaabaaaabaaabbbbbabaa',
		'bbaaaababbbbbbbbbbbbbbabaaabaabb',
		'baaaabaababababbbabaabaaabbaaaaabbabbaaa',
		'babaabbbbabaaaabaabaaabbbaabaababbbababb',
	];

	private const RULES2 = 
	[
		'0: 4 1 5',
		'1: 2 3 | 3 2',
		'2: 4 4 | 5 5',
		'3: 4 5 | 5 4',
		'4: "a"',
		'5: "b"'
	];

	private const RULES3 = 
	[
		'0: 1 2',
		'1: "a"',
		'2: 1 3 | 3 1',
		'3: "b"'
	];

	/** @var Rule3[] $rules */
	private $rules = [];

	public function run()
	{
		set_time_limit(0);
		
		//Parse Rules:
		foreach($this::RULES as $rule)
		{
			$id = intval(substr($rule, 0, strpos($rule, ':')));
			$i = strpos($rule, '"');
			if($i !== false)
			{
				$char = substr($rule, $i + 1, strpos($rule, '"', $i+1) -1 - $i);
				$this->rules[$id] = Rule3::makeLiteral($id, $char);
			}
			else
			{
				$subs = substr($rule, strpos($rule, ':') + 2);
				$this->rules[$id] = Rule3::makeSub($id, $subs);
			}
		}
		ksort($this->rules);

		//Get the whole thing as a regex:
		$regex = RuleHelper::getRegex($this->rules[0], $this->rules);

		$correct = 0;
		foreach($this::INPUT as $line)
		{
			$correct += preg_match($regex, $line) ? 1 : 0;
		}

		echo "There are <b>$correct</b> correct messages";
	}
}

class Rule3
{
	public $literal = false;
	public $char = '';
	public $subs = [];
	public $id = 0;

	public static function makeLiteral(int $id, string $char)
	{
		$rule = new Rule3();
		$rule->id = $id;
		$rule->char = $char;
		$rule->literal = true;

		return $rule;
	}

	public static function makeSub(int $id, string $subs)
	{
		$rule = new Rule3();
		$rule->id = $id;
		$rule->literal = false;

		$subGroups = explode(' | ', $subs);
		foreach($subGroups as $sg)
		{
			$subGroup = [];
			$ids = explode(' ',$sg);
			foreach($ids as $id)
			{
				$subGroup[] = intval($id);
			}
			$rule->subs[] = $subGroup;
		}

		return $rule;
	}
}

class RuleHelper
{
	public static $results = [''];

	public static function getRegex(Rule3 $rule, array &$rules, bool $init = true)
	{
		$regex = '';
		if($rule->literal)
		{
			return $rule->char;
		}
		else
		{
			$regex  .= '(';
			foreach($rule->subs as $sgid => $subGroup)
			{
				if($sgid > 0)
				{
					$regex  .= '|';
				}
				foreach($subGroup as $id)
				{
					$regex  .= RuleHelper::getRegex($rules[$id], $rules, false);
				}
			}
			$regex  .= ')';
		}

		return $init ? '/^'.$regex.'$/' : $regex;
	}
}